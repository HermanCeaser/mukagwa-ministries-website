<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function(Set $set, Get $get, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }
                    
                         $set('slug', Str::slug($state));
                        }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('body')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('thumbnail')
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options(['draft' => 'Draft', 'published' => "Published", 'disabled' => 'Disabled'])
                    ->default('draft')
                    ->selectablePlaceholder(false)
                    ->native(false)
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at'),
                Forms\Components\Select::make('user_id')
                    ->relationship(name: 'author', titleAttribute: 'name')
                    ->native(false)
                    ->required(),
                    Forms\Components\Select::make('categorable')
                    ->relationship(name: 'categories', titleAttribute: 'name')
                    ->native(false)
                    ->multiple()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('thumbnail'),
                // Tables\Columns\SelectColumn::make('status')
                // ->options([
                //     'draft' => 'Draft',
                //     'disabled' => 'Disabled',
                //     'published' => 'Published',
                // ]),
                Tables\Columns\IconColumn::make('status')
                ->icon(fn (string $state): string => match ($state) {
                    'draft' => 'heroicon-o-pencil',
                    'disabled' => 'heroicon-o-clock',
                    'published' => 'heroicon-o-check-circle',
                })
                ->color(fn (string $state): string => match ($state) {
                    'draft' => 'info',
                    'disabled' => 'warning',
                    'published' => 'success',
                    default => 'gray',
                }),
                Tables\Columns\TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

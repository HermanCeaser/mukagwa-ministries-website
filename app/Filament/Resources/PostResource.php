<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationGroup = 'Blog';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Post Title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Set $set, Get $get, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\RichEditor::make('body')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('thumbnail')->required(),
                Forms\Components\Select::make('status')
                    ->lazy()
                    ->options(['draft' => 'Draft', 'published' => "Published", 'disabled' => 'Disabled'])
                    ->default('draft')
                    ->selectablePlaceholder(false)
                    ->native(false)
                    ->required(),
                Forms\Components\DateTimePicker::make('published_at')
                    ->label('Publish Date')
                    ->default(now())
                    ->visible(fn (Get $get) =>  $get('status') === 'published'),
                Forms\Components\Select::make('user_id')
                    ->relationship(name: 'author', titleAttribute: 'name')
                    ->native(false)
                    ->required(),
                Forms\Components\Select::make('categorable')
                    ->relationship(name: 'categories', titleAttribute: 'name')
                    ->native(false)
                    ->multiple()
                    ->preload()
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
                Tables\Filters\SelectFilter::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                        'disabled' => 'Disabled',
                    ]),
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

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Blog Post Details')
                    ->columns(2)
                    ->schema([
                        ImageEntry::make('thumbnail'),
                        Infolists\Components\Group::make()
                            ->schema([
                                Infolists\Components\TextEntry::make('title'),
                                Infolists\Components\TextEntry::make('slug'),
                            ]),
                        Infolists\Components\TextEntry::make('body')
                        ->extraAttributes(['class' => 'prose dark:prose-invert'])
                        ->html()
                        ->columnSpan('full')
                    ]),
                Infolists\Components\Section::make('publishing')
                    ->columns(3)
                    ->schema([
                        Infolists\Components\IconEntry::make('status')
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
                        // Infolists\Components\TextEntry::make('categorable')
                        // ->sele
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

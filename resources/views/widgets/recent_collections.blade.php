<div class="card p-0">
    <div class="widget-header p-4" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: white;">
        <h3 class="m-0">Recent Collections</h3>
        <p class="m-0 opacity-75">Quick access to your most used content</p>
    </div>
    
    <div class="p-4">
        <div class="row">
            @foreach($recentEntries as $handle => $collection)
                <div class="col-md-4 mb-3">
                    <div class="collection-section">
                        <div class="d-flex align-items-center mb-2">
                            <h5 class="mb-0">{{ $collection['title'] }}</h5>
                            <a href="{{ $collection['route'] }}" class="btn btn-sm btn-primary ml-auto">View All</a>
                        </div>
                        
                        <div class="collection-items">
                            @forelse($collection['entries'] as $entry)
                                <div class="collection-item py-2 border-bottom">
                                    <a href="{{ cp_route('collections.entries.edit', [$handle, $entry->id()]) }}" 
                                       class="d-block text-decoration-none">
                                        <div class="font-weight-medium text-dark">
                                            {{ $entry->get('title') ?? $entry->get('name') ?? 'Untitled' }}
                                        </div>
                                        <small class="text-muted">
                                            Updated {{ $entry->lastModified()->diffForHumans() }}
                                        </small>
                                    </a>
                                </div>
                            @empty
                                <div class="text-muted py-2">
                                    <small>No entries found</small>
                                </div>
                            @endforelse
                        </div>
                        
                        <div class="mt-2">
                            <a href="{{ cp_route('collections.entries.create', $handle) }}" 
                               class="btn btn-sm btn-outline-primary">
                                + Add New
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
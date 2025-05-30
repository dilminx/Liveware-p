<div class="container mt-5">
    <div class="card p-4 shadow-sm">
        <form wire:submit.prevent="save">
            <h4 class="mb-3">Create New Post</h4>

            <div class="mb-3">
                <label class="form-label">Title:</label>
                <input type="text" class="form-control" wire:model="title">
                @error('title') 
                    <div class="text-danger mt-1">{{ $message }}</div> 
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Body:</label>
                <textarea class="form-control" rows="4" wire:model="body"></textarea>
                @error('body') 
                    <div class="text-danger mt-1">{{ $message }}</div> 
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Save Post</button>
        </form>
    </div>

    <div class="mt-5">
        <h4>All Posts</h4>

        @foreach ($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->body }}</p>
                </div>
            </div>
        @endforeach

        <div class="mt-4">
            {{ $posts->links() }}
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group mb-3">
                <label for="title">Title:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" wire:model="title">
                @error('title')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="keywords">Keywords:</label>
                <textarea class="form-control @error('keywords') is-invalid @enderror" id="keywords" wire:model="keywords" placeholder="Enter Keywords"></textarea>
                @error('keywords')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="body">Full Text:</label>
                <textarea class="form-control @error('body') is-invalid @enderror" id="body" wire:model="body" placeholder="Enter Full Text"></textarea>
                @error('body')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="d-grid gap-2">
                <button wire:click.prevent="updatePost()" class="btn btn-success btn-block">Update</button>
                <button wire:click.prevent="cancelPost()" class="btn btn-secondary btn-block">Cancel</button>
            </div>
        </form>
    </div>
</div>

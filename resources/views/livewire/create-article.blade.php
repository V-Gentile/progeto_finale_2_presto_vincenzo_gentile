<div>
    @if (session()->has('message'))
        <div class="alert alert-success text-center">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit="store" class="p-4 shadow bg-white rounded">
        
        <div class="mb-3">
            <label for="title" class="form-label">Titolo dell'annuncio</label>
            <input type="text" class="form-control" id="title" wire:model="title">
            @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" rows="5" wire:model="description"></textarea>
            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo (€)</label>
            <input type="number" step="0.01" class="form-control" id="price" wire:model="price">
            @error('price') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <div class="mb-3">
            <label for="category_id" class="form-label">Categoria</label>
            <select class="form-control" id="category_id" wire:model="category_id">
                <option value="">Seleziona una categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id') <span class="text-danger small">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100">Crea Annuncio</button>
    </form>
</div>

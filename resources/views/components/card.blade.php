@props(['article'])

<div class="card">
    <img src="https://loremflickr.com/600/400?random={{ $article->id }}" class="card-img-top" alt="Immagine annuncio">
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">Prezzo: {{ $article->price }} €</p>
        <a href="{{ route('articles.byCategory', $article->category_id) }}" class="btn btn-sm btn-info">
        {{ $article->category->name }}</a>
        <a href="{{ route('articles.show', $article) }}" class="btn btn-primary">Dettaglio</a>
    </div>
</div>

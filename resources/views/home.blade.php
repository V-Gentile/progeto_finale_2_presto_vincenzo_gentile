<x-layout>
    <div class="container mt-5 text-center min-vh-100 d-flex flex-column justify-content-center align-items-center">
        <h1 class="display-3 fw-bold">Benvenuto su Presto.it</h1>
        <p class="lead mt-3 mb-5">Il portale numero uno per i tuoi acquisti e le tue vendite in totale sicurezza.</p>
        
        <a href="/annunci/crea" class="btn btn-primary btn-lg px-5 py-3 shadow">
            Inserisci annuncio
        </a>

        <div class="container mt-5">
            <h2 class="text-center mb-4">Ultimi annunci inseriti</h2>
            <div class="row">
                @foreach ($articles as $article)
                    <div class="col-md-3 mb-4">
                        <x-card :article="$article" />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>

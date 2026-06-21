<x-layout>
    <div class="container mt-5">
        <h2 class="mb-4">Tutti gli annunci</h2>
        
        @if (session()->has('message'))
            <div class="alert alert-success text-center">
                {{ session('message') }}
            </div>
        @endif

        <div class="row">
            @foreach ($articles as $article)
                <div class="col-md-4 mb-4">
                    <x-card :article="$article" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>

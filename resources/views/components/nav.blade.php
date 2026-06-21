<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">PRESTO</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/annunci/crea">Crea un Annuncio</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.index') }}">Tutti gli annunci</a>
                </li>
                
                @auth
                    <li class="nav-item">
                        <form action="/logout" method="POST" class="d-inline">
                            @csrf
                            <button class="nav-link btn btn-link border-0" type="submit">Esci</button>
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Accedi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Registrati</a>
                    </li>
                @endauth
                
            </ul>
        </div>
    </div>
</nav>

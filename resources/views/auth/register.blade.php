<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Registrati</h2>
                <form action="/register" method="POST" class="p-4 shadow bg-white rounded">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    
                    <div class="mb-3">
                        <label for="email" class="form-label">Indirizzo Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma Password</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 mb-3">Registrati</button>
                    
                    <div class="text-center">
                        <span class="small">Hai già un account?</span>
                        <a href="/login" class="small text-decoration-none">Accedi qui</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

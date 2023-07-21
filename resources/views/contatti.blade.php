<x-layout title="contatti">
<x-navbar />

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="display-1 text-center">Scrivi qui per info</h1>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 p-5 shadow">
            <form method="POST" action="{{route('send')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label fs-4">Nome</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="Cognome" class="form-label fs-4">Cognome</label>
                    <input type="text" class="form-control" id="Cognome" name="surname">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fs-4">indirizzo email</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="number" class="form-label fs-4">Numero di telefono</label>
                    <input type="number" class="form-control" id="number" name="number">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label fs-4">Scrivi qui le info che ti servono</label>
                    <textarea class="form-control" name="body" id="body" cols="30" rows="10"></textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-layout>
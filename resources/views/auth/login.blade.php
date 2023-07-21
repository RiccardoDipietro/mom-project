<x-layout title="contatti">
    <x-navbar />
    
    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="display-1 text-center">Accedi</h1>
            </div>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 p-5 shadow">
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="userEmail" class="form-label fs-4">Indirizzo email</label>
                        <input type="text" class="form-control" id="userEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="userPassword" class="form-label fs-4">Password</label>
                        <input type="password" class="form-control" id="userPassword" name="password">
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    </x-layout>
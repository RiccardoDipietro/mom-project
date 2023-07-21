<x-layout title="Articoli">
    <x-navbar/>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="display-1 text-center">Articoli:</h1>
            </div>
            @foreach ($articles as $article)
            <div class="col-12 col-md-6 my-5">
                <img src="{{Storage::url($article->img)}}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-6 my-5">
                
                <h1>{{$article->title}}</h1>
                <h2>{{$article->subtitle}}</h2>
                <div class="d-flex justify-content-start my-5">
                    <a href="{{route('show', ['article' => $article])}}" class="btn btn-info mx-3">dettaglio</a>
                    @auth
                    @if (Auth::user()->is_admin)
                        <a href="{{route('edit', compact('article'))}}" class="btn btn-warning mx-3">modifica</a>
                        <form action="{{route('delete', compact('article'))}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger mx-3">cancella</button>
                        </form>
                        @endif
                        @endauth
                    </div>
                    
            </div>
            @endforeach
        </div>
    </div>
</x-layout>
<x-layout title="dettaglio {{$article->title}}">
    <div class="m-5">
        <h1 class="display-1 text-center mt-5">{{$article->title}}</h1>
    </div>
    <div class="container ">
        <div class="row juastify-comtent-center">
            
            <div class="col-12 col-md-6">
                <img src="{{Storage::url($article->img)}}" class="img-fluid" alt="">
            </div>
            <div class="col-12 col-md-6">
                <h2>{{$article->subtitle}}</h2>
                <p class="fs-4">{{$article->body}}</p>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-end">
            <div class="col-12 col-md-8">
                <p class="fs-4 text-end">{{$article->cit}}</p>
            </div>
        </div>
    </div>
</x-layout>
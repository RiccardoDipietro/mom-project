<x-layout title="Crea Articolo">
    <x-navbar/>

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="col-12">
                    <h1 class="display-1 text-center mb-5">modifica l'articolo: <br> {{$article->title}}</h1>
                </div>
                <form method="POST" action="{{route('update', compact('article'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                      <label for="title" class="form-label fs-3">Titolo</label>
                      <input type="text" class="form-control" id="title" name="title" value="{{$article->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label fs-3">Sottotitolo</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$article->subtitle}}">
                      </div>
                      <div class="mb-3">
                        <label for="body" class="form-label fs-3">Testo</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control">{{$article->body}}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="cit" class="form-label fs-3">Citazioni/Bibliografia</label>
                        <textarea name="cit" id="cit" cols="30" rows="10" class="form-control">{{$article->cit}}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="img" class="form-label fs-3">Immagine</label>
                        <input type="file" class="form-control" id="img" name="img">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>
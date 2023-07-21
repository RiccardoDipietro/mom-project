<x-layout title="recensioni">
<x-navbar/>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <h1 class="display-1 text-center">Recensioni</h1>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 p-5 shadow receCont">

            <div class="recensioni">
                @foreach ($recensioni as $recensione)
                @if ($recensione->user_id)
                <div>
                    <div class="bg-primary p-3 m-4 recensione">
                        <p class="fs-4 text-white">{{$recensione->recensione}}</p>
                        <div class="d-flex justify-content-start">
                            <p>{{$recensione->user->name}} - {{$recensione->user->email}}</p>
                        </div>
                        <div class="d-flex justify-content-end">
                            @for ($i = 0; $i < $recensione->star; $i++)
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                        @endfor
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                
            </div>

            @auth
            <form class="form-recesioni" action="{{route('storeREC')}}" method="POST">
                @csrf
                <div class="d-flex">    

                <div>
                    <div class="m-3 mt-4">
                        <label for="recensione" class="form-label fs-4">Scrivi la tua recensione</label>
                        <textarea style="width: 700px" class="form-control" name="recensione" id="recensione" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="m-3 d-flex flex-column justify-content-center p-3">
                    <div class="my-2">
                        <input class="star" type="radio" id="star1" name="star" value="1">
                        <label for="star1">
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                        </label>
                    </div>
                    <div class="my-2">
                        <input class="star" type="radio" id="star2" name="star" value="2">
                        <label for="star2">
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                        </label>
                    </div>
                    <div class="my-2">
                        <input class="star" type="radio" id="star3" name="star" value="3">
                        <label for="star3">
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                        </label>
                    </div>
                    <div class="my-2">
                        <input class="star" type="radio" id="star4" name="star" value="4">
                        <label for="star4">
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                        </label>
                    </div>
                    <div class="my-2">
                        <input class="star" type="radio" id="star5" name="star" value="5">
                        <label for="star5">
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                            <i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i>
                        </label>
                    </div>
                </div>
                
            </div>
            <div class="d-flex justify-content-end me-5">
                <button type="submit" class="btn btn-primary">Invia recensione</button>
            </div>
            </form>
            @endauth
        </div>
    </div>
</div>

{{-- @foreach ($recensioni as $recensione)
@if ($recensione->user_id)

<div>
    <p>{{$recensione->recensione}}</p>
    <p>{{$recensione->star}}</p>
    <p>{{$recensione->user_id}}</p>
    @for ($i = 0; $i < $recensione->star; $i++)
        <p><i class="fa-solid fa-star fs-3" style="color: #fbff00;"></i></p>
    @endfor
</div>

@endif
@endforeach --}}


</x-layout>
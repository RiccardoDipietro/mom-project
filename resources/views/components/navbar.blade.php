<x-layout title="navbar">
<nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i class="fa-solid fa-brain"></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link fs-3 mx-2" aria-current="page" href="{{route('home')}}">Homepage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3 mx-2" href="{{route('contatti')}}">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3 mx-2" href="{{route('index')}}">Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fs-3 mx-2" href="{{route('recensioni')}}">Recensioni</a>
          </li>
          @auth
          @if (Auth::user()->is_admin)
          <li class="nav-item">
            <a class="nav-link fs-3 mx-2" href="{{route('create')}}">Scrivi un Articolo</a>
          </li>
          @endif
          @endauth
        </ul>
            <li class="nav-item dropdown d-flex align-items-center me-5">
              <a class="nav-link dropdown-toggle fs-3" href="#" id="navbarDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              @auth
              {{ Auth::user()->name }}
              @else
              Benvenuto utente
              @endauth 
          </a>
          <ul class="dropdown-menu rounded-1 w-100" aria-labelledby="navbarDropdown">
            @auth
            <li>
                <a href="" onclick="event.preventDefault();getElementById('form-logout').submit();" class="dropdown-item fs-5 hoverLog">Logout</a>
            </li>
            <form id="form-logout" class="d-none" method='POST' action="{{ route('logout') }}">
                @csrf
            </form>
            @else
            <li><a class="dropdown-item fs-5 hoverLog" href="{{ route('register') }}">Registrati</a></li>
            <li><a class="dropdown-item fs-5 hoverLog" href="{{ route('login') }}">Login</a></li>
            @endauth
        </ul>
      </li>
      </div>
    </div>
  </nav>

</x-layout>
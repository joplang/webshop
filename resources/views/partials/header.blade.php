<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/products">Albums</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/artists">Artiesten</a>
                </li>
                        <li class="nav-item">
                  <a class="nav-link" href="/labels">Labels</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/genres">Genres</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/discounts">Aanbiedingen!</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-success" href="/cart">
                    <i class="fa fa-shopping-cart"></i>Winkelmand
                      <span class="badge badge-light">3</span>
                  </a>
                </li>
                      <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            <ul class="navbar-nav">
               @guest
                    @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                     @endif
                     @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                     @endif
                     @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->first_name }}
                              </a>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/customers/{{ Auth::user()->id}}">Profiel</a>
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
               @endguest
             </ul>
        </div>
      </div>
    </nav>

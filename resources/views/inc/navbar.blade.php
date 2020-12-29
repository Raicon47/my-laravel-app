 
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3 shadow">
            <div class="container">
             <a class="navbar-brand font-weight-bold" href="{{url('/')}}">{{config('app.name', 'Tripcard')}}</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  {{-- left nav  --}}
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @guest
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                  </li>
                  @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/cards')}}">Cards</a>
                  </li>
                  @endif
                  @else
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/cards')}}">Cards <span class="sr-only">(current)</span></a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard')}}">Dashboard</a>
                  </li>
                  @endguest
                </ul>
 
                {{-- right nav  --}}
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <form method="GET" action="{{ url('/cards') }}" class="d-flex">
                        @csrf
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                      </form>
                        <!-- Authentication Links -->
                        @guest
                    <li class="nav-item dropdown">
                      <li class="nav-item ms-1 mt-1">
                      <a class="nav-link btn btn-dark btn-sm text-white" aria-current="page" href="{{route('login')}}">Login</a>
                      </li>
                        @if (Route::has('register'))
                        <li class="nav-item ms-1 mt-1">
                        <a class="nav-link btn btn-success btn-sm text-white" aria-current="page" href="{{route('register')}}">Sign Up</a>
                        </li>
                         @endif
                         @else
                         <li class="nav-item">
                          <a class="btn btn-danger mt-1" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                          </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                          </form> 
                        </li>
                      </li>
                      @endguest
                </ul>
              </div>
            </div>
          </nav>

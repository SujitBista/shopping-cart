<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto navbar">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
     </ul>

      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-user" aria-hidden="true"></i>
             @if(Auth::check()) 
               {{ Auth::user()->email }}
             @else
               User Management
             @endif 
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            @if(Auth::check())
               <a class="dropdown-item" href="{{ route('user.profile') }}">User Profile</a>
                 <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="{{ route('user.signout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
            @else
               <a class="dropdown-item" href="{{ route('user.signup') }}">Signup</a>
               <a class="dropdown-item" href="{{ route('user.signin') }}">Signin</a>
            @endif
          
                <form id="logout-form" action="{{ route('user.signout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
          </div>
        </li>
      </ul>
  
  </div>
</nav>
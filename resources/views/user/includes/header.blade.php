<section class="navigation">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white">
        <div class="container-fluid">
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a href="#" class="navbar-brand">
                    <div data-aos="fade-right">
                    <img
                        src="{{asset('user/images/Logo.jpg')}}"
                        alt="logo"
                       
                        
                    >
                    </div>
                </a>
                <div class="home">
        <ul class="navbar-nav">
            <li class="nav-item mx-3">
                <a href="{{route('user.index')}}" class="nav-link {{Request::segment(1) == '' ? 'active' : ''}}" >
                        Home 
                       
                    </a>

            </li>
         

            <li class="nav-item mx-3">
                <a href="{{route('user.about')}}" class="nav-link {{Request::segment(1) == 'about' ? 'active' : ''}}">
                        About 
                    </a>
            </li>
            <li class="nav-item mx-3">
                <a href="{{route('user.benefits')}}" class="nav-link {{Request::segment(1) == 'benefits' ? 'active' : ''}}">
                       Benefits
                    </a>
            </li>

            <li class="nav-item mx-3">
                <a href="{{route('user.services')}}" class="nav-link {{Request::segment(1) == 'services' ? 'active' : ''}}">
                        Services 
                        
                    </a>

            </li>

           
            <li class="nav-item mx-3">
                <a href="{{route('user.contact')}}" class="nav-link {{Request::segment(1) == 'contact' ? 'active' : ''}}">
                        Contact
                    </a>
            </li>
        </ul>
    </div>
            <div class="log">
                <li class="nav-item " >
                <a class="nav-link" href="{{ route('register') }}" target="_blank"><span class="fas fa-user"></span> Sign Up</a>
                </li>
                <li class="nav-item ">
                <a class="nav-link" href="{{ route('login') }}" target="_blank"><span class="fas fa-sign-in-alt"></span> Login</a>
                </li>
            </div>
        </div>
        
    </nav>
</section>           
<!--section navigation end-->
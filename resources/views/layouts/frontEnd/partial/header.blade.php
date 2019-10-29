<header>
    <div class="container-fluid position-relative no-side-padding">

        <a href="{{url('/')}}" class="logo" style="height: 40px; margin: 19px 30px;"><img src="{{ asset('storage/bdlg.png')}}"  alt="BDLG"></a>

        <div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

        <ul class="main-menu visible-on-click" id="main-menu">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/')}}">About Us</a></li>
            <li><a href="{{url('/')}}">Features</a></li>
            
            @guest
                <li><a href="{{url('/login')}}">login</a></li>
            @else
                @if (Auth::user()->role_id == 1)
                    <li><a href="{{url('/admin/dashboard')}}">Dashbord</a></li>
                @elseif(Auth::user()->role_id == 2)
                    <li><a href="{{url('/author/dashboard')}}">author</a></li>
                    
                @endif
            @endguest
        </ul><!-- main-menu -->

        <div class="src-area">
            <form>
                <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                <input class="src-input" type="text" placeholder="Type of search">
            </form>
        </div>

    </div><!-- conatiner -->
</header>
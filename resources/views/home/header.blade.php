<div id='preloader'>
    <div class='loader'>
        <img src="img/loading.gif" width="80" alt="">
    </div>
</div><!-- Preloader -->

<header id="header" class="header-section">
    @php
        $mainCategories = \App\Http\Controllers\HomeController::maincategorylist();
    @endphp
    <div class="container">
        <nav class="navbar ">
            <a href="#" class="navbar-brand"><img src="{{asset('assets')}}/Design/img/logo.png" alt="Barbershop"></a>
            <div class="d-flex menu-wrap align-items-center">
                <div id="mainmenu" class="mainmenu">
                    <ul class="nav">
                        <li><a data-scroll class="nav-link active" href="/">Home<span
                                    class="sr-only">(current)</span></a></li>
                        <li><a href="">Categories <i class="bi bi-caret-down-fill"></i></a>
                            <ul>
                                @foreach($mainCategories as $rs)
                                    @if(count($rs->children))
                                        <li>
                                            <a href="{{route('categoryservices',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}
                                                <i class="bi bi-caret-right-fill"></i></a>
                                            <ul>
                                                @include('home.categorytree',['children'=>$rs->children])
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{route('categoryservices',['id'=>$rs->id, 'slug'=>$rs->title])}}">{{$rs->title}}</a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('service')}}">Services</a></li>
                        <li><a href="#">More <i class="bi bi-caret-down-fill"></i></a>
                            <ul>
                                <li><a href="{{route('references')}}">References</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li><a href="{{route('faq')}}">Faq</a></li>
                                <li><a href="#">Pracing</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @auth
                    <div id="mainmenu" class="mainmenu">
                        <ul class="nav">
                            <li>
                                <div class="header-btn mb-1">
                                    <a href="" class="menu-btn">{{Auth::user()->name}}</a>
                                </div>
                                <ul>
                                    <li><a href="{{route('userpanel.index')}}"><i class="bi bi-person"></i> My Profile</a></li>
                                    <li><a href=""><i class="bi bi-window"></i> My Appointment</a></li>
                                    <li><a href=""><i class="bi bi-chat-left-text"></i> My Comment</a></li>
                                    <li><a href="{{route('logoutuser')}}"><i class="bi bi-box-arrow-in-left"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                @endauth
                @guest
                    <div class="header-btn">
                        <a href="{{route('loginuser')}}" class="menu-btn">Login</a>
                    </div>
                    <div class="header-btn">
                        <a href="{{route('registeruser')}}" class="menu-btn">Register</a>
                    </div>
                @endguest
            </div>
        </nav>
    </div>
</header> <!--.header-section -->

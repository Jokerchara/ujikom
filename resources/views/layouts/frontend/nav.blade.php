    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="{{url('/')}}" class="nav-brand"><img src="{{ asset('assets/frontend/img/core-img/k1.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav kategori-cuy">
                                <ul>
                                    <li class="active"><a href="{{url('/')}}">News</a></li>
                                    <li><a href="{{url('restoran')}}">Restoran Korea</a></li>
                                    <li><a href="{{url('budaya')}}">Budaya Korea</a></li>
                                    <li><a href="{{url('about')}}">About</a></li>
                                    {{-- <li><a href="/blog/">Archive</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="{{url('/')}}">Home</a></li>
                                            <li><a href="/blog/">Archive</a></li>
                                            <li><a href="{{url('video-post')}}">Single Video Post</a></li>

                                            <li><a href="{{url('about')}}">About Us</a></li>
                                            <li><a href="{{url('contact')}}">Contact</a></li>
                                            <li><a href="{{url('submit-video')}}">Submit Video</a></li>
                                            <li><a href="{{url('log')}}">Login</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="#">Mega</a>
                                            <ul class="dropdown">
                                                <li><a href="{{url('/')}}">Home</a></li>
                                                <li><a href="{{url('archive')}}">Archive</a></li>
                                                <li><a href="{{url('video-post')}}">Single Video Post</a></li>
                                                <li><a href="{{url('single-post')}}">Single Post</a></li>
                                                <li><a href="{{url('about')}}">About Us</a></li>
                                                <li><a href="{{url('contact')}}">Contact</a></li>
                                                <li><a href="{{url('log')}}">Login</a></li>
                                            </ul>
                                    </li> --}}
                                    {{-- <li><a href="{{url('about')}}">About</a></li>
                                    <li><a href="{{ url('contact')">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        {{-- <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="{{url('/')}}" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Search and hit enter...">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                            <a href="{{url('log')}}" class="login-btn"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <!-- Submit Video -->
                            <a href="{{url('submit-video')}}" class="submit-video"><span><i class="fa fa-cloud-upload"></i></span> <span class="video-text">Submit Video</span></a>
                        </div> --}}
                    </div>
                </nav>
            </div>
        </div>
    </header>
{{-- @push('script')
    <script>
        var url = 'api/kategori'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.kategori, function(key, value) {
                    console.log(berhasil)
                    $(".kategori-cuy").append(
                        `
                        <ul class="catagory-widgets">
                           <li class="active"><a href="{{url('single-post')}}">${value.nama_kategori}</a></li>
                        </ul>
                        `
                    )
                })
            },
            error: function(gagal){
                console.log(gagal)
            }
        })
    </script>
@endpush --}}

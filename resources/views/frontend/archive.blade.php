@extends('layouts.frontend')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(../assets/frontend/img/bg-img/kpop1.jpg);">
        
    </section>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Breadcrumb Area Start ##### -->
    <div class="mag-breadcrumb py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Feature</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Archive by Category</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Archive Post Area Start ##### -->
    <div class="archive-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <div class="archive-posts-area bg-white p-30 mb-30 box-shadow">

                        <!-- Single Catagory Post -->
                        @foreach ($artikel as $data)
                        <div class="col-md-12 ftco-animate">
                            <div class="blog-entry" data-aos-delay="200">
                            <a href="/blog/{{$data->slug}}" class="block-20" >
                                <img class="img-fluid background-image" style="height:300px; width:450px;"
                                src="{{asset('assets/img/artikel/' .$data->foto)}}">
                            </a>
                            <div class="text p-4">
                                <div class="meta mb-3 ">
                                    <div>
                                        <a href="#">{{$data->created_at->format('d M Y')}}, {{$data->user->name}}</a>
                                    </div>
                                </div>
                                <div>
                                <b>
                                <a href="/blog/{{$data->slug}}">
                                {{$data->judul}}</a></b>
                                </div><br>
                                <div class="single-widget tags-widget">
                                        @foreach($data->tag as $key)
                                            <div class="tagcloud">
                                                <a class="tag-cloud-link" href="/blog-tag/{{ $key->slug }}">
                                                #{{ $key->nama_tag }}
                                                </a>
                                            </div>
                                        @endforeach

                                </div>
                            </div>
                            </div>
                        </div>
                        @endforeach
                        {{$artikel->links()}}
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->
                        {{-- <div class="single-sidebar-widget p-30">
                            <!-- Social Followers Info -->
                            <div class="social-followers-info">
                                <!-- Facebook -->
                                <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                                <!-- Twitter -->
                                <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                                <!-- YouTube -->
                                <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                                <!-- Google -->
                                <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                            </div>
                        </div> --}}

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Categories</h5>
                            </div>

                            <!-- Catagory Widget -->
                            @foreach ($kategori as $data)
                                <ul class="catagory-widgets">
                                    <li><a href="/blog-kategori/{{ $data->slug }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $data->nama_kategori }}</span> <span>{{ $data->artikel->count() }}</span> </a></li>
                                </ul>
                            @endforeach
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget">
                            <a href="#" class="add-img"><img src="{{ asset('assets/img/bg-img/add2.png')}}" alt=""></a>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Artikel Tag</h5>
                            </div>

                            <!-- Single YouTube Channel -->
                            @foreach ($tag as $data)
                            <ul class="tag-widgets tag-cloud">
                                <li><a href="/blog-tag/{{ $data->slug }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $data->nama_tag }}</span> </a></li>
                            </ul>
                            @endforeach

                        </div>

                        <!-- Sidebar Widget -->
                        {{-- <div class="single-sidebar-widget p-30">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Newsletter</h5>
                            </div>

                            <div class="newsletter-form">
                                <p>Subscribe our newsletter gor get notification about new updates, information discount, etc.</p>
                                <form action="#" method="get">
                                    <input type="search" name="widget-search" placeholder="Enter your email">
                                    <button type="submit" class="btn mag-btn w-100">Subscribe</button>
                                </form>
                            </div>

                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Archive Post Area End ##### -->
@endsection

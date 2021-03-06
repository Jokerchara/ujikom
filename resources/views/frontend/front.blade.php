@extends('layouts.frontend')
@section('content')
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/frontend/img/core-img/mnet1.png);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <a href="{{url('Mnet')}}" class="post-title" data-animation="fadeInUp" data-delay="300ms">Mnet Asian Music Award - MAMA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/frontend/img/core-img/budaya2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <a href="{{url('Budaya')}}" class="post-title" data-animation="fadeInUp" data-delay="300ms">Korean Culture</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/frontend/img/core-img/restoran1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <a href="{{url('Restoran')}}" class="post-title" data-animation="fadeInUp" data-delay="300ms">Korean Restaurant</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Left Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area left-sidebar mt-30 mb-30 bg-white box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Korean Film</h5>
                </div>
                <!-- Single Blog Post -->
                @foreach($film as $data)
                <div class="single-blog-post d-flex korea-film">
                <div class="single-blog-post d-flex style-3">
                    <div class="post-thumbnail">
                        <img src="{{ asset('assets/img/film/' .$data->foto)}}" alt="">
                        </div>
                        <div class="post-content">
                            <a href="/blogfilm/{{ $data->slug }}" class="post-title">{{ $data->judul }}</a>
                            <div class="post-meta d-flex">
                                <a href="#"><i class="fa fa-star" aria-hidden="true"></i> {{ $data->rating }} </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="assets/frontend/img/bg-img/k1.jpg" alt=""></a>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30 tambah-tag">
                <div class="section-heading">
                    <h5>Tags</h5>
                </div>
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="mag-posts-content mt-30 mb-30 p-30 box-shadow">
            <!-- Trending Now Posts Area -->
            <div class="trending-now-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Korean Restaurant</h5>
                </div>

                <div class="trending-post-slides owl-carousel">
                    <!-- Single Trending Post -->
                    @foreach($restoran as $data)
                    <div class="single-trending-post">
                        <img src="{{ asset('assets/img/restoran/' .$data->foto)}}" style="height:200px; width:450px;" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata">Restaurant</a>
                            <a href="/blogrestoran/{{ $data->slug }}" class="post-title">{{ $data->nama }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Feature Video Posts Area -->
            <div class="feature-video-posts mb-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>K - pop</h5>
                </div>
                <div class="featured-video-posts">
                    <div class="row">
                        <div class="col-12 col-lg-7 trending-sekarang">
                            <!-- Single Featured Post -->
                        </div>

                        <div class="col-12 col-lg-5">
                            <!-- Featured Video Posts Slide -->
                            <div class="featured-video-posts-slide owl-carousel">

                                <div class="single--slide kpop-most">
                                    <!-- Single Blog Post -->
                                    
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sports Videos -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Korean Culture</h5>
                </div>

                <div class="sports-videos-slides owl-carousel mb-30">
                    <!-- Single Featured Post -->
                    @foreach($budaya as $data)
                    <div class="single-featured-post">
                        <div class="post-thumbnail mb-50">
                            <img src="{{ asset('assets/img/budaya/' .$data->foto)}}" style="height:350px; width:500px;" alt="">
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">{{$data->created_at->format('d M Y')}}</a>
                                <a href="#">Penulis : {{$data->user->name}}</a>
                            </div>
                            <a href="/blogbudaya/{{ $data->slug }}" class="post-title">{{ $data->judul }}</a>
                            <p>{!! str_limit($data->konten,90) !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30 ">
                <div class="section-heading">
                    <h5>Categories</h5>
                </div>
                @foreach ($kategori as $data)
                <ul class="catagory-widgets">
                    <li><a href="/blog-kategori/{{ $data->slug }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>{{ $data->nama_kategori }}</span> <span>{{ $data->artikel->count() }}</span> </a></li>
                </ul>
                @endforeach
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget">
                <a href="#" class="add-img"><img src="assets/frontend/img/bg-img/k3.jpg" alt=""></a>
            </div>
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Newsletter</h5>
                </div>

                <div class="newsletter-form">
                    <p>Our goal, making this website is to make it easier for kpopers to find out what is in the kpop world.</p>
                </div>

            </div>
        </div>
    </section>
@endsection
@push('script')

{{-- ARTIKEL POPULER --}}
    <script>
        var url = 'api/most'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.artikel, function(key, value) {
                    console.log(value)
                    $(".kpop-most").append(
                        `
                        <div class="single-blog-post d-flex style-3">
                            <div class="post-thumbnail">
                                <img src="assets/img/artikel/${value.foto}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">${value.judul}</a>
                            <div class="post-meta d-flex">
                                <a href="/blog/${value.slug}"><i class="fa fa-eye" aria-hidden="true"></i> Selengkapnya</a>
                            </div>
                            </div>
                        </div>
                        `
                    )
                })
            },
            error: function(gagal){
                console.log(gagal)
            }
        })
    </script>

{{-- ARTIKEL TRENDING --}}
    <script>
        var url = 'api/kpop1'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.artikel, function(key, value) {
                    var teks = (value.konten).substr(0, 395);
                    console.log(teks);
                    $(".trending-sekarang").append(
                        `
                        
                            <div class="single-featured-post">
                                <!-- Thumbnail -->
                                <div class="post-thumbnail mb-50">
                                    <img src="assets/img/artikel/${value.foto}" style="height:250px; width:400px;" alt="">
                                </div>
                                <!-- Post Contetnt -->
                                <div class="post-content">
                                    <div class="post-meta">
                                        <a href="#">${value.created_at}</a>
                                        <a href="#">${value.id}</a>
                                    </div>
                                    <a href="/blog/${value.slug}" class="post-title">${value.judul}</a>
                                    <p id="teks-konten">`+teks+`....</p>
                                </div>
                            </div>
                        `
                    )
                })
            },
            error: function(gagal){
                console.log(gagal)
            }
        })
        
    </script>
    {{-- TAG --}}
    <script>
        var url = 'api/tag'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.tag, function(key, value) {
                    console.log(berhasil)
                    $(".tambah-tag").append(
                        `
                        <ul class="catagory-widgets">
                            <li><a href="/blog-tag/${value.slug}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> ${value.nama_tag}</span></a></li>
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
@endpush

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
    <section class="mag-posts-area d-flex flex-wrap">
        <div class="container">
            <div class="row justify-content-center">
                    <!-- >>>>>>>>>>>>>>>>>>>>
                    Post Left Sidebar Area
                    <<<<<<<<<<<<<<<<<<<<< -->
                    <div class="post-sidebar-area left-sidebar mt-30 mb-30 box-shadow " >
                        <div class="single-sidebar-widget p-30 kategorian">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Kategori</h5>
                            </div>

                            <!-- Catagory Widget -->

                        </div>

                        <!-- Sidebar Widget -->


                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30 berita-berita">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Trending</h5>
                            </div>

                            {{-- Konten --}}

                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30 tambah-tag">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Tagar</h5>
                            </div>

                            {{-- Tag Content --}}

                        </div>
                    </div>

                    <!-- >>>>>>>>>>>>>>>>>>>>
                        Main Posts Area
                    <<<<<<<<<<<<<<<<<<<<< -->
                 <div class="col-12 col-xl-8">
                    <div class="  mt-30 mb-30 p-30 box-shadow " style="single-post" >
                        <div class="trending-now-posts mb-30 trending-sekarang">
                            <div class="section-heading">
                                <h5>TRENDING NOW</h5>
                            </div>
                        </div>
                    </div>
                </div>


        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
            <div class="row justify-content-center">
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->
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
                    console.log(berhasil)
                    $(".berita-berita").append(
                        `
                        <div class="single-blog-post d-flex">
                        <div class="post-thumbnail">
                        <img src="assets/img/artikel/${value.foto}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="/blog/${value.slug}" class="post-title">${value.judul}</a>
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
        var url = 'api/trending'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.artikel, function(key, value) {
                    console.log(berhasil)
                    $(".trending-sekarang").append(
                        `
                     <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="assets/img/artikel/${value.foto}" style="height:300px; width:450px;" alt="">
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">${value.created_at}</a>
                                <a href="#">lifestyle</a>
                            </div>
                            <a href="/blog/${value.slug}" class="post-title">${value.judul}</a>
                            <p >${value.konten}</p>
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

    {{-- CATEGORY --}}
    <script>
        var url = 'api/kategori'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.kategori, function(key, value) {
                    console.log(berhasil)
                    $(".kategorian").append(
                        `
                        <ul class="catagory-widgets">
                            <li><a href="/blog-kategori/${value.slug}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> ${value.nama_kategori}</span></a></li>
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

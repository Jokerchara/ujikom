@extends('layouts.frontend')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(assets/frontend/img/core-img/logo1.png);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>ABOUT US</h2>
                    </div>
                </div>
            </div>
        </div>
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
                            <li class="breadcrumb-item active" aria-current="page">About</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### About Us Area Start ##### -->
    <section class="about-us-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-8">
                    <!-- About Us Content -->
                    <div class="about-us-content bg-white mb-30 p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>About Us</h5>
                        </div>
                        <p>Korean Hangout adalah portal referensi terpercaya untuk para pecinta K-pop. Selain membahas berbagai Boy Band atau Girl Band , 
                        kami juga memuat informasi Beberapa Restoran Korea dan juga Budaya Korea. Eksplore berbagai budaya yang belum pernah anda lihat sebelumnya, pastikan anda menikmati berbagai macam budaya korea , walaupun belum ada kesempatan untuk melihatnya secara langsung.</p>

                        <img class="mt-15" src="{{ asset('assets/img/bg-img/35.jpg')}}" alt="">

                        <!-- Team Member Area -->
                        <div class="section-heading mt-30">
                            <h5>My Name</h5>
                        </div>

                        <!-- Single Team Member -->
                        <div class="single-team-member d-flex align-items-center">
                            <div class="team-member-thumbnail">
                                <img src="{{ asset('../assets/frontend/img/core-img/person.jpg')}}" alt="">
                            </div>
                            <div class="team-member-content">
                                <h6>Albi Nuryachya Muslim</h6>
                                <span>Penulis</span>
                                <p>Saya sebagai penulis dari artikel yang ada di website ini, sumber informasi mengenai artikel Korean Hangout yang terkait
                                    ini , saya mendapatkannya dari beberapa situs web yang memberikan konten informasi mengenai beberapa informasi tersebut.</p>
                             </div>
                        </div>
                        <div class="team-member-content">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63363.266811077956!2d107.60430570000001!3d-6.985213099999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x245ad187c1c81aba!2sH%26B%20entertainment!5e0!3m2!1sid!2sid!4v1585379707393!5m2!1sid!2sid" width="670" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area bg-white mb-30 box-shadow">
                        <!-- Sidebar Widget -->


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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Us Area End ##### -->
@endsection

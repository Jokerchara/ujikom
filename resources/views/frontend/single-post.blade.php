@extends('layouts.frontend')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(../assets/frontend/img/bg-img/49.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>Single Post</h2>
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
                            <li class="breadcrumb-item"><a href="#">Features</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Single Post</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Post Details Area Start ##### -->
    <section class="post-details-area mag-posts-area d-flex flex-wrap">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="sidebar-area  bg-white mb-30 box-shadow">
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
                        <div class="single-sidebar-widget p-30 katgor">
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


                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30 tag-artikel">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Tag Artikel</h5>
                            </div>

                            <!-- Single YouTube Channel -->
                            @foreach ($tag as $data)
                            <ul class="tag-widgets tag-cloud">
                                <li><a href="/blog-tag/{{ $data->slug }}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> {{ $data->nama_tag }}</span> </a></li>
                            </ul>
                            @endforeach
                        </div>

                        <!-- Sidebar Widget -->

                    </div>
                </div>
                <!-- Post Details Content Area -->
                <div class="col-12 col-xl-8">
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow "  style="single-post">
                        <div class="blog-thumb mb-30">
                            <img src="{{ asset('assets/img/artikel/' .$artikel->foto)}}" style="height:300px; width:450px;" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#">{{$artikel->created_at->format('d M Y')}}</a>
                                <a href="#">Penulis : {{$artikel->user->name}}</a>
                            </div>
                            <h4 class="post-title">{{ $artikel->judul }}</h4>
                            <!-- Post Meta -->
                            <div class="post-meta-2">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>

                            <p>{!! $artikel->konten !!}</p>
                            <div class="tag-widget post-tag-container mb-5 mt-5">
                                @foreach($artikel->tag as $data)
                                    <div class="tagcloud">
                                        <a class="tag-cloud-link" href="/blog-tag/{{ $data->slug }}">
                                            #{{ $data->nama_tag }}
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <!-- Related Post Area -->
                    {{-- <div class="related-post-area bg-white mb-30 px-30 pt-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>Related Post</h5>
                        </div>

                        <div class="row">
                            <!-- Single Blog Post -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('assets/frontend/img/bg-img/29.jpg')}}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Dentists Are Smiling Over Painless Veneer</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('assets/frontend/img/bg-img/30.jpg')}}" alt="">
                                        <a href="video-post.html" class="video-play"><i class="fa fa-play"></i></a>
                                        <span class="video-duration">09:27</span>
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">Will The Democrats Be Able To Reverse</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="single-blog-post style-4 mb-30">
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('assets/frontend/img/bg-img/28.jpg')}}" alt="">
                                    </div>
                                    <div class="post-content">
                                        <a href="single-post.html" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                        <div class="post-meta d-flex">
                                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> --}}

                    <!-- Comment Area Start -->
                    {{-- <div class="comment_area clearfix bg-white mb-30 p-30 box-shadow">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>COMMENTS</h5>
                        </div>

                        <ol>
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{{ asset('assets/frontend/img/bg-img/53.jpg')}}" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="comment-date">27 Aug 2019</a>
                                        <h6>Tomas Mandy</h6>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="like">like</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>

                                <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content d-flex">
                                            <!-- Comment Author -->
                                            <div class="comment-author">
                                                <img src="{{ asset('assets/frontend/img/bg-img/54.jpg')}}" alt="author">
                                            </div>
                                            <!-- Comment Meta -->
                                            <div class="comment-meta">
                                                <a href="#" class="comment-date">27 Aug 2019</a>
                                                <h6>Britney Millner</h6>
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                                <div class="d-flex align-items-center">
                                                    <a href="#" class="like">like</a>
                                                    <a href="#" class="reply">Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            </li>

                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content d-flex">
                                    <!-- Comment Author -->
                                    <div class="comment-author">
                                        <img src="{{ asset('assets/frontend/img/bg-img/55.jpg')}}" alt="author">
                                    </div>
                                    <!-- Comment Meta -->
                                    <div class="comment-meta">
                                        <a href="#" class="comment-date">27 Aug 2019</a>
                                        <h6>Simon Downey</h6>
                                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius</p>
                                        <div class="d-flex align-items-center">
                                            <a href="#" class="like">like</a>
                                            <a href="#" class="reply">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                    </div> --}}

                    <!-- Post A Comment Area -->
                    <div class="post-a-comment-area bg-white mb-30 p-30 box-shadow clearfix">
                        <!-- Section Title -->
                        <div class="section-heading">
                            <h5>LEAVE A REPLY</h5>
                        </div>

                        <!-- Reply Form -->
                       <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://korean-hangout-3.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                    </div>
                </div>

                <!-- Sidebar Widget -->

            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
@endsection
@push('script')
{{-- KATEGORI --}}
    <script>
        var url = 'api/kategori'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.kategori, function(key, value) {
                    console.log(berhasil)
                    $(".katgor").append(
                        `
                        <ul class="catagory-widgets">
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> ${value.nama_kategori}</span> </a></li>
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
                $.each(berhasil.data.kategori, function(key, value) {
                    console.log(berhasil)
                    $(".tag-artikel").append(
                        `
                        <ul class="tag-widgets tag-cloud">
                            <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> ${value.nama_tag}</span> </a></li>
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

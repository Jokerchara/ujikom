@extends('layouts.frontend')
@section('content')
    <!-- ##### Breadcrumb Area Start ##### -->
    <section class="breadcrumb-area bg-img bg-overlay" style="background-image: url(../assets/frontend/img/bg-img/kpop1.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2>K - Pop</h2>
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
    <section class="post-details-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="single-video-area bg-white mb-30 box-shadow">
                        <iframe width="560" height="315" src="{{$artikel->url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="post-details-content bg-white mb-30 p-30 box-shadow "  style="single-post">
                        <div>
                        <h4 class="post-title">*{{ $artikel->judul }}.</h4>
                        </div>
                        <div class="blog-thumb mb-30">
                            <img src="{{ asset('assets/img/artikel/' .$artikel->foto)}}" style="height:300px; width:450px;" alt="">
                        </div>
                        <div class="blog-content">
                            <div class="post-meta">
                                <a href="#">{{$artikel->created_at->format('d M Y')}}</a>
                                <a href="#">Penulis : {{$artikel->user->name}}</a>
                            </div>
                            <div class="social-followers-info">
                            <a href="{{$artikel->ytube}}" class="youtube-subscribers" style="height:50px; width:150px;"><i class="fa fa-play"></i>{!! str_limit($artikel->judul,3) !!}</a>
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
                </div>
            </div>
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
            </div>
        </div>
    </section>
    <!-- ##### Post Details Area End ##### -->
    @endsection
<footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="{{url('/')}}" class="foo-logo"><img src="{{ asset('assets/frontend/img/core-img/logo1.png')}}" alt=""></a>
                        <p>Korean Hangout adalah suatu situs web ,untuk mempermudah para pencinta Korea for search all about Korean.</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget budaya-budaya">
                        <h6 class="widget-title">Budaya Korea</h6>
                        <!-- <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                </ul>
                        </nav> -->
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget restoran-restoran">
                        <h6 class="widget-title">Restoran Korea</h6>
                        <!-- <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">    
                                <img src="{{ asset('assets/frontend/img/bg-img/12.jpg')}}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="single-post.html" class="post-title">Take A Romantic Break In A Boutique Hotel</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-pen" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Sosial Media</h6>
                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text">COPYRIGHT© KOREAN HANGOUT. ALL RIGHTS RESERVED, UNLESS OTHERWISE INDICATED.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@push('script')
    <script>
        var url = 'api/restoran1'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.restoran, function(key, value) {
                    console.log(berhasil)
                    $(".restoran-restoran").append(
                        `
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">    
                                <img src="assets/img/restoran/${value.foto}" alt="">
                            </div>
                            <div class="post-content">
                                <a href="/blogrestoran/${value.slug}" class="post-title">${value.nama}</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-pen" aria-hidden="true"></i>${value.created_at}</a>
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
    <script>
        var url = 'api/budaya1'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.budaya, function(key, value) {
                    console.log(berhasil)
                    $(".budaya-budaya").append(
                        `
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> ${value.judul}</a></li>
                            </ul>
                        </nav>
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
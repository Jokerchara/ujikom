<footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-6 col-sm-3 col-lg-7">
                    <div class="footer-widget">
                        <h4 class="widget-title">About Korean Hangout.</h4>
                        <!-- Logo -->
                        <p>Korean Hangout adalah sebuah media yang membahas berita-berita yang berkaitan dengan Korea, baik itu culture maupun pop-culture, mulai dari yang unik, aneh hingga yang luar biasa penting, dan untuk mempermudah para pencinta Korea for search all about Korean.</p>
                    </div>
                </div>
                <!-- Footer Widget Area -->
                
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-6 col-sm-10">
                        <p class="copywrite-text">COPYRIGHT© KOREAN HANGOUT. ALL RIGHTS RESERVED, UNLESS OTHERWISE INDICATED.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- @push('script')
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
                                <a href="/singlerestoran/${value.slug}" class="post-title">${value.nama}</a>
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
                                <li><a href="/singlebudaya/${value.slug}"><i class="fa fa-angle-double-right" aria-hidden="true"></i> ${value.judul}</a></li>
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
@endpush -->
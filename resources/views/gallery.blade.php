<?php   $accueil = "";
        $services = "";
        $gallerie = "active";
        $contact = "";
        $apropos = ""; ?>

<!doctype html>
<html lang="en">
    <head>
       @include('layouts.header')
    </head>
    <body>
        <!--================ Navbar =================-->
        @include('layouts.navbar')
        <!--================ Navbar =================-->
        
        <!--================ Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">GALERIE</h2>
                </div>
            </div>
        </section>
        <!--================ End Breadcrumb Area =================-->

        <!--================ Gallery Area =================-->
        <section class="gallery_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Galerie hotel IKRAM</h2>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
                <div class="row imageGallery1" id="gallery">
                @foreach( $photos as $item )
                    <div class="col-md-4 gallery_item">
                        <div class="gallery_img">
                            <img src="/gallery_images/{{ $item->filename }}" alt="">
                            <div class="hover">
                                <a class="light" href="/gallery_images/{{ $item->filename }}"><i class="fa fa-expand"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
        <!--================ End Gallery Area =================-->

        @include('layouts.footer')
        <script src="{{asset('vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{asset('vendors/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
    </body>
</html>
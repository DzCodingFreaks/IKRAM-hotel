<?php   $accueil = "";
        $services = "";
        $gallerie = "";
        $contact = "";
        $apropos = "active"; ?>

<!doctype html>
<html lang="en">
    <head>
        
    @include('layouts.header')
    </head>
    <body>
        <!--================ Navbar =================-->
        @include('layouts.navbar')
        <!--================ Navbar =================-->
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">A PROPOS</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <section class="sample-text-area">
            <div class="container">
                <h3 class="text-heading title_color">Groupe d'hotels IKRAM</h3>
                <p class="sample-text">
                    Every avid independent filmmaker has <b>Bold</b> about making that <i>Italic</i> interest documentary, or short film to show off their creative prowess. Many have great ideas and want to “wow” the<sup>Superscript</sup> scene, or video renters with their big project.  But once you have the<sub>Subscript</sub> “in the can” (no easy feat), how do you move from a <del>Strike</del> through of master DVDs with the <u>“Underline”</u> marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results: 

                </p>
                <br><br>
                <h3 class="text-heading title_color">Notre vision</h3>
                <p class="sample-text">
                    Marked hand-written title inside a secondhand CD case, to a pile of cardboard boxes full of shiny new, retail-ready DVDs, with UPC barcodes and polywrap sitting on your doorstep?  You need to create eye-popping artwork and have your project replicated. Using a reputable full service DVD Replication company like PacificDisc, Inc. to partner with is certainly a helpful option to ensure a professional end result, but to help with your DVD replication project, here are 4 easy steps to follow for good DVD replication results: 

                </p>
            </div>
        </section>

        <!-- Start Align Area -->
        <div class="whole-wrap">
            <div class="container">
                <div class="section-top-border">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Dossier</h4>
                                <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-defination">
                                <h4 class="mb-20">Réglementation</h4>
                                <p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img style="width:80%;height:170px;margin:auto"  src="{{asset('image/map.png')}}" />
                        </div>
                    </div>
                </div>				
            </div>
        </div>
        <!-- End Align Area -->
       
        @include('layouts.footer')
       
    </body>
</html>
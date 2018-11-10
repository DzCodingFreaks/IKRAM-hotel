<?php   $accueil = "";
        $services = "";
        $gallerie = "";
        $contact = "active";
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
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">CONTACTEZ-NOUS</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================Contact Area =================-->
        <section class="contact_area section_gap">
            <div class="container">
           
                
                
                <div class="row" >
                    <div class="col-md-4 col-sm-12" style="margin:auto;margin-top:50px">
                        <h3>Hotel IKRAM Oran</h3><br>
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Oran</h6>
                                <p>Les Castors, El Ghazali, 31000</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+ (213) 770 96 35 94</a></h6>
                                <p>disponibilité 24/24  et 7/7</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#"> hotelikram@gmail.com</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12" style="margin:auto;margin-top:50px">
                        <h3>Hotel IKRAM Alger</h3><br>
                        <div class="contact_info">
                            <div class="info_item">
                                <i class="lnr lnr-home"></i>
                                <h6>Alger</h6>
                                <p>5, rue Colonel Amirouche, Bordj El Kifan, 18000 Fort-de-l'Eau</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-phone-handset"></i>
                                <h6><a href="#">+ (213) 21 20 41 32</a></h6>
                                <p>disponibilité 24/24  et 7/7</p>
                            </div>
                            <div class="info_item">
                                <i class="lnr lnr-envelope"></i>
                                <h6><a href="#"> hotelikram@gmail.com</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Contact Area =================-->
        
        @include('layouts.footer')
       
    
    </body>
</html>
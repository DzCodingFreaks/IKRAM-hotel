<?php   $accueil = "";
        $services = "active";
        $gallerie = "";
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
        
        <!--================Breadcrumb Area =================-->
        <section class="breadcrumb_area">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background=""></div>
            <div class="container">
                <div class="page-cover text-center">
                    <h2 class="page-cover-tittle">NOS OFFRES & SERVICES</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->
        
        <!--================ Accomodation Area  =================-->
        <section class="accomodation_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">NOS OFFRES</h2>
                    <p>Vous pouvez choisir l'une de nos offres</p>
                </div>
                <div class="row" style="margin:auto;width:70%;">
                    <div class="col-lg-6 col-sm-12">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room1.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover"><i class="fa fa-search"></i></a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Chambre à 1</h4></a>
                            <h5>5000 DZD<small>/nuit</small></h5>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="accomodation_item text-center">
                            <div class="hotel_img">
                                <img src="image/room2.jpg" alt="">
                                <a href="#" class="btn theme_btn button_hover"><i class="fa fa-search"></i></a>
                            </div>
                            <a href="#"><h4 class="sec_h4">Chambre à 2</h4></a>
                            <h5>8000 DZD<small>/nuit</small></h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Accomodation Area  =================-->
        <!--================Booking Tabel Area =================-->
        <section class="hotel_booking_area">
            <div class="container">
            <div class="hotel_booking_area position">
                <div class="container">
                    <div class="hotel_booking_table">
                        <div class="col-md-3">
                            <h2>Reservez<br> une chambre</h2>
                        </div>
                        <div class="col-md-9">
                            <div class="boking_table">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker11'>
                                                    <input type='text' class="form-control" placeholder="Date d'arrivée"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class='input-group date' id='datetimepicker1'>
                                                    <input type='text' class="form-control" placeholder="Date de départ"/>
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <div class="input-group">
                                                <select class="wide">
                                                    <option data-display="Type de chambre">Type de chambre</option>
                                                    <option value="1">Chambre à 1</option>
                                                    <option value="2">Chambre à 2</option>
                                                    <option value="2">Chambre à 3</option>
                                                    <option value="2">Suite</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <div class='input-group date'>
                                                    <input type='number' min="1" class="form-control" placeholder="Date d'arrivée"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="book_tabel_item">
                                            <a class="book_now_btn button_hover">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--================Booking Tabel Area  =================-->        
        <!--================ Facilities Area  =================-->
        <section id="goto" class="facilities_area section_gap">
            <div class="overlay bg-parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">  
            </div>
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_w">Nos services</h2>
                    <p>Profitez de nos services lors de votre séjour dans .</p>
                </div>
                <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-leaf"></i>Climatisation</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-phone"></i>Support 24/24</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="fa fa-concierge-bell"></i>Reception à l'écout</h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" style="margin:auto">
                        <div class="facilities_item">
                            <h4 class="sec_h4"><i class="lnr lnr-shirt"></i>commodité </h4>
                            <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Facilities Area  =================-->
        
        @include('layouts.footer')
    </body>
</html>
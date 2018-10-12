<?php   $accueil = "active";
        $services = "";
        $contact = "";
        $apropos = ""; ?>

<!doctype html>
<html lang="en">
    <head>
       @include('layouts.header')
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                @include('layouts.socials')
                @include('layouts.navbar')
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h6>c'est là ou vous appartenez</h6>
						<h2><span style="color:white;">Groupe d'hotels IKRAM </span></h2>
						<p>Si vous cherchez un bon endroit pour passer des nuits <br>c'est bien l'hotel <span class="ikram-hotel"> Ikram </span> que vous cherchez</p>
						<a href="#" class="btn theme_btn button_hover">En savoir plus</a>
					</div>
				</div>
            </div>
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
                                            <a class="book_now_btn button_hover" href="#">Réserver</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Banner Area =================-->
                
        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">Voulez-vous connaitre plus sur<br>l'hotel IKRAM<br></h2>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women ....</p>
                            <a href="/apropos" class="button_hover theme_btn_two">A propos de nous</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="image/about_bg.jpg" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->
        
         
      @include('layouts.footer')
    </body>
</html>
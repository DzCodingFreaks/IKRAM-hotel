<?php   $accueil = "";
        $services = "";
        $gallerie = "";
        $contact = "";
        $apropos = "active"; ?>

<!doctype html>
<html lang="en">
    <head>
        
    @include('layouts.header')
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />

    <style>
        #map_oran , #map_alger { 
            margin-top: 30px; 
            margin-bottom: 30px;  
            width: 100%; 
            height : 200px;
            border: solid #999 1px;  
            }
    </style>
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
                    <h2 class="page-cover-tittle">A PROPOS DE NOUS</h2>
                </div>
            </div>
        </section>
        <!--================Breadcrumb Area =================-->

        <section class="sample-text-area">
            <div class="container">
                <h3 class="text-heading title_color">Groupe d'hotels IKRAM</h3>
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <p class="sample-text">
                        <h4>Hotel IKRAM ALGER</h4>
                        Situé à Alger, l'Hotel Ikram Alger propose une connexion Wi-Fi gratuite.Toutes ces chambres climatisées disposent d'une télévision, d'un minibar ainsi que d'une salle de bains privative pourvue d'une baignoire ou d'une douche. Le linge de lit est également fourni.
                        Un hammam, une réception ouverte 24h/24 et un bar sont à votre disposition dans l'établissement. Une salle de réunion est en outre disponible. Par ailleurs, vous pourrez profiter d'un éventail d'activités sur place ou dans les environs, comme l'équitation, la pêche et la plongée sous-marine.
                        L’aéroport international d'Alger-Houari Boumédiène est accessible à 6 km. 
                        Nous parlons votre langue ! 
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 pull-right">
                        <div class="" id='map_alger'></div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <p class="sample-text">
                        <h4>Hotel IKRAM ORAN</h4>
                        Doté d'un restaurant, l'Hotel Ikram Oran est situé à Oran. Il vous propose une connexion Wi-Fi gratuite.
                        Les chambres comprennent toutes la climatisation et un minibar. Leur salle de bains privative est munie d'une baignoire ou d'une douche. Le linge de lit vous sera en outre fourni.
                        La réception de l'établissement est ouverte 24h/24.L'Hotel Ikram Oran est placé à 9 km de l'aéroport d'Oran - Ahmed Ben Bella. 
                        Nous parlons votre langue !
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12">
                        <div id='map_oran'></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Start Align Area -->
        <div class="whole-wrap">
            <div class="container">
            <h3 class="mb-20">Réglementation</h3>
                <div class="section-top-border">
                    <div class="row">
                       
                        <div class="col-md-6 col-sm-12">
                            <div class="single-defination">
                                <h5>Hotel IKRAM Alger</h5>
                                <p>Arrivée entre 12h00 et 00h00<br>
                                Départ entre 6h00 et 13h00
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <h5>Hotel IKRAM Oran</h5>
                            <p>Arrivée à partir de 14h00<br>
                            Départ jusqu'à 11h00
                            </p>
                        </div>
                    </div>
                </div>				
            </div>
        </div>
        <!-- End Align Area -->
       
        @include('layouts.footer')
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoidGVtcGtoYWxlZCIsImEiOiJjam8zZHM4N2UwNnNiM3duMjBkbHpoYnllIn0.3CcVU_PQvw9SWS-E0kv67Q';
            var map1 = new mapboxgl.Map({
                container: 'map_alger', // container id
                style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
                center: [3.177170 , 36.744520], // starting position [lng, lat]
                zoom: 11 // starting zoom
            });

            var map2 = new mapboxgl.Map({
                container: 'map_oran', // container id
                style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
                center: [-0.6308198 , 35.7009736], // starting position [lng, lat]
                zoom: 11 // starting zoom
            });

            var marker1 = new mapboxgl.Marker()
                        .setLngLat([3.177170 , 36.744520])
                        .addTo(map1);

            var marker2 = new mapboxgl.Marker()
                        .setLngLat([-0.6308198 , 35.7009736])
                        .addTo(map2);
            
        </script>
       
    </body>
</html>
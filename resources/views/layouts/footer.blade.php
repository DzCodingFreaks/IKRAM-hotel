   <!--================ start footer Area  =================-->	
   <footer class="footer-area section_gap">
      <div class="container">
        <div class="row" style="margin:auto;width:50%">
          <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="single-footer-widget">
                  <h6 class="footer_title">Liens</h6>
                  <div class="row">
                      <div class="col-8">
                          <ul class="list_style">
                              <li><a href="/">Accueil</a></li>
                              <li><a href="/services">Offres & Services</a></li>
                              <li><a href="/gallerie">Galerie</a></li>
                              <li><a href="/contact">Contacts</a></li>
                              <li><a href="/apropos">A propos</a></li>
                          </ul>
                      </div>								
                  </div>							
              </div>
          </div>		
          <div class="col-lg-6  col-md-6 col-sm-6">
            <h6 class="footer_title">Contacts</h6>
            <div class="row">
              <div class="col-8 footer-bottom">
                <div class="footer-social list_style">
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
              </div>								
            </div>	
          </div>							
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-6 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> tout droit réservé </p>
            <p class="col-lg-6 col-sm-12 footer-text m-0" style="text-align:center">made by <a href="http://astrabridge.pro/">AB Solutions</a></p>
        </div>
        
      </div>
    </footer>
    <!--================ End footer Area  =================-->
    
  <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{asset('js/jquery-3.2.1.min.js')}} "></script>
        <script src="{{asset('js/popper.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{asset('js/mail-script.js')}}"></script>
        <script src="{{asset('vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js')}}"></script>
        <script src="{{asset('vendors/nice-select/js/jquery.nice-select.js')}}"></script>
        <script src="{{asset('js/mail-script.js')}}"></script>
        <script src="{{asset('js/stellar.js')}}"></script>
        <script src="{{asset('vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{asset('js/custom.js')}}"></script>
        
        <script>
          $(document).ready(function(){
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

              // Make sure this.hash has a value before overriding default behavior
              if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                $('html, body').animate({
                  scrollTop: $(hash).offset().top
                }, 1500, function(){
            
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
                });
              } // End if
            });
          });
        </script>
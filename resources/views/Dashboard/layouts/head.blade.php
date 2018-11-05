 <!-- HEADER DESKTOP-->
 <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            <div class="header-button" style="margin-left:78%">
                                
                                <div class="account-wrap" >
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                          <!--  <img src="images/icon/avatar-01.jpg" alt="John Doe" /> -->
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Hotel IKRAM</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            
                                            <div class="account-dropdown__footer">
                                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>
                                                    Déconnecter
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
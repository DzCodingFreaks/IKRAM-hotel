<!DOCTYPE html>
<html lang="en">

@include('Dashboard.layouts.header')

<body class="animsition">
    <div class="page-wrapper">
        
        @include('Dashboard.layouts.navbar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                            </form>
                            <div class="header-button">
                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                          <!--  <img src="images/icon/avatar-01.jpg" alt="John Doe" /> -->
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Hotel IKRAM</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
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

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <img class="card-img-top" style="height:200" src="/image/banner_bg.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <form id="{{ $couvertureHome->filename }}" action="/images-delete" method="post" >
                                            {{ csrf_field() }}
                                            <input type="text" name="id" value="{{ $couvertureHome->filename }}"/>
                                            <input type="hidden" name="manual" value="true" />
                                            <input type="file" name="photo" />
                                        </form>
                                        <h5>Image de couverture</h5>
                                        <button onclick="document.getElementById('{{ $couvertureHome->filename }}').submit()" class="btn btn-danger float-right"><i class="fab f-config"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <img class="card-img-top" style="height:200" src="/gallery_images/{{ $imageHome->filename }}" alt="Card image cap">
                                    <div class="card-body">
                                        <form id="{{ $imageHome->filename }}" action="/images-delete" method="post" style="display:none">
                                            {{ csrf_field() }}
                                            <input type="text" name="id" value="{{ $imageHome->filename }}"/>
                                            <input type="hidden" name="manual" value="true" />
                                        </form>
                                        <h5>Image de la page d'acceuil</h5>
                                        <button onclick="document.getElementById('{{ $imageHome->filename }}').submit()" class="btn btn-danger float-right">x</button>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card float-right">
                                    <img class="card-img-top" style="height:200" src="/gallery_images/{{ $couverturePages->filename }}" alt="Card image cap">
                                    <div class="card-body">
                                        <form id="{{ $couverturePages->filename }}" action="/images-delete" method="post" style="display:none">
                                            {{ csrf_field() }}
                                            <input type="text" name="id" value="{{ $couverturePages->filename }}"/>
                                            <input type="hidden" name="manual" value="true" />
                                        </form>
                                        <h5>Image de lcouverture des autres pages</h5>
                                        <button onclick="document.getElementById('{{ $couverturePages->filename }}').submit()" class="btn btn-danger float-right">x</button>
                                    </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
        </div>

    </div>
@include('Dashboard.layouts.footer')

</body>

</html>
<!-- end document-->

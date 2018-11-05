<!DOCTYPE html>
<html lang="en">

@include('Dashboard.layouts.header')

<body class="animsition">
    <div class="page-wrapper">
        
    @include('Dashboard.layouts.navbar')

        <!-- PAGE CONTAINER-->
        <div class="page-container">
        @include('Dashboard.layouts.head')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Mon profile</div>
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center title-2">Inforamtions du compte</h3>
                                            </div>
                                            <hr>
                                            <form action="/updateUserInfo" method="post" >
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name" class="control-label mb-1">Nom d'utilisateur</label>
                                                    <input id="name" name="name" type="text" class="form-control" required aria-invalid="false" value="{{ Auth::user()->name }}">
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="email" class="control-label mb-1">Email</label>
                                                    <input id="email" name="email" type="text" value="{{ Auth::user()->email }}" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card"
                                                        autocomplete="cc-name" required aria-invalid="false" aria-describedby="cc-name-error">
                                                </div>
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                        <span id="payment-button-amount">Valider</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__content section__content--p30" style="margin-top:-80px">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Mon profile</div>
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h3 class="text-center title-2">Mot de passe</h3>
                                            </div>
                                            <hr>
                                            <form action="/updateUserPassword" method="post" >
                                                @csrf
                                                <div class="form-group has-success">
                                                    <label for="oldPassword" class="control-label mb-1">Ancien mot de passe </label>
                                                    <input id="oldPassword" name="oldPassword" type="password" class="form-control cc-name valid"  required />
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="newPassword" class="control-label mb-1">Nouveau mot de passe</label>
                                                    <input id="newPassword" pattern="[A-Za-z]{6}" name="newPassword" type="password" class="form-control cc-name valid" required />
                                                    <small>6 caractères min</small>
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="confirmPassword" class="control-label mb-1">Confirmer le mot de passe</label>
                                                    <input id="confirmPassword" pattern="[A-Za-z]{6}" name="confirmPassword" type="password" class="form-control cc-name valid" required />
                                               </div>
                                                <div>
                                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fa fa-lock fa-lg"></i>&nbsp;
                                                        <span id="payment-button-amount">Valider</span>
                                                    </button>
                                                </div>
                                            </form>
                                            
                                        </div>
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

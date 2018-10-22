<!DOCTYPE html>
<html lang="en">
    @include('Dashboard.layouts.header')
    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="/">
                                    <img src="{{ asset('image/logo.png') }}" alt="Hotel IKRAM">
                                </a>
                            </div>
                            <div class="login-form">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="form-group">
                                    <label>Adresse Email</label>
                                        <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                        @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label>Passeword</label>
                                        <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                        @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                        @endif
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Souvenir de moi
                                        </label>
                                        <label>
                                            <a href="{{ route('password.request') }}">Passeword oublié</a>
                                        </label>
                                    </div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">S'authentifier</button>
                                    @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                        @endif
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('Dashboard.layouts.footer')
    </body>
</html>
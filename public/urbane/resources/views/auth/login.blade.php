@extends('layouts.admin')

@section('content')
<section class="section section-login">
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m3 l6 offset-l3">
                <div class="card-panel login blue darken-2 white-text center">
                    <h4>U90 Login</h4>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email" class="white-text">Email</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">lock</i>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <label for="password" class="white-text">Password</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <input type="submit" value="login" class="btn btn-large btn-extended grey lighten-4 black-text">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')

@endsection
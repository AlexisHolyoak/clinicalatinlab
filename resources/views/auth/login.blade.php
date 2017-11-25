@extends('auth.layout.auth')

@section('content')
<div>
  <div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form action="{{ route('login') }}" method="post" data-parsley-validate novalidate>
          {{ csrf_field() }}
          <h1>Iniciar Sesion</h1>
          <div>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
              placeholder="correo electronico" data-parsley-trigger="changed" required autofocus>
          </div>
          <div>
              <input id="password" type="password" class="form-control" name="password"
                     placeholder="contraseña" required>
          </div>
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif
          @if (!$errors->isEmpty())
              <div class="alert alert-danger" role="alert">
                  {!! $errors->first() !!}
              </div>
          @endif
          <div>
              <button class="btn btn-default submit" type="submit">Entrar</button>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
            <p class="change_link">¿Olvidaste tu contraseña?
                <a href="{{ route('password.request') }}" class="to_register"> Reestablecer contraseña </a>
            </p>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>
@endsection
@section('styles')
<link href="{{ asset('animate.css/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('nprogress/nprogress.css')}}" rel="stylesheet">
@endsection

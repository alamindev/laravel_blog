@extends('layouts.app') 
@section('title') Register form
@endsection
 
@section('main-content')

<div class="columns">
  <div class="column is-three-fifths is-offset-one-fifth m-t-40">
    <div class="card login">
      <div class="card-content">
        <h1 class="title is-uppercase has-text-weight-bold has-text-centered">Register</h1>
        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="field">
            <label class="label" for="name">Name</label>
            <p class="content">
              <input class="input {{ $errors->has('name') ? ' is-danger' : '' }}" type="text" name="name" id="name" placeholder="Your Name Here"
                value="{{ old('name') }}"> @if ($errors->has('name'))
              <span class="help">
                   <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                </span> @endif
            </p>
          </div>
          <div class="field">
            <label class="label" for="email">Email</label>
            <p class="content">
              <input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" type="text" name="email" id="email" placeholder="email@example.com"
                value="{{ old('email') }}"> @if ($errors->has('email'))
              <span class="help">
                   <strong class="has-text-danger">{{ $errors->first('name') }}</strong>
                </span> @endif
            </p>
          </div>
          <div class="columns">
            <div class="column">
              <div class="field">
                <label class="label" for="password">Password</label>
                <p class="content">
                  <input class="input {{ $errors->has('password') ? ' is-danger' : '' }}" type="password" name="password" id="password" placeholder="password">                  @if ($errors->has('password'))
                  <span class="help">
                        <strong class="has-text-danger">{{ $errors->first('password') }}</strong>
                      </span> @endif
                </p>
              </div>
            </div>
            <div class="column">
              <div class="field">
                <label class="label" for="password-confirm">Confirm Password</label>
                <p class="content">
                  <input class="input" type="password" name="password_confirmation" id="password-confirm" placeholder="confirm password">
                </p>
              </div>
            </div>
          </div>
          <button class="button is-link is-outlined is-fullwidth m-t-30">Register</button>
        </form>
      </div>
    </div>
    <h5 class="has-text-centered m-t-10"> <a class="is-muted" href="{{ route('login') }}">
          All Ready Have An Account?
      </a></h5>
  </div>
</div>
@endsection
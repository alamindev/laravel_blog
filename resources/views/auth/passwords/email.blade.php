@extends('layouts.app') 
@section('title') Forgot password form
@endsection
 
@section('main-content')
<div class="columns">
	<div class="column is-half is-offset-one-quarter m-t-100">
		<div class="card">
			<div class="card-content">
				<h2 class="title is-uppercase has-text-weight-bold has-text-centered">Forgot Password?</h2>
				@if (session('status'))
				<div class="notification is-success">
					{{ session('status') }}
				</div>
				@endif
				<form method="POST" action="{{ route('password.email') }}">
					{{ csrf_field() }}
					<div class="field">
						<label for="email" class="label">Email</label>
						<p class="content">
							<input class="input {{ $errors->has('email') ? ' is-danger' : '' }}" id="email" name="email" type="text" placeholder="example:-name@gmail.com"
							 value="{{ old('email') }}" required> @if ($errors->has('email'))
							<span class="help">	<strong class="has-text-danger">{{ $errors->first('email') }}</strong></span>@endif
						</p>
					</div>
					<button type="submit" class="button m-t-20 is-success is-outlined is-fullwidth ">
							Send Password Reset Link
					</button>
				</form>
			</div>
		</div>
		<h5 class="has-text-centered m-t-10"> <a class="is-muted" href="{{ route('login') }}">
        <span class="icon"><i class="fa fa-caret-left"></i></span>Back to login
    </a></h5>
	</div>
</div>
{{--
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Reset Password</div>

				<div class="panel-body">
					@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
					@endif

					<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
						{{ csrf_field() }}

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<label for="email" class="col-md-4 control-label">E-Mail Address</label>

							<div class="col-md-6">
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required> @if ($errors->has('email'))
								<span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
                                    Send Password Reset Link
                                </button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div> --}}
@endsection
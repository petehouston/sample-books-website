@extends ('admin.layouts.master')

@section ('head-title')
	Admin Login
@stop

@section ('body-content')

<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
			
			{{  Form::open([
					'route' => [ 'admin.auth.login.post' ],
					'method' => 'POST'
				])
			}}
			  <fieldset>
			    <legend>Admin Login</legend>
				
				@if (Session::has('error'))
				<div class="form-group">
					<div class="alert alert-danger">{{ Session::get('error') }}</div>
				</div>
				@endif

			    <div class="form-group">
					<label for="username" class="col-lg-2 control-label">Username</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" id="username" name="username" placeholder="Username">
					</div>
			    </div>

			    <div class="form-group">
					<label for="password" class="col-lg-2 control-label">Password</label>
					<div class="col-lg-10">
						<input type="password" class="form-control" id="password" name="password" placeholder="Password">
					</div>
			    </div>
				
				<button type="submit" class="btn btn-success">Login</button>
			    
			  </fieldset>
			{{ Form::close() }}

		</div>
	</div>
</div>

@stop
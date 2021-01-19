@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">


				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2> Show User</h2>
					</div>
				</div>
		   
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Name:</strong>
							{{ $userData->name }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Surname:</strong>
							{{ $userData->surname }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>ID Number:</strong>
							{{ $userData->idNumber }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Mobile Number:</strong>
							{{ $userData->mobileNumber }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Details:</strong>
							{{ $userData->email }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Date of Birth:</strong>
							{{ $userData->dateOfBirth }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Language:</strong>
							{{ $userData->language }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="form-group">
							<strong>Interests:</strong>
							{{ $userData->interests }}
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 text-center">
						<a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
@endsection
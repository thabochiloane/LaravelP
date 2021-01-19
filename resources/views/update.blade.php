@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Edit User</h2>
					</div>
				</div>
   
				@if ($errors->any())
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.<br><br>
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
				@endif
  
				<form id="myupdateform" class="form-horizontal" action="{{ route('user.edit', $userData->id) }}" method="POST">
					{{ csrf_field() }}
					{{ method_field('PATCH') }}
			   
					 <div class="row">
					 
						<label for="name" class="col-md-4 control-label">Name</label>
						<div class="col-md-6">
							<input type="text" name="name" value="{{ $userData->name }}" class="form-control" placeholder="Name">
						</div>
							
						<label for="surname" class="col-md-4 control-label">Surname</label> 
						<div class="col-md-6">
							<input type="text" name="surname" value="{{ $userData->surname }}" class="form-control" placeholder="surname">
						</div>
			   
						<label for="idNumber" class="col-md-4 control-label">ID Number:</label> 
						<div class="col-md-6">
							<input type="text" name="idNumber" value="{{ $userData->idNumber }}" class="form-control" placeholder="ID Number">
						</div>
						
						<label for="mobileNumber" class="col-md-4 control-label">Mobile Number:</label> 
						<div class="col-md-6">
							<input type="text" name="mobileNumber" value="{{ $userData->mobileNumber }}" class="form-control" placeholder="Mobile Number">
						</div>
						
						<label for="email" class="col-md-4 control-label">Email:</label> 
						<div class="col-md-6">
							<input type="text" name="email" value ="{{ $userData->email }}" class="form-control" placeholder="Email">
						</div>
						
						<label for="dateOfBirth" class="col-md-4 control-label">Date of Birth:</label> 
						<div class="col-md-6">
							<input type="text" name="dateOfBirth" value="{{ $userData->dateOfBirth }}" class="form-control" placeholder="Date of Birth">
						</div>

						<label for="language" class="col-md-4 control-label">Language:</label>
						<div class="col-md-6">
							<select id="language" name="language" value="{{ $userData->language }}" class="form-control">
								<option value="English">English</option>
								<option value="Afrikaans">Afrikaans</option>
								<option value="Zulu">Zulu</option>
								<option value="Tswana">Tswana</option>
								<option value="Pedi">Pedi</option>
								<option value="Venda">Venda</option>
								<option value="Xitsonga">Xitsonga</option>
							</select>
						</div>
						
						<label for="interests" class="col-md-4 control-label">Interests:</label>
						<div class="col-md-6">
							<fieldset  value="{{ $userData->interests }}" >
								<p>
									<label><input type="checkbox" name="interests" value="cycling" /> cycling</label>
									<label><input type="checkbox" name="interests" value="running" /> running</label>
									<label><input type="checkbox" name="interests" value="visit gym" /> visit gym</label>
									<label><input type="checkbox" name="interests" value="swimming" /> swimming</label>
									<label><input type="checkbox" name="interests" value="team sports" /> team sport(s)</label>
									<label><input type="checkbox" name="interests" value="other" /> other</label>
								</p>
							</fieldset>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-12 text-center">
						  <button type="submit" class="btn btn-primary">Submit</button>
						  <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
						</div>
					</div>
			   
				</form>
	
@endsection 
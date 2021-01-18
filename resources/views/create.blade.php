@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

				<div class="col-lg-12 margin-tb">
					<div class="pull-left">
						<h2>Add New User</h2>
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
				   
				<form class="form-horizontal" action="{{ route('user.store') }}" method="POST">
					{{ csrf_field() }}
				 
					 <div class="row">
					 
						<label for="name" class="col-md-4 control-label">Name</label>
						<div class="col-md-6">
							<input type="text" name="name" class="form-control" placeholder="Name">
						</div>
						
						<label for="surname" class="col-md-4 control-label">Surname</label> 
						<div class="col-md-6">
							<input type="text" name="surname" class="form-control" placeholder="surname">
						</div>
					  
						<label for="idNumber" class="col-md-4 control-label">ID Number:</label> 
						<div class="col-md-6">
							<input type="text" name="idNumber" class="form-control" placeholder="ID Number">
						</div>
						
						<label for="mobileNumber" class="col-md-4 control-label">Mobile Number:</label> 
						<div class="col-md-6">
							<input type="text" name="mobileNumber" class="form-control" placeholder="Mobile Number">
						</div>
						
						<label for="email" class="col-md-4 control-label">Email:</label> 
						<div class="col-md-6">
							<input type="text" name="email" class="form-control" placeholder="Email">
						</div>
						
						<label for="dateOfBirth" class="col-md-4 control-label">Date of Birth:</label> 
						<div class="col-md-6">
							<input type="text" name="dateOfBirth" class="form-control" placeholder="Date of Birth">
						</div>
					  
					  
						<label for="language" class="col-md-4 control-label">Language:</label>
						<div class="col-md-6">
							<select id="language" name="language" class="form-control">
								<option value="volvo">English</option>
								<option value="saab">Afrikaans</option>
								<option value="fiat">Zulu</option>
								<option value="audi">Tswana</option>
								<option value="audi">Pedi</option>
								<option value="audi">Venda</option>
								<option value="audi">Xitsonga</option>
							</select>
						</div>
					  
					  
						<label for="interests" class="col-md-4 control-label">Interests:</label> 
						<div class="col-md-6">
							 <div class="multiselect">
								<div class="selectBox form-control" onclick="showCheckboxes()">
								  <select>
									<option>Select Your Interest</option>
								  </select>
								  <div class="overSelect"></div>
								</div>
								<div id="checkboxes">
								  <label for="one">
										<input type="checkbox" id="one" />First Interest</label>
									<label for="two">
										<input type="checkbox" id="two" />Second Interest</label>
									<label for="three">
										<input type="checkbox" id="three" />Third Interest</label>
									<label for="four">
										<input type="checkbox" id="three" />Third Interest</label>
									<label for="five">
										<input type="checkbox" id="three" />Third Interest</label>
								</div>
							</div>
						</div>

						
						
						<div class="col-xs-12 col-sm-12 col-md-12 text-center">
								<button type="submit" class="btn btn-primary">Submit</button>
								<a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
						</div>
					</div>
				   
				</form>
			</div>
		</div>
	</div>
</div>

@endsection
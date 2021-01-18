@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit User</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Back</a>
            </div>
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
  
    
	<form action="{{ route('user.update',$userData->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $UserData->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Surname:</strong>
                    <input type="text" name="surname" value="{{ $userData->surname }}" class="form-control" placeholder="Surname">
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID Number:</strong>
                    <input type="text" name="idNumber" value="{{ $userData->idNumber }}" class="form-control" placeholder="ID Number">
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mobile Number:</strong>
                    <input type="text" name="mobileNumber" value="{{ $userData->mobileNumber }}" class="form-control" placeholder="Mobile Number">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email ID:</strong>
                    <input type="text" class="form-control" name="email" value ="{{ $userData->email }}" placeholder="Email">
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Date of Birth:</strong>
                    <input type="text" name="dateOfBirth" value="{{ $userData->dateOfBirth }}" class="form-control" placeholder="Date of Birth">
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Language:</strong>
                    <input type="text" name="language" value="{{ $userData->language }}" class="form-control" placeholder="Language">
                </div>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Interests:</strong>
                    <input type="text" name="interests" value="{{ $userData->interests }}" class="form-control" placeholder="Interests">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
	
@endsection 
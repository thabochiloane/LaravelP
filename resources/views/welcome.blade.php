@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Welcome To My Laravel Assessment</strong></div>

                <div class="panel-body">
                    Welcome back, this is the web application where user can subscribe more users into the system. 
					Click on Login to login into the system or click on register below to register a new member.<br /><br />
					
					 <a class="btn btn-success" href="{{ route('user.create') }}"> Create New User</a>
				</div>
            </div>
        </div>
    </div>
</div>
@endsection

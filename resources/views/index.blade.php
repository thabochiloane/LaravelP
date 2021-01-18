@extends('layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Dashboard</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Create New User</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>surname</th>
            <th>ID Number</th>
            <th>Mobile No</th>
            <th>Email</th>
            <th>Date Of Birth</th>
            <th>Language</th>
            <th>Interests</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($userData as $uData)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $uData->name }}</td>
            <td>{{ $uData->surname }}</td>
            <td>{{ $uData->idNumber }}</td>
            <td>{{ $uData->mobileNumber }}</td>
            <td>{{ $uData->email }}</td>
            <td>{{ $uData->dateOfBirth }}</td>
            <td>{{ $uData->language }}</td>
            <td>{{ $uData->interests }}</td>
            <td>
                <form action="{{ route('destroy',$uData->id) }}" method="POST">
                   
                    <a class="btn btn-info" href="{{ route('show',$uData->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('edit',$uData->id) }}">Edit</a>
                    <!-- SUPPORT ABOVE VERSION 5.5 -->
                    {{-- @csrf
                    @method('DELETE') --}} 
                    
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                  
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $userData->links() !!}
      
@endsection 
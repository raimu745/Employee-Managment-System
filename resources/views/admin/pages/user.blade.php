@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="row d-flex justify-content-center" >
        <!-- <div class="col-lg-2"></div> -->
        <div class="col-md-8 " >
            <div class="card">
                <div class="card-header">
                    <a href="{{url('userForm')}}" class="btn btn-outline-success float-end">Add Here</a>
                </div>
                <div class="card-body">
                @if(session('msg'))
                <div class="alert alert-success">
                    {{session('msg')}}
                </div>
                @endif
                <table class="table table-borderd">
                    <tr>
                        <th>Id</th>
                        <th>UserName</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                        <a href="{{url('edit/'.$user->id)}}" class="btn btn-success">Edit</a>
                            <a href="{{url('delete/'.$user->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                </div>
                <div class="card-footer">
                    <h4 class="text-center">Brand</h4>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-2"></div> -->
    </div>
</div>

@endsection

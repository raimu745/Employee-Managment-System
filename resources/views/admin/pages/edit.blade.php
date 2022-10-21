@extends('admin.master')

@section('content')

   <div class="container">
    <div class="row justify-content-center">
    <div class="col-8" >
   @if(session('up'))
    <div class="alert alert-success">
        {{session('up')}}
    </div>
   @endif

    <div class="card">
                <div class="card-header">
                    <a href="{{url('user')}}" class="btn btn-outline-success float-end">Back</a>
                </div>
                <div class="card-body">

            <form action="{{url('update/'.$users->id)}}" method="Post">
                @csrf

                <div class="mt-2">
                    <label>UserName</label>
                    <input type="text" class="form-control" name="username" value="{{old('username',$users->username)}}">
                    @error('username')
                    <span class="text-danger">
                       {{ $message}}
                    </span>
                    @enderror
                </div>
                <div class="my-2">
                    <label>FirstName</label>
                    <input type="text" class="form-control" name="first_name" value="{{old('first_name',$users->first_name)}}">
                    @error('first_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label>LastName</label>
                    <input type="text" class="form-control" name="last_name" value="{{$users->last_name}}">
                    @error('last_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="{{$users->email}}">
                    @error('last_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <input type="submit" class="btn btn-primary mt-3" value="save">
            </form>
        </div>
</div>
<!-- password update -->
       <div class="card mt-5">
      <div class="card-header">Change Password</div>
      <div class="card-body">
       <form action="{{url('passUpdate')}}" method="Post">
        @csrf

        <div class="mt-2">
            <label>Password</label>
            <input type="password" class="form-control" name="password">
                 @error('password')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
        </div>

        <div class="mt-2">
            <label>Confirm Password</label>
            <input type="password" class="form-control" name="password_confirmation">
        </div>
        <input type="submit" value="Change Password" class="btn btn-primary mt-3">
       </form>
      </div>
      </div>

</div>
    </div>
   </div>

@endsection

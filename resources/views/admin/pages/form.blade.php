@extends('admin.master')

@section('content')

   <div class="container">
    <div class="row justify-content-center">
    <div class="col-8" >

    <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif -->

    <div class="card">
                <div class="card-header">
                    <a href="{{url('user')}}" class="btn btn-outline-success float-end">Back</a>
                </div>
                <div class="card-body">

            <form action="{{url('store')}}" method="Post">
                @csrf

                <div class="mt-2">
                    <label>UserName</label>
                    <input type="text" class="form-control" name="username">
                    @error('username')
                    <span class="text-danger">
                       {{ $message}}
                    </span>
                    @enderror
                </div>
                <div class="my-2">
                    <label>FirstName</label>
                    <input type="text" class="form-control" name="first_name">
                    @error('first_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label>LastName</label>
                    <input type="text" class="form-control" name="last_name">
                    @error('last_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mt-2">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                    @error('last_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <input type="submit" class="btn btn-primary mt-3" value="save">
            </form>
        </div>
</div>

</div>
    </div>
   </div>

@endsection

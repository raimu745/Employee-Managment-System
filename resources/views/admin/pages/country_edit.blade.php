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

            <form action="{{route('countries.update',$country->id)}}" method="Post">
                @csrf
                @method('put')

                <div class="mt-2">
                    <label>Country Code</label>
                    <input type="text" class="form-control" name="country_code" value="{{$country->country_code}}">
                    @error('country_code')
                    <span class="text-danger">
                       {{ $message}}
                    </span>
                    @enderror
                </div>
                <div class="my-2">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="{{$country->name}}">
                    @error('name')
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

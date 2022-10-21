@extends('admin.master')

@section('content')

<div class="container mt-5">
    <div class="row d-flex justify-content-center" >
        <!-- <div class="col-lg-2"></div> -->
        <div class="col-md-8 " >
            <div class="card">
                <div class="card-header">
                    <a href="{{url('countries/create')}}" class="btn btn-outline-success float-end">Add Here</a>
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
                        <th>Country Code</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($country as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->country_code}}</td>
                        <td>{{$data->name}}</td>
                        <td>
                        <a href="{{route('countries.edit',$data->id)}}" class="btn btn-success">Edit</a>
                            <!-- <a data-method="delete" href="{{route('countries.destroy',$data->id)}}"  name="_method" value="DELETE" class="btn btn-danger">Delete</a> -->
                            <!-- <input type="hidden" name="_method" value="DELETE"> -->
                            <form action="{{route('countries.destroy',$data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <!-- <a href="{{route('countries.destroy',$data->id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?">Delete</a> -->
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

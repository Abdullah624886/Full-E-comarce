@extends('layouts.app')
@section('link')


<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        
      <a href="{{url('/Sub/category')}}" class="btn btn-danger">Sub Category</a>
        <hr>

            <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>SL</th>
                    <th>category_id</th>
                    <th>name</th>
                    <th>Action</th>
                </tr>
                @foreach($sub as $su)
                <tr>
                    <td>{{$su->id}}</td>
                    <td>{{$su->category_id}}</td>
                    <td>{{$su->name}}</td>
                    <td >
                        <a href="" class="btn btn-info" style="font-size:10px;">Edit</a>
                        <a href="{{URL::to('delete/sub/category/'.$su->id)}}" onclick="alert('are you delete')" class="btn btn-danger" style="font-size:10px;" >Delete</a>
                        <a href="" class="btn btn-success " style="font-size:10px;">View</a>
                    </td>
                </tr>
               @endforeach
            </table>
     
      </div>
    </div>
  </div>



@endsection
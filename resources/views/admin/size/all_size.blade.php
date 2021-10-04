@extends('layouts.app')
@section('link')


<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        
      <a href="{{url('/size')}}" class="btn btn-danger">Add Size</a>
        <hr>

            <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>SL</th>
                    <th>name</th>
                    <th>Action</th>
                </tr>
                @foreach($size as $siz)
                <tr>
                    <td>{{$siz->id}}</td>
                    <td>{{$siz->name}}</td>
                    <td >
                        <a href="{{URL::to('size/edit'.$siz->id)}}" class="btn btn-info" style="font-size:10px;">Edit</a>
                        <a href="{{URL::to('size/delete'.$siz->id)}}" onclick="alert('are you delete')" class="btn btn-danger" style="font-size:10px;" >Delete</a>
                        <a href="" class="btn btn-success " style="font-size:10px;">View</a>
                    </td>
                </tr>
                @endforeach
            </table>
     
      </div>
    </div>
  </div>



@endsection
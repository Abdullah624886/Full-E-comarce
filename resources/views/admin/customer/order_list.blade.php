@extends('layouts.app')
@section('link')


<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        
        <hr>

            <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>SL</th>
                    <th>User_id</th>
                    <th>Product_id</th>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                @foreach($order as $orde)
                <tr>
                    <td>{{$orde->id}}</td>
                    <td>{{$orde->user_id}}</td>
                    <td>{{$orde->product_id}}</td>
                    <td>{{$orde->name}}</td>
                    <td>{{$orde->phone_number}}</td>
                    <td>{{$orde->address}}</td>
                    <td>{{$orde->status}}</td>
                    <td><img src="{{asset($orde->product->image)}}" style="height: 60px; width: 80px;"></td>
                    <td></td>
                    <td >
                        <a href="{{URL::to('delete/order/'.$orde->id)}}" onclick="alert('are you delete')" class="btn btn-danger" style="font-size:10px;" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
            {{$order->links()}}
      </div>
    </div>
  </div>



@endsection
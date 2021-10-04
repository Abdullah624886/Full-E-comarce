@extends('user.master')
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        
        <hr>

            <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Payment Method</th>
                    <th>Payment Status</th>
                    <th>Address</th>
                </tr>
                @foreach($order as $order)
                <tr>
                    <td><img src="{{asset($order->image)}}" style="height: 60px; width: 80px;"></td>
                    <td>{{$order->name}}</td>
                    <td>{{$order->status}}</td>
                    <td>{{$order->payment_method}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->address}}</td>
                </tr>
                @endforeach
            </table>
      </div>
    </div>
  </div>



@endsection
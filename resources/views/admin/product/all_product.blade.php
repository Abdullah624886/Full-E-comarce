@extends('layouts.app')
@section('link')


<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        
      <a href="{{url('/product')}}" class="btn btn-danger">Add Category</a>
        <hr>

            <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>SL</th>
                    <th>category</th>
                    <th>sub_id</th>
                    <th>name</th>
                    <!-- <th>size_id</th>
                    <th>color_id</th> -->
                    <th>description</th>
                    <th>price</th>
                    <th>sale_price</th>
                    <th>image</th>
                    <th>Action</th>
                </tr>
                @foreach($product as $produc)
                <tr>
                    <td>{{$produc->id}}</td>
                    <td>{{$produc->category->name}}</td>
                    <td>{{$produc->sub_category->name}}</td>
                    <td>{{$produc->name}}</td>
                    <!-- <td>{{$produc->size_id}}</td>
                    <td>{{$produc->color_id}}</td> -->
                    <td>{{$produc->description}}</td>
                    <td>{{$produc->price}}</td>
                    <td>{{$produc->sale_price}}</td>
                    <td><img src="{{asset($produc->image)}}" style="height: 60px; width: 80px;"></td>
                    <td >
                        <a href="{{url('edit/product/'.$produc->id)}}" class="btn btn-info" style="font-size:10px;">Edit</a>
                        <a href="{{url('delete/product/'.$produc->id)}}" onclick="alert('are you delete')" class="btn btn-danger" style="font-size:10px;" >Delete</a>
                        <a href="{{url('view/product/'.$produc->id)}}" class="btn btn-success " style="font-size:10px;">View</a>
                    </td>
                </tr>
                @endforeach
            </table>
        {{$product->links()}}
      </div>
    </div>
  </div>



@endsection
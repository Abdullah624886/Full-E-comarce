@extends('layouts.app')
@section('link')


<div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        
      <h4>Product View</h4>
        <div>
                <p>ID: {{$product->id}}</p>
                <p>CATEGORY_ID: {{$product->category_id}}</p>
                <p>SUB_CATEGORY_ID: {{$product->sub_category_id}}</p>
                <p>NAME: {{$product->name}}</p>
                <p>SIZE_ID: {{$product->size_id}}</p>
                <p>COLOR_ID: {{$product->color_id}}</p>
                <p>PRICE: {{$product->price}}</p>
                <p>SALE_PRICE: {{$product->sale_price}}</p>
                <p>IMAGE: <img src=" {{asset($product->image)}} " style="height: 80px; width: 130px;"></p>
                <p>DESCRIPTION: {{$product->description}}</p>
        </div>

      </div>
    </div>
  </div>


  @endsection   
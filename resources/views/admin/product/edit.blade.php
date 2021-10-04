@extends('layouts.app')
@section('link')

  <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="text-right">
                
              </div>
              <h4 class="card-title">Update Product form elements</h4>
              <p class="card-description">
              Update Product form elements
              </p>
              @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
              <form action="{{route('store.product')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{$product->name}}" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                    <option value="0">Select Category</option>
                    @foreach($category as $cate)
                    <option value="{{$cate->id}}" <?php if($cate->id==$product->category_id) echo 'selected' ?> >{{$cate->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Sub Category</label>
                    <select class="form-control" value="{{$product->name}}" name="sub_category_id" id="sub_category_id">
                    <option value="0">Select Sub Category</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Size</label>
                    <select class="form-control" value="{{$product->size_id}}" name="size_id">
                    <option value="0">Select Size</option>
                    @foreach($size as $siz)
                    <option value="{{$siz->id}}" <?php if($siz->id==$product->size_id) echo 'selected' ?> >{{$siz->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Color</label>
                    <select class="form-control" value="{{$product->name}}" name="color_id">
                    <option value="0">Select Color</option>
                    @foreach($color as $colo)
                    <option value="{{$colo->id}}" <?php if($colo->id==$product->color_id) echo 'selected' ?> >{{$colo->name}}</option>
                    @endforeach                        
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control"  id="image" name="image" required>
                  Old image: <img src="{{asset($product->image)}}" style="height:40px; width:60px;">
                 <inpute type="hidden" name="old_photo" value="{{$product->image}}">

                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Price</label>
                  <input type="text" class="form-control" id="exampleInputCity1" placeholder="Price" value="{{$product->price}}" name="price">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">sale_price</label>
                  <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Sale_Price" value="{{$product->sale_price}}" name="sale_price">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4" name="description" value="{{$product->description}}"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Update</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        @endsection



  @section('footerJS')

  <script>
  jQuery(document).ready(function($){

// CREATE
$("#category_id").change(function (e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

    e.preventDefault();
    var formData = {
        'category_id': jQuery('#category_id').val(),
    };

    jQuery.ajax({
        type: 'POST',
        url: "{{ route('get.subcategory') }}",
        data: formData,
        dataType: 'html',
        success: function (data) {
          $('#sub_category_id').html(data);
        },
        error: function (data) {
        }
    });
});
});

</script>

  @endsection
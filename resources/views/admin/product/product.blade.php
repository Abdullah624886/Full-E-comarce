@extends('layouts.app')
@section('link')

  <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="text-right">
                <a class="btn btn-primary" href="{{url('show/all/product')}}">All Product</a>
              </div>
              <h4 class="card-title">Product form elements</h4>
              <p class="card-description">
                Product form elements
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
                  <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Category</label>
                    <select class="form-control" name="category_id" id="category_id">
                    <option value="0">Select Category</option>
                    @foreach($category as $cate)
                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Sub Category</label>
                    <select class="form-control" name="sub_category_id" id="sub_category_id">
                    <option value="0">Select Sub Category</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Size</label>
                    <select class="form-control" name="size_id">
                    <option value="0">Select Size</option>
                    @foreach($size as $siz)
                    <option value="{{$siz->id}}">{{$siz->name}}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Color</label>
                    <select class="form-control" name="color_id">
                    <option value="0">Select Color</option>
                    @foreach($color as $colo)
                    <option value="{{$colo->id}}">{{$colo->name}}</option>
                    @endforeach                        
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image" required>
                  <p class="help-block text-danger"></p>

                </div>
                <div class="form-group">
                  <label for="exampleInputCity1">Price</label>
                  <input type="text" class="form-control" id="exampleInputCity1" placeholder="Price" name="price">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword4">sale_price</label>
                  <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Sale_Price" name="sale_price">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
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
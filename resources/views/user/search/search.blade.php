@extends('user.master')
@section('content')

<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Search</a></li>
            </ol>
        </div><!-- End .container-fluid -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container-fluid">
          

            <div class="products">
                <div class="row">


                    
                    @foreach($product as $produ)
                    <div class="col-6 col-md-4 col-lg-4 col-xl-3 col-xxl-2">
                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <a href="{{url('show/post/'.$produ->id)}}">
                                    <img src="{{URL::to($produ->image)}}" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                </div><!-- End .product-action -->

                                <div class="product-action action-icon-top">

                                    <form action="/add_to_cart" method="post">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{($produ->id)}}">
                                        <button class="btn-product btn-cart"><span>add to cart</span></button>
                                    </form>

                                    <a href="{{url('show/post/'.$produ->id)}}" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                    <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                                </div><!-- End .product-action -->
                            </figure><!-- End .product-media -->

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Shoes</a>
                                </div><!-- End .product-cat -->
                                <h3 class="product-title"><a href="product.html">{{($produ->name)}}</a></h3><!-- End .product-title -->
                                <div class="product-price">
                                    {{($produ->sale_price)}}
                                </div><!-- End .product-price -->
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                    </div><!-- End .ratings -->
                                    <span class="ratings-text">( 2 Reviews )</span>
                                </div><!-- End .rating-container -->

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #dac1a7;"><span class="sr-only">Color name</span></a>
                                </div><!-- End .product-nav -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product -->
                    </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
                    @endforeach

                    
                </div><!-- End .row -->

                <div class="load-more-container text-center">
                    <a href="#" class="btn btn-outline-darker btn-load-more">More Products <i class="icon-refresh"></i></a>
                </div><!-- End .load-more-container -->
            </div><!-- End .products -->
        
        </div><!-- End .container-fluid -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
        @endsection
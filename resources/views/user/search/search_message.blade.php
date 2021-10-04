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


                    
                   <p style="font-size: 300%; text-align:center;">Sorry, no products found</p>

                    
                </div><!-- End .row -->

                <div class="load-more-container text-center">
                    <a href="#" class="btn btn-outline-darker btn-load-more">More Products <i class="icon-refresh"></i></a>
                </div><!-- End .load-more-container -->
            </div><!-- End .products -->
        
        </div><!-- End .container-fluid -->
    </div><!-- End .page-content -->
</main><!-- End .main -->
        @endsection
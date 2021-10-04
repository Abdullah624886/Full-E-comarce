@extends('layouts.app')
@section('link')

<div class="template-demo">
     <a class="btn btn-primary" href="{{route('all.size')}}">All Size</a>
</div>
<div class="col-lg-4 mx-auto">
    
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Size form</h4>
                  <p class="card-description">
                    Updat Size Form
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
                  <form action="{{url('updat/size/'.$size->id)}}" method="post">
                      @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Size</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="{{$size->name}}" placeholder="Size" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Updat</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            @endsection
@extends('layouts.app')
@section('link')

<div class="template-demo">
     <a class="btn btn-primary" href="{{url('all/category')}}">All Category</a>
</div>
<div class="col-lg-4 mx-auto">
    
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Category form</h4>
                  <p class="card-description">
                    Updat Category Form
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
                  <form action="{{url('updat/category/'.$category->id)}}" method="post">
                      @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Categorie</label>
                      <input type="text" class="form-control" id="exampleInputUsername1" value="{{$category->name}}" placeholder="Categorie" name="name">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Updat</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
            @endsection
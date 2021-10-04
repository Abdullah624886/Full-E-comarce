@extends('layouts.app')
@section('link')


<div class="container">
    <div class="row">
      <div class="col-lg-10 col-md-10 mx-auto">
        
        <hr>

            <table class="table table-resposive" style="font-size:17px;">
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                @foreach($user as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td></td>
                    <td >
                        <a href="" onclick="alert('are you delete')" class="btn btn-danger" style="font-size:10px;" >Delete</a>
                    </td>
                </tr>
                @endforeach
            </table>
     
      </div>
    </div>
  </div>



@endsection
@extends('layouts.main')

@section('content')

    <!-- Page Heading -->
    <div class="sl-mainpanel">
        

        <div class="sl-pagebody">
          <div class="sl-page-title">
            <h5>Users Table</h5>
           
          </div><!-- sl-page-title -->
          <div class="card">
            <div>
              @if (session()->has('message'))
                  <div class="alert alert-success">
                      {{ session('message') }}
                  </div>
              @endif
        </div>
          <div class="card pd-20 pd-sm-40">
              <div class="card-header">
            <h6 class="card-body-title">  Users List
              <br><br>
              <div class="card-body">
            <div class="row">
              <div class="col">

           
              <form method="GET" action="{{ route('users.index') }}">
                <div class="form-row align-items-center">
                    <div class="col">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                            placeholder="">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2" >Search</button>
                    </div>
                </div>
            </form>
            
          </div>
          <a href="{{route('users.create')}}" class="btn btn-sm btn-success" style="float: right;" >Add New</a><br>
        </div>
       
           
             
           <table class="table table-dark">
            <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Last name</th>
            <th scope="col">First Name</th>
            <th scope="col">Email</th>
            <th scope="col">Manage</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
          <tr>
            <th scope="row">1</th>
            <td>{{$user->username}}</td>
            <td>{{$user->last_name}}</td>
            <td>{{$user->first_name}}</td>
            <td>{{$user->email }}</td>
            <td><a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-primary">Edit</a>
              <a href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-danger">Delete</a>
            </td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection    
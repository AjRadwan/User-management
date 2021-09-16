@extends('templates.main') 
@section('content')
    <H2 class="text-center mb-4">Users</H2>
    <div class="card">
        <table class="table table-dark table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            @foreach ($users as $user)
            <tbody>
                <tr>
                  <th scope="row">{{$user->id}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  </tr>
                <tr>
                </tbody>
            @endforeach
            </table>
    </div>
@endsection
 
@extends('templates.main') 
@section('content')
<div class="row">
    <div class="col-12 mb-4">
        <h1 class="float-start">Users</h1>

        <a type="button" href="{{route('admin.users.create')}}" class="btn btn-success float-end" role="button">Create</a>
    </div>
</div>
    
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
            <td>
                <a type="button" href="{{route('admin.users.edit', $user->id)}}" class="btn btn-light" role="button">Edit</a>

                <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-user-form-{{$user->id}}').submit()">Delete</button>

                <form id="delete-user-form-{{$user->id}}" action="{{route('admin.users.destroy', $user->id)}}" method="POST" style="display: none"
                @csrf 
                @method('DELETE')
                ></form>
            </td>
            </tr>
        <tr>
        </tbody>
    @endforeach
    </table>
    </div>
@endsection
 
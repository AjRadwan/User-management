@extends('templates.main')


@section('content')
<h1 class="text-center mb-3">Create New User</h1>
<div class="card p-5">
<form method="POST" action="{{route('admin.users.create')}}">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" id="name">
        @error('name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password </label>
        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password">
        @error('password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

           <button type="submit" class="btn btn-primary">Sign</button>
      </form>
    </div>
 
@endsection


 
@extends('templates.main')


@section('content')
<h1 class="text-center mb-3">Create New User</h1>
<div class="card p-5">
<form method="POST" action="{{route('admin.users.store')}}">
  @include('admin.users.partials.form', ['create' => true])
      </form>
    </div>
 
@endsection


 
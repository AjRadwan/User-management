@extends('templates.main')


@section('content')
<h1 class="text-center mb-3">Edit  User</h1>
<div class="card p-5">
<form method="POST" action="{{route('admin.users.update', $user->id)}}">
  @method('PATCH')

  @include('admin.users.partials.form')
      </form>
    </div>
 
@endsection


 
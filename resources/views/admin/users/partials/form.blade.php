    @csrf
    <div class="mb-3">
        <label  class="form-label">Name</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}} @isset($user) {{$user->name}}  @endisset">
        @error('name')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" 
        value="{{old('email')}} @isset($user) {{$user->email}}  @endisset">
        @error('email')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>


@isset($create)

    <div class="mb-3">
        <label for="password" class="form-label">Password </label>
        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror">
        @error('password')
        <span class="invalid-feedback" role="alert">
            {{ $message }}
        </span>
        @enderror
    </div>
    @endisset


     {{-- adding multiple user --}}
    <div class="mb-3">
        @foreach ($roles as $role)
            <div class="form-check">
                <input class="form-check-input" name="roles[]"
                type="checkbox" value="{{$role->id}}" id="{{$role->name}}" 
                @isset($user)
                    @if (in_array($role->id, $user->roles->pluck('id')->toArray()))
                    checked
                      @endif
                @endisset>

                <label class="form-check-label" for="{{$role->name}}">
                    {{$role->name}}
                </label>
            </div>
        @endforeach
    </div>

           <button type="submit" class="btn btn-primary">Update</button>
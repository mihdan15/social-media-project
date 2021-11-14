@extends('profil.profilemaster')

@section('content')
<div class="feeds">
  <div class="feed">
    <div class="user">               
      <div class="ingo mb-2">
                <h1>Edit Profil {{$profile->user->name}}</h1>
                <hr>
                  <form action="/profile/{{$profile->id}}" method="POST">
                    @csrf
                    @method('PUT')
              <div class="form-floating mb-2">
                <label for="floatingInputEmail">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInputEmail" placeholder="{{$profile->user->email}}" name="email" value="{{ old('email') }}" required autocomplete="email" disabled>
              </div>
              <div class="form-floating mb-2">
                <label for="floatingInputUsername">Nama Lengkap</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInputUsername" placeholder="{{$profile->user->name}}" name="name" value="{{ old('name') }}" required autocomplete="name" disabled>
              </div>
                  <div class="form-group">
                    <label>Umur</label>
                    <input type="number" class="form-control" name="umur" value="{{$profile->umur}}">
                  </div>
                      @error('umur')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{$profile->alamat}}">
                  </div>
                      @error('alamat')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                  <div class="form-group">
                    <label>Bio</label>
                    <textarea name="bio" class="form-control" cols="30" rows="10">{{$profile->bio}}</textarea>
                  </div>
                      @error('bio')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Edit</button>
                            </div>
                        </div>
                </form>


             <hr>

{{--               <div class="form-floating mb-2">
                <label for="floatingPassword">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
              </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                    </span>
               @enderror


               <div class="form-floating mb-3">
                <label for="floatingPassword"> Confirm Password</label>
                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPasswordConfirm" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
              </div>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                    </span>
               @enderror 


</form> --}}
</div>
  </div>
    </div>
      </div>
@endsection
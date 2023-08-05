@extends('layouts.guest',['title'=>'Login', 'active'=>'login'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card card-login card-hidden">
                        <div class="card-header card-header-rose text-center">
                            <h4 class="card-title">Login</h4>
                        </div>
                        <div class="card-body ">
                            <p class="card-description text-center">Welcome</p>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">email</i>
                                    </span>
                                  </div>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email..." name="email" required>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </span>
                            <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">lock_outline</i>
                                    </span>
                                  </div>
                                  <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password..." name="password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </span>
                        </div>
                        <div class="card-footer justify-content-center">
                            <div class="row justify-content-center">
                            <button type="submit" class="btn btn-rose btn-link btn-lg">
                                {{ __('Lets Go') }}
                            </button>
                            @if (Route::has('password.request'))
                                    <div class="col-md-12">
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </div>
                            @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

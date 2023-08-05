@extends('layouts.guest', ['title'=>'Password Reset', 'active'=>''])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
            <form class="form" method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="card card-login card-hidden">
                    <div class="card-header card-header-rose text-center">
                        <h4 class="card-title">Login</h4>
                    </div>
                    <div class="card-body ">
                        <p class="card-description text-center">Welcome</p>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        <span class="bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text">
                                      <i class="material-icons">email</i>
                                    </span>
                                  </div>
                                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
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
                                {{ __('Send Password Reset Link') }}
                            </button>
                            <div class="col-md-12">
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Already have account?') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

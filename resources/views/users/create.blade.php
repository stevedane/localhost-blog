@extends('layouts.app', ['title'=> 'Create User', 'active'=>'users'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-rose">
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title ">Create new user</h4>
                            </div>
                            <form method="post" action="{{route('users.store')}}">
                                @include('users.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app', ['title'=> 'Users', 'active'=>'users'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-rose">
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title ">All users</h4>
                                <a href="{{route('users.create')}}" class="btn btn-success btn-round btn-fab float-right">
                                    <i class="material-icons">add</i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Picture
                                            </th>
                                            <th>
                                                Created at
                                            </th>
                                            <th class="text-center">
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $key => $user)
                                            <tr>
                                                <td>
                                                    {{++$key}}
                                                </td>
                                                <td>
                                                    {{$user->name}}
                                                </td>
                                                <td>
                                                    {{$user->email}}
                                                </td>
                                                <td>
                                                    <div class="img-container"
                                                         style="width: 32px;height: 32px;border-radius: 50%">
                                                        <img src="{{asset('assets')}}/img/faces/avatar.jpg">
                                                    </div>
                                                </td>
                                                <td>
                                                    {{$user->created_at}}
                                                </td>
                                                <td class="td-actions text-center">
                                                    <a href="{{route('users.show',$user->id_user)}}"
                                                       class="btn btn-info btn-round">
                                                        <i class="material-icons">person</i>
                                                        <div class="ripple-container"></div>
                                                    </a>
                                                    <a href="{{route('users.edit',$user->id_user)}}"
                                                       class="btn btn-success btn-round">
                                                        <i class="material-icons">edit</i>
                                                    </a>
                                                    <form method="post"
                                                          action="{{route('users.destroy', $user->id_user)}}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-round">
                                                            <i class="material-icons">close</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

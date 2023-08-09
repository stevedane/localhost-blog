@extends('layouts.app',['title'=>'User details', 'active'=>'users'])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header card-header-icon card-header-rose">
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title ">User infos</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Column
                                            </th>
                                            <th>
                                                Value
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                Name
                                            </td>
                                            <td>
                                                {{$user->name}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Email
                                            </td>
                                            <td>
                                                {{$user->email}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Picture
                                            </td>
                                            <td>
                                                <div class="img-container" style="width: 32px;height: 32px;border-radius: 50%">
                                                    <img src="{{asset('assets')}}/img/faces/avatar.jpg">
                                                </div>
                                            </td>
                                        </tr>
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

@extends('admin.admin_layout')
@section('content')
<section class="content-header">
    <h1>Users</h1>
    <ol class="breadcrumb">
        <li><a href="/home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"></li>
    </ol>
</section>
<section class="content">
    @if (Session::has('message'))
        <div class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissable">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Email</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td class="align-middle">{{ $user->id }}</td>
                            <td class="align-middle">{{ $user->email }}</td>
                            <td class="align-middle">{{ $user->name }}</td>
                            <td class="align-middle">{{ $user->role }}</td>
                            <td class="align-middle">
                               <a href="/admin/view_user/{{ $user->id }}" class="btn btn-success">Update</a>
                               <a href="/admin/delete_user/{{ $user->id }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                        </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
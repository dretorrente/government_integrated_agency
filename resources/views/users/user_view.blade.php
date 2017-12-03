@extends('admin.admin_layout')
@section('content')
<section class="content-header">
    <h1>Edit</h1>
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
                    <form class="form-horizontal" action='/admin/update' method="POST">
                        {{csrf_field()}}
                        <fieldset>
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="control-group">
                              <!-- Email -->
                              <label class="control-label"  for="email">Email</label>
                              <div class="controls">
                                <input type="text" id="email" name="email" placeholder="" class="input-xlarge" value="{{ $user->email }}">
                              </div>
                            </div>
 
                            <div class="control-group">
                              <!-- E-mail -->
                              <label class="control-label" for="name">Name</label>
                              <div class="controls">
                                <input type="text" id="name" name="name" placeholder="" class="input-xlarge" value="{{ $user->name }}">
                              </div>
                            </div>
                         
                            <div class="control-group">
                                <label class="control-label" for="name">Role</label>
                                <div class="controls" style="padding-bottom: 20px">
                                    <label class="radio-inline"><input type="radio" name="role" value="admin" @if($user->role == "admin") checked @endif >Admin</label>
                                    <label class="radio-inline"><input type="radio" name="role" value="guest" @if($user->role == "guest") checked @endif >Guest</label>
                                </div>
                            </div>
 
                            <div class="control-group">
                              <!-- Button -->
                              <div class="controls">
                                <button class="btn btn-success">Update</button>
                              </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
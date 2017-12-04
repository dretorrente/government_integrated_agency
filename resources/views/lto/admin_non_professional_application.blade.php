@extends('admin.admin_layout')
@section('content')
<style>
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
    object-fit: cover;
}

#myImg:hover {opacity: 0.7;}

td.align-middle {
    vertical-align: middle !important;
}
.center {
    text-align: center;
}
</style>
<section class="content-header">
    <h1>LTO</h1>
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
                            <th>Request By</th>
                            <th>Status</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($non_professional_applications as $record)
                    <tr>
                        <td class="align-middle">{{ $record->email }}</td>
                        <td class="align-middle">{{ ucfirst($record->status) }}</td>
                        <td><a href="{{ URL::to($record->image) }}" target="__blank"><img id="myImg" src="{{ URL::to($record->image) }}" alt="Student Application" width="100" height="100"></a></td>
                        <td class="align-middle center">
                            @if($record->status == "pending") 
                               <a href="/land_transportation_office/accept_application/{{ $record->id }}" class="btn btn-success">Accept</a>
                               <a href="/land_transportation_office/decline_application/{{ $record->id }}" class="btn btn-danger">Decline</a>
                           @endif
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Request By</th>
                        <th>Status</th>
                        <th>Image</th>
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
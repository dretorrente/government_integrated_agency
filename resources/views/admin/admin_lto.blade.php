@extends('admin.admin_layout')
@section('content')
<section class="content-header">
    <h1>LTO</h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"></li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Request By</th>
                        <th>Details</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>asdasda</td>
                        <td>
                            <ul>
                                <li><b>Title: </b>asdfasdfas</li>
                                <li><b>Subtitle: </b>asdfasdfas</li>
                                <li><b>Description: </b>fasdfasdfa</li>
                                <li><b>Year: </b>adfasfasf</li>
                                <li><b>Researchers: <i>asdfasdff</i> | </b></li>
                                <li><b>Advisers: <i>dasda</i> | </b></li>
                            </ul>
                        </td>
                        <td>
                            <form method="post" action="/admin/add/">
                                <button type="submit" value="accept" name="btn" class="btn btn-success btn-flat">Appove</button>
                                <button type="submit" value="DELETE" name="_method" class="btn btn-danger btn-flat">Delete</button>
                            </form>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Request By</th>
                        <th>Details</th>
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
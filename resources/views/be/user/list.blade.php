@extends('be.layouts.index')
@section('title')
list
@endsection
@section('content')

<!-- START PAGE CONTENT-->
<div class="page-content fade-in-up">

    @include('msg')
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Data Table</div>
        </div>
        <div class="ibox-body" style="overflow-x:auto;">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>image</th>
                        <th>FullName</th>
                        <th>Staff Code</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Birthday</th>
                        <th>day in</th>
                        <th>Vacation</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>image</th>
                        <th>FullName</th>
                        <th>Staff Code</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Birthday</th>
                        <th>day in</th>
                        <th>Vacation</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img width="50px" src="upload/users/{{$user->image}}" alt=""></td>
                        <td>{{$user->fullname}}</td>
                        <td>{{$user->staff_code}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->lead}}</td>
                        <td>{{$user->birthday}}</td>
                        <td>{{$user->dayin}}</td>
                        <td>{{$user->vacation}}</td>
                        <td>{{$user->department->name}}</td>
                        <td>{{$user->position->name}}</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/users/edit/{{$user->id}}">Edit</a></td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a data-toggle="modal"
                                data-target="#myModal" href="admin/users/delete/{{$user->id}}"> Delete</a></td>
                                
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog" style="padding-top: 90px;">
                        <div class="modal-dialog">
    
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Xóa nhân viên</p>
                                    <a class="btn btn-danger" href="admin/users/delete/{{$user->id}}">Xóa</a>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
    
                        </div>
                    </div>
                    </tr>
                    @endforeach
                </tbody>


            </table>
        </div>
    </div>
</div>
<!-- END PAGE CONTENT-->
@endsection
@section('script')

<script src="assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10,
            //"ajax": './assets/demo/data/table_data.json',
            /*"columns": [
                { "data": "name" },
                { "data": "office" },
                { "data": "extn" },
                { "data": "start_date" },
                { "data": "salary" }
            ]*/
        });
    })
</script>
@endsection
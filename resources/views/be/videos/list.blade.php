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
            <div class="ibox-title">Tin tức HR</div>
        </div>
        <div class="ibox-body" style="overflow-x:auto;">
            <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>image</th>
                        <th>title</th>
                        <th>Description</th>
                        <th>Content</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>id</th>
                        <th>image</th>
                        <th>title</th>
                        <th>Description</th>
                        <th>Content</th>
                        <th>action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($videos as $video)
                    <tr>
                        <td>{{$video->id}}</td>
                        <td><img width="100px" src="upload/videos/{{$video->image}}" alt="">video</td>
                        <td>{{substr($video->title,0,100)}}</td>
                        <td>{{substr($video->description,0,100)}} ...</td>
                        <td>{{substr($video->content,0,100)}} ....</td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a
                                href="admin/videos/edit/{{$video->id}}">Edit</a> <br><i
                                class="fa fa-trash-o  fa-fw"></i><a href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal"
                                data-id="{{ $video->id }}" data-title="{{ $video->title }}"> Delete</a></td>
                                
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xóa Video</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="modal-message">Bạn chắc chắn muốn xóa thí sinh này?</p>
                            <form method="post" action="{{route('destroy_video')}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="id">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-success">Xác nhận</button>
                            </form>

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

<script>
        $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var title = button.data('title') // Extract info from data-* attributes
            var id = button.data('id')
            var modal = $(this)
            modal.find('#id').val(id);
            modal.find('#modal-message').html('Bạn chắc chắn muốn xóa thí sinh - ' + title + id +'?');
          })
    </script>
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
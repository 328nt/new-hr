@extends('be.layouts.index')
@section('title')
edit video {{$videos->title}}
@endsection
@section('content')
@include('msg')
<div class="col-md-12">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Sửa Video</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <form action="admin/videos/edit/{{$videos->id}}" method="post" enctype="multipart/form-data"
                class="form-horizontal" id="form-sample-1" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">title</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="title" type="text" value="{{$videos->title}}"
                            placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">description</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="description" type="text" value="{{$videos->description}}"
                            placeholder="Description">
                    </div>
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <textarea id="summernote" rows="5" value="" name="content">{{$videos->content}}</textarea>
                </div>
                
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">link</label>
                        <div class="col-sm-10">
                            <input class="form-control" name="link" type="text" value="{{$videos->link}}"
                                placeholder="Description">
                        </div>
                    </div>
                <div class="form-group row">
                    <div class="col-sm-10 ml-sm-auto">
                        <button class="btn btn-info" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
{{-- <div class="col-md-12">
    Comment
    <div class="ibox-body" style="overflow-x:auto;">
        <table class="table table-striped table-bordered table-hover" id="example-table" cellspacing="0"
            width="100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>User</th>
                    <th>Content</th>
                    <th>date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>id</th>
                    <th>User</th>
                    <th>Content</th>
                    <th>date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($videos->comments as $cm)
                <tr>
                    <td>{{$cm->id}}</td>
<td>{{$cm->user->name}}</td>
<td>{{$cm->content}}</td>
<td>{{$cm->created_at}}</td>
<td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/comment/edit/{{$cm->id}}">Edit</a></td>
<td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/delete/{{$cm->id}}"> Delete</a></td>
</tr>
@endforeach
</tbody>
</table>
</div>
</div> --}}
@endsection
@section('script')
<script type="text/javascript">
    $(function() {
        $('#summernote').summernote();
        $('#summernote_air').summernote({
            airMode: true
        });
    });
</script>
@endsection
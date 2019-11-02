@extends('be.layouts.index')
@section('title')
add form
@endsection
@section('content')
@include('msg')
<div class="row">
        <div class="col-md-12">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Thêm Form</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                            <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form action="{{route('add_form')}}" method="post" enctype="multipart/form-data" class="form-horizontal"
                            id="form-sample-1" novalidate="novalidate">
                            {{ csrf_field() }}
            
                            
                            <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Departmenr</label>
                                    <div class="col-sm-10">
                                            <select name="id_department" class="form-control">
                                                @foreach ($departments as $department)
                                                <option value="{{$department->id}}">{{$department->name}} </option>
                                                @endforeach
                                            </select>
                                            </div>
                                </div>
                                <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Type</label>
                                        <div class="col-sm-10">
                                                <select name="id_procedure" class="form-control">
                                                    @foreach ($procedures as $procedure)
                                                    <option value="{{$procedure->id}}">{{$procedure->name}} </option>
                                                    @endforeach
                                                </select>
                                                </div>
                                    </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">name</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="name" type="text" placeholder="name">
                                </div>
                            </div>
            
                            <div class="form-group">
                                <label>Content</label>
                                <textarea id="summernote" rows="5" name="content" placeholder="Content"></textarea>
                            </div>
            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">file</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="file" type="file">
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
</div>
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


@extends('be.layouts.index')
@section('title')
add
@endsection
@section('content')
@include('msg')
<div class="col-md-8">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Thêm Tin tức</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="ibox-body">
        <form action="admin/news/edit/{{$news->id}}"  method="post" enctype="multipart/form-data" class="form-horizontal" id="form-sample-1" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="form-control-label">Category</label>
                    <select name="id_category" class="form-control select2_demo_1">
                        @foreach ($categories as $category)
                        <option
                        @if ($news->category->id == $category->id)
                            {{'selected'}}
                        @endif
                        value="{{$category->id}}">{{$category->name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">title</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="title" type="text" value="{{$news->title}}" placeholder="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">description</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="description" type="text" value="{{$news->description}}" placeholder="Description">
                    </div>
                </div>
                
                <div class="form-group">
                        <label>Content</label>
                        <textarea id="summernote"  rows="5" value="" name="content">{{$news->content}}</textarea>
                    </div>
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
                        <img width="200px" src="upload/news/{{$news->image}}" alt="">
                        <div class="col-sm-10">
                            <input class="form-control" name="image" type="file">
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


@extends('be.layouts.index')
@section('title')
list
@endsection
@section('content')

@include('msg')
<div class="col-md-8">
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Thêm nhân viên</div>
            <div class="ibox-tools">
                <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
            </div>
        </div>
        <div class="ibox-body">
            <form action="{{route('add_user')}}"  method="post" enctype="multipart/form-data" class="form-horizontal" id="form-sample-1" novalidate="novalidate">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Fullname</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="fullname" type="text" placeholder="Full Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="email" type="text" placeholder="Email address">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Phone</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="phone" type="text" placeholder="Phone number">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="password" type="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Re-Pasword</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="password" placeholder="Re-Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Staff Code</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="staff_code" type="number" name="number">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Vacation</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="vacation" type="number">
                    </div>
                </div>
                <div class="form-group row" id="date_1">
                    <div class="col-md-6">
                        <label class="font-normal">Birthday</label>
                        <div class="input-group date">
                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" name="birthday" type="text" value="04/21/2017">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="font-normal">Day in</label>
                        <div class="input-group date">
                            <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                            <input class="form-control" name="dayin" type="text" value="04/12/2017">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Department</label>
                    <select name="id_department" class="form-control select2_demo_1">
                        @foreach ($departments as $de)
                        <option value="{{$de->id}}">{{$de->name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-control-label">Position</label>
                    <select name="id_position" class="form-control select2_demo_1">
                        @foreach ($positions as $po)
                        <option value="{{$po->id}}">{{$po->name}} </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                        <label class="form-control-label">Role</label>
                        <select name="role" class="form-control select2_demo_1">
                            @foreach ($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}} </option>
                            @endforeach
                        </select>
                    </div>
                
                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Image</label>
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

<script src="assets/js/scripts/form-plugins.js" type="text/javascript"></script>
<script type="text/javascript">
    $("#form-sample-1").validate({
        rules: {
            name: {
                minlength: 2,
                required: !0
            },
            email: {
                required: !0,
                email: !0
            },
            url: {
                required: !0,
                url: !0
            },
            number: {
                required: !0,
                number: !0
            },
            min: {
                required: !0,
                minlength: 3
            },
            max: {
                required: !0,
                maxlength: 4
            },
            password: {
                required: !0
            },
            password_confirmation: {
                required: !0,
                equalTo: "#password"
            }
        },
        errorClass: "help-block error",
        highlight: function(e) {
            $(e).closest(".form-group.row").addClass("has-error")
        },
        unhighlight: function(e) {
            $(e).closest(".form-group.row").removeClass("has-error")
        },
    });
</script>
<script src="assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
@endsection
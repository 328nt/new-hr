@if(count($errors) > 0)
<div class="alert alert-danger">
    @foreach($errors->all() as $err)
    {{ $err }} <br>
    @endforeach
</div>
@endif

@if(session('msg'))
<div class="alert alert-success">
    {{ session('msg') }}
</div>
@endif
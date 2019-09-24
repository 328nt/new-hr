<form action="{{route('add')}}" method="post">
{{ csrf_field() }}
<label for="">Department Name</label>
<input value="" name="name">
<button type="submit">add</button>
<button type="reset">reset</button>
</form>
@include('msg')
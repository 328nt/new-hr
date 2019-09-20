<form action="" method="post">
    {{ csrf_field() }}
    <label for="">Department Name</label>
    <input value="{{$departments->name}} " name="name" >
    <button type="submit">edit</button>
    <button type="reset">reset</button>
    </form>
@foreach ($departments as $de)
        <td>{{$de->name}}</td>
        <td><a href="{{edit/{{$de->id}}}}">edit</a></td>
        <td><a href="delete/{{$de->id}}">delete</a></td>
    @endforeach
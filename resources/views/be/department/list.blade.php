<table>
    <tr>abc</tr>
    <tr>cd</tr>
    @foreach ($departments as $de)
        {{$de->name}}
    @endforeach
</table>
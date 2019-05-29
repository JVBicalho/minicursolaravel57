<form action="{{route('/produtos')}}" method="post">
    @crsf
    <input type="text" name="name" id="name">
    <input type="text" name="descricao" id="descricao">
    <input type="file" name="img" id="img">
    <button type="submit"></button>
</form>
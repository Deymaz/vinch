<form action="{{ route('createCategory') }}" method="post">
    @csrf
    <label for="name">Имя категории</label>
    <input type="text" name="name" id="name"><br>
    <input type="submit" value="Сохранить">
</form>
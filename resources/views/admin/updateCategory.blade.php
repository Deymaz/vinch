<form action="{{ route('updateCategory', ['id' => $category->id]) }}" method="post">
    @csrf
    <label for="name">Имя категории</label>
    <input type="text" name="name" id="name" value="{{ $category->name }}"><br>
    <input type="submit" value="Сохранить">
</form>
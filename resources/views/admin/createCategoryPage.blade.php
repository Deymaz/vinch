<form action="{{ route('createCategory') }}" method="post">
    @csrf
    <label for="name">Имя категории</label>
    <input type="text" name="name" id="name"><br>
    <select type="radio" name="parent_category_id" id="parent_category_id">
        <option>Без категории</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="submit" value="Сохранить">
</form>

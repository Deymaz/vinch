<form action="{{ route('createProduct') }}" method="post">
    @csrf
    <select type="radio" name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <label for="name_ru">Имя товара на русском</label>
    <input type="text" name="name_ru" id="name_ru"><br>
    <label for="description_ru">Описание на русском</label>
    <input type="text" name="description_ru" id="description_ru"><br>
    <hr>
    <label for="name_ua">Имя товара на украинском</label>
    <input type="text" name="name_ua" id="name_ua"><br>
    <label for="description_ua">Описание на украинском</label>
    <input type="text" name="description_ua" id="description_ua"><br>
    <hr>
    <label for="name_en">Имя товара на английском</label>
    <input type="text" name="name_en" id="name_en"><br>
    <label for="description_en">Описание на английском</label>
    <input type="text" name="description_en" id="description_en"><br>
    <input type="submit" value="Сохранить">
</form>

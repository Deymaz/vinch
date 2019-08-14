<form action="{{ route('createProduct', [app()->getLocale()]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <select type="radio" name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <label for="name">Имя продукции</label>
    <input type="text" name="name" id="name"><br>
    <label for="file_url">Загрузить картинку</label>
    <input type="file" name="file_url" id="file_url"><br>
    <label for="description_ru">Описание на русском</label>
    <input type="text" name="description_ru" id="description_ru"><br>
    <hr>
    <label for="description_ua">Описание на украинском</label>
    <input type="text" name="description_ua" id="description_ua"><br>
    <hr>
    <label for="description_en">Описание на английском</label>
    <input type="text" name="description_en" id="description_en"><br>
    <input type="submit" value="Сохранить">
    @error('file_url')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>

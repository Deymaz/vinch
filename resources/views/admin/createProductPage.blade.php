@include('header')

<form action="{{ route('createProduct', [app()->getLocale()]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <select type="radio" name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <label for="name">Имя продукции</label>
    <input type="text" size="30" name="name" id="name"><br>
    <label for="file_url">Загрузить картинку</label>
    <div class="custom-file">
        <input type="file" class="custom-file-control" name="file_url" id="file_url"><br>
    </div>
    <div class="textarea-admin">
        <label for="description_ru">Описание на русском</label>
        <textarea class="form-control" rows="5" cols="10" name="description_ru" id="description_ru"></textarea><br>
    </div>

    <div class="textarea-admin">
        <label for="description_ua">Описание на украинском</label>
        <textarea class="form-control" rows="5" cols="10" name="description_ua" id="description_ua"></textarea><br>
    </div>
    <div class="textarea-admin">
        <label for="description_en">Описание на английском</label>
        <textarea class="form-control" rows="5" cols="10" name="description_en" id="description_en"></textarea><br>
    </div>
    <input type="submit" class="margin-left-25 btn btn-success" value="Сохранить">
    @error('file_url')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>

@include('header')

<form action="{{ route('updateProduct', [app()->getLocale(), $product->id]) }}" method="post"
      enctype="multipart/form-data">
    @csrf
    <select type="radio" name="category_id" id="category_id">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }} ()</option>
        @endforeach
    </select>
    <label for="name">Имя продукции</label>
    <input type="text" name="name" size="30" id="name" value="{{ $product->name }}"><br>
    <div>
        <img src="{{ asset("storage/$product->file_url") }}" style="width: 10%; height: 10%;">
    </div>
    <div class="custom-file">
        <label for="file_url">Загрузить картинку</label>
        <input type="file" class="custom-file-control" name="file_url" id="file_url"><br>
    </div>
    <div class="textarea-admin">
        <label for="description_ru">Описание на русском</label>s
        <textarea class="form-control" rows="5" cols="10" name="description_ru" id="description_ru">{{ $product->description_ru }}</textarea><br>
    </div>
    <div class="textarea-admin">
        <label for="description_ua">Описание на украинском</label>
        <textarea class="form-control" rows="5" cols="10"name="description_ua" id="description_ua">{{ $product->description_ru }}</textarea><br>
    </div>
    <div class="textarea-admin">
        <label for="description_en">Описание на английском</label>
        <textarea class="form-control" rows="5" cols="10" name="description_en" id="description_en" >{{ $product->description_ru }}</textarea><br>
    </div>
    <input type="submit" class="margin-left-25 btn btn-success" value="Сохранить">
    @error('file_url')
    <div>{{ $message }}</div>
    @enderror
</form>

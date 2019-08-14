<form action="{{ route('createCategory', [app()->getLocale()]) }}" method="post">
    @csrf
    <label for="name">Имя категории</label>
    <input type="text" name="name" id="name"><br>
    <select type="radio" name="parent_category_id" id="parent_category_id">
        <option value="">Без категории</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <input type="submit" class="btn btn-primary" value="Сохранить">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('parent_category_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>

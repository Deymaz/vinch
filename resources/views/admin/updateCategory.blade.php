<form action="{{ route('updateCategory', [app()->getLocale(), 'id' => $currentCategory->id]) }}" method="post">
    @csrf
    <label for="name">Имя категории</label>
    <input type="text" name="name" id="name" value="{{ $currentCategory->name }}"><br>
    <select type="radio" name="parent_category_id" id="parent_category_id">
        <option value="">Без категории</option>
        @foreach($categories as $category)
            @if($currentCategory->parent_category_id === $category->id)
                <option selected="selected" value="{{ $category->id }}">{{ $category->name }}</option>
            @elseif($currentCategory->id === $category->id)
            @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endif
        @endforeach
    </select>
    <input type="submit" value="Сохранить">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    @error('parent_category_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>

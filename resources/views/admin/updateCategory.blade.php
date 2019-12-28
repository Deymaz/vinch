@include('header')

<div class="wrapper">
    <div class="content">
        <form action="{{ route('updateCategory', [app()->getLocale(), 'id' => $currentCategory->id]) }}" method="post"
              enctype="multipart/form-data">
            @csrf
            <label for="name">Имя категории</label>
            <input type="text" size="30" name="name" id="name" value="{{ $currentCategory->name }}"><br>
            <label for="img_url">Загрузить картинку</label>
            <div class="custom-file">
                <input type="file" class="custom-file-control" name="img_url" id="img_url"><br>
            </div>
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
            <input type="submit" class="btn btn-success" value="Сохранить">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </form>
    </div>
</div>
@include('footer')


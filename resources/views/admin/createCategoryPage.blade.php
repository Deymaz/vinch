@include('header')

<div class="wrapper">
    <div class="content">
        <form action="{{ route('createCategory', [app()->getLocale()]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <label for="name">Имя категории</label>
            <input type="text" name="name" size="30" id="name"><br>
            <label for="img_url">Загрузить картинку</label>
            <div class="custom-file">
                <input type="file" class="custom-file-control" name="img_url" id="img_url"><br>
            </div>
            <select type="radio" name="parent_category_id" id="parent_category_id">
                <option value="">Без категории</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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


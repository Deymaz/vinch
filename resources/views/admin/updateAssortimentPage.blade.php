@include('header')

<div class="wrapper">
    <div class="content">
        <form action="{{ route('updateAssortiment', [app()->getLocale(), $assortiment->id]) }}" method="POST"  enctype="multipart/form-data">
            @csrf

            <label class="content_label" for="content">Загрузить файл</label>
            <input type="file"  name="content" id="content"><br>

            <input type="submit" class="margin-left-25 btn btn-success" value="Отправить">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </form>
    </div>
</div>

@include('footer')

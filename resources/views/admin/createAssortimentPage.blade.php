@include('header')

<form action="{{ route('createAssortiment', [app()->getLocale(), $id]) }}" method="POST">
    @csrf
    @foreach($fieldList as $field => $name)
        <div class="small-padding-bottom">
            <div style="min-width: 200px" class="float-left">{{ $name }}</div>
            <input type="text" size="30" id="{{ $field }}" name="{{ $field }}">
        </div>
    @endforeach
    <input type="submit" class="margin-left-25 btn btn-success" value="Сохранить">
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
</form>

@include('footer')

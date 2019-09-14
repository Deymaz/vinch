@include('header')

<form action="{{ route('updateAssortiment', [app()->getLocale(), $assortiment->id]) }}" method="POST">
    @csrf
    @foreach($fieldList as $field => $name)
        <div class="small-padding-bottom">
            <div style="min-width: 200px" class="float-left">{{ $name }}</div>
            <input type="text" size="30" id="{{ $field }}" name="{{ $field }}" value="{{ $assortiment->{$field} }}">
        </div>
    @endforeach
    <input type="submit" class="margin-left-25 btn btn-success" value="Сохранить">
</form>

@include('footer')

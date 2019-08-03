<form action="{{ route('updateAssortiment', $assortiment->id) }}" method="POST">
    @csrf
    @foreach($fieldList as $field => $name)
        <label for="{{ $field }}">{{ $name }}</label>
        <input type="text" id="{{ $field }}" name="{{ $field }}" value="{{ $assortiment->{$field} }}"><br>
    @endforeach
    <input type="submit" value="Сохранить">
</form>

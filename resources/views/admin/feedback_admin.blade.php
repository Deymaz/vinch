@include('header')

<p>Имя: {{$feedback->name}}</p>
<p>Телефон: {{$feedback->phone}}</p>
<p>Почта: {{$feedback->email}}</p>
<p>Вопрос: {{$feedback->question}}</p>


<form method="post" action="{{route("feedbackStatus", [app()->getLocale(), $feedback->id])}}">
    @csrf
    @if ($feedback->is_processed === 0)
        <input type="submit" class="btn btn-success" value="Отметить выполненным">
    @else
        <input type="submit" class="btn btn-info" value="Вернуть в работу">
    @endif
</form>


@include('footer')


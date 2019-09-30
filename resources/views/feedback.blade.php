@include('header')

<form action="{{route('feedbackSubmit', app()->getLocale())}}" method="POST">
    @csrf
    <div class="feedback-container">
        <div>
            <label for="name" class="feedback_label">Ваше имя</label>
            <input class="" type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email адрес</label>
            <input class="" type="text" name="email" id="email">
        </div>

        <div>
            <label for="phone">Телефон</label>
            <input class="" type="text" name="phone" id="phone">
        </div>

        <div>
            <p>Ваш вопрос</p>
            <textarea class="" type="text" name="question" id="question" rows="10" cols="45"></textarea>
        </div>
        <input type="submit" class="margin-left-25 btn btn-success" value="Сохранить">
    </div>
</form>
@include('footer')

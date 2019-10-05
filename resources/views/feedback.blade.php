@include('header')

<form action="{{route('feedbackSubmit', app()->getLocale())}}" method="POST">
    @csrf
    <div class="feedback-container">
        <div>
            <label for="name" class="feedback_label">{{__('messages.your_name')}}</label>
            <input class="" type="text" name="name" id="name">
        </div>
        <div>
            <label for="email" class="feedback_label">{{__('messages.your_email')}}</label>
            <input class="" type="text" name="email" id="email">
        </div>

        <div>
            <label for="phone" class="feedback_label">{{__('messages.your_phone')}}</label>
            <input class="" type="text" name="phone" id="phone">
        </div>

        <div>
            <p>{{__('messages.your_message')}}</p>
            <textarea class="" type="text" name="question" id="question" rows="5" cols="70"></textarea>
        </div>
        <input type="submit" class="margin-left-25 small-margin-top btn btn-success" value="{{__('messages.send_btn')}}">
    </div>
</form>

@include('footer')

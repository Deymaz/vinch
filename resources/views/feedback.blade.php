@include('header')
<div class="wrapper" >
    <div class="content">
        <form id="contact" action="" method="post" action="{{route('feedbackSubmit', app()->getLocale())}}">
            @csrf
            <fieldset>
                <input placeholder="{{__('messages.your_name')}}" type="text" tabindex="1" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="{{__('messages.your_email')}}" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input placeholder="{{__('messages.your_phone')}}" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">{{__('messages.send_btn')}}</button>
            </fieldset>
        </form>
    </div>
</div>
@include('footer')

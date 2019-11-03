@include('header')

<ul>
    @foreach ($feedbacks as $feedback)
        <li>
            <div>
                <div class="float-left small-padding-right">
                    <a href="{{route('feedback_admin', [app()->getLocale(), 'id' => $feedback->id])}}"> {{$feedback->id}}</a>
                </div>
                <div class="float-left small-padding-right">{{$feedback->name}}</div>
                <div class="float-left small-padding-right">{{$feedback->email}}</div>
                <div class="float-left small-padding-right">{{$feedback->phone}}</div>
                <div class="float-left small-padding-right">{{$feedback->email}}
                </div>
            </div>
        </li>
    @endforeach
</ul>

@include('footer')


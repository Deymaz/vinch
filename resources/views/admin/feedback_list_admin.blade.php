@include('header')

<div class="wrapper">
    <div class="content">
        <table class="margin-left-25">
            <tr>
                <th class="padding-right"><b>ID</b></th>
                <th class="padding-right"><b>Имя</b></th>
                <th class="padding-right"><b>Почта</b></th>
                <th class="padding-right"><b>Телефон</b></th>
                <th class="padding-right"><b>Заявка обработана</b></th>
            </tr>
            @foreach ($feedbacks as $feedback)
                <tr>
                    <td class="padding-right">
                        <a href="{{route('feedback_admin', [app()->getLocale(), 'id' => $feedback->id])}}"> {{$feedback->id}}</a>
                    </td>
                    <td class="padding-right">{{$feedback->name}}</td>
                    <td class="padding-right">{{$feedback->email}}</td>
                    <td class="padding-right">{{$feedback->phone}}</td>
                    @if ($feedback->is_processed)
                        <td class="padding-right">&#10003;</td>
                    @endif
                </tr>
            @endforeach
        </table>
    </div>
</div>

@include('footer')


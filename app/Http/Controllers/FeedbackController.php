<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Http\Requests\CreateFeedbackRequest;
use App\Services\RequestToModelMapper;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Config;
use Illuminate\Http\RedirectResponse;

class FeedbackController
{
    /**
     * @return Factory|View
     */
    public function page()
    {
        return view('feedback');
    }

    /**
     * @param CreateFeedbackRequest $request
     *
     * @return RedirectResponse
     */
    public function submit(CreateFeedbackRequest $request)
    {
        $feedback = new Feedback();
        $data = $request->validated();
        RequestToModelMapper::map($feedback, $data);
        $feedback->save();

        return Redirect::route('feedback', Config::get('app.locale'));
    }
}

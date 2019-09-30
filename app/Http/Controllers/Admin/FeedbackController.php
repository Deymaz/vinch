<?php

namespace App\Http\Controllers\Admin;

use App\Feedback;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;

class FeedbackController
{
    public function list()
    {
        $feedbacks = Feedback::all();

        return view('admin.feedback_list_admin', ['locale' => Config::get('app.locale'), 'feedbacks' => $feedbacks]);
    }

    public function get(int $id)
    {
        $feedback = Feedback::find($id);

        return view('admin.feedback_admin', ['locale' => Config::get('app.locale'), 'feedback' => $feedback]);
    }

    public function changeStatus(int $id)
    {
        $feedback = Feedback::find($id);

        $isProcessed = (bool)$feedback->is_processed;
        $feedback->is_processed = !$isProcessed;
        $feedback->save();

        return Redirect::route('feedback_list_admin', [Config::get('app.locale')]);
    }
}

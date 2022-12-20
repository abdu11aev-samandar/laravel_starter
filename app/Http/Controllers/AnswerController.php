<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:manager');
    }

    public function create(Application $application)
    {
        if (!Gate::allows('answer-application', auth()->user())) {
            abort(403);
        }

        return view('answers.create', ['application' => $application]);
    }

    public function store(Application $application, Request $request)
    {
        if (!Gate::allows('answer-application', auth()->user())) {
            abort(403);
        }

        $request->validate(['body' => 'required']);

        $application->answer()->create([
            'body' => $request->body,
        ]);

        return redirect()->route('dashboard');
    }
}

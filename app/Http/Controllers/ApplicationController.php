<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreApplicationRequest;
use App\Jobs\SendEmailJob;
use App\Models\Application;
use Carbon\Carbon;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('applications.index')->with([
            'applications' => auth()->user()->applications()->paginate(5),
        ]);
    }

    public function store(StoreApplicationRequest $request)
    {
        if ($this->checkDate()) {
            return redirect()->back()->with('error', 'You can create only 1 application a day');
        }

        if ($request->hasFile('file')) {
            $name = $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs(
                'files',
                $name,
                'public'
            );
        }

        $application = Application::create([
            'user_id' => auth()->user()->id,
            'subject' => $request->subject,
            'message' => $request->message,
            'file_url' => $path ?? null,
        ]);

        dispatch(new SendEmailJob($application));

        return redirect()->back();
    }

    protected function checkDate()
    {
        if (auth()->user()->applications()->latest()->first() == null) {
            return false;
        }

        $last_application = auth()->user()->applications()->latest()->first();
        $last_app_date = Carbon::parse($last_application->created_at)->format('Y-m-d');
        $today = Carbon::now()->format('Y-m-d');

        if ($last_app_date == $today) {
            return true;
        }
    }
}

<?php

namespace App\Http\Controllers\Doctor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\ScheduleService;
use Illuminate\Support\Facades\Auth;

class DoctorAvailabilityContoller extends Controller
{

    public function __construct(private ScheduleService $scheduleService)
    {
        $this->scheduleService = $scheduleService;
    }

    public function create()
    {
        return view('doctor.available-timings', [
            'scheduleService' => $this->scheduleService
        ]);
    }

    public function store(Request $request)
    {
        $schedule = $this->scheduleService->create($request);

        if($schedule) {
            return back()->with('notify', ['Schedule created', 'success']);
        }
        return back()->with('notify', ['An error has occur', 'error']);
    }

    public function update()
    {
        
    }
}

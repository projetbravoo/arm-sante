<?php

namespace App\Services;

use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleService {

    public function create(Request $request)
    {
        return Doctor::find(Auth::user()->userable->id)->schedule()->create([
            'day' => (int)$request->slot_day,
            'start_times' => json_encode($request->start_time),
            'end_times' => json_encode($request->end_time)
        ]);
    }

    public function getSchedule(int $day): Schedule|null
    {
        return Schedule::whereBelongsTo(Auth::user()->userable)->where('day', $day)->first();
    }

}
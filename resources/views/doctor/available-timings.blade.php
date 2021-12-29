@extends('layouts.dashboard')

@section('content')
<div class="col-md-7 col-lg-8 col-xl-9">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Schedule Timings</h4>
                    <div class="profile-box">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Timing Slot Duration</label>
                                    <select class="select form-control">
                                        <option>-</option>
                                        <option>15 mins</option>
                                        <option>30 mins</option>
                                        <option>45 mins</option>
                                        <option>1 Hour</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card schedule-widget mb-0">
                                    <div class="schedule-header">
                                        <div class="schedule-nav">
                                            <ul class="nav nav-tabs nav-justified">
                                                <li class="nav-item">
                                                    <a class="nav-link {{ date('N') == '7' ? 'active' : '' }}" data-toggle="tab" href="#slot_sunday">Sunday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link {{ date('N') == '1' ? 'active' : '' }}" data-toggle="tab" href="#slot_monday">Monday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link {{ date('N') == '2' ? 'active' : '' }}" data-toggle="tab" href="#slot_tuesday">Tuesday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link {{ date('N') == '3' ? 'active' : '' }}" data-toggle="tab" href="#slot_wednesday">Wednesday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link {{ date('N') == '4' ? 'active' : '' }}" data-toggle="tab" href="#slot_thursday">Thursday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link {{ date('N') == '5' ? 'active' : '' }}" data-toggle="tab" href="#slot_friday">Friday</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link {{ date('N') == '6' ? 'active' : '' }}" data-toggle="tab" href="#slot_saturday">Saturday</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="tab-content schedule-cont">
                                        <div id="slot_sunday" class="tab-pane fade {{ date('N') == '7' ? 'show active' : '' }}" data-id="7">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Time Slots</span>
                                            @if ($schedule = $scheduleService->getSchedule(7))
                                                <a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
                                            </h4>
                                                <div class="doc-times">
                                                    @foreach (json_decode($schedule->start_times) as $index => $start_time)
                                                        <div class="doc-slot-list">
                                                            {{ $start_time }} - {{ json_decode($schedule->end_times)[$index] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                            </h4>
                                            <p class="text-muted mb-0">Not Available</p>
                                            @endif
                                        </div>


                                        <div id="slot_monday" class="tab-pane fade {{ date('N') == '1' ? 'show active' : '' }}" data-id="1">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Time Slots</span>
                                            @if ($schedule = $scheduleService->getSchedule(1))
                                                <a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
                                            </h4>
                                                <div class="doc-times">
                                                    @foreach (json_decode($schedule->start_times) as $index => $start_time)
                                                        <div class="doc-slot-list">
                                                            {{ $start_time }} - {{ json_decode($schedule->end_times)[$index] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                            </h4>
                                            <p class="text-muted mb-0">Not Available</p>
                                            @endif
                                        </div>


                                        <div id="slot_tuesday" class="tab-pane fade {{ date('N') == '2' ? 'show active' : '' }}" data-id="2">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Time Slots</span>
                                            @if ($schedule = $scheduleService->getSchedule(2))
                                                <a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
                                            </h4>
                                                <div class="doc-times">
                                                    @foreach (json_decode($schedule->start_times) as $index => $start_time)
                                                        <div class="doc-slot-list">
                                                            {{ $start_time }} - {{ json_decode($schedule->end_times)[$index] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                            </h4>
                                            <p class="text-muted mb-0">Not Available</p>
                                            @endif
                                        </div>


                                        <div id="slot_wednesday" class="tab-pane fade {{ date('N') == '3' ? 'show active' : '' }}" data-id="3">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Time Slots</span>
                                            @if ($schedule = $scheduleService->getSchedule(3))
                                                <a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
                                            </h4>
                                                <div class="doc-times">
                                                    @foreach (json_decode($schedule->start_times) as $index => $start_time)
                                                        <div class="doc-slot-list">
                                                            {{ $start_time }} - {{ json_decode($schedule->end_times)[$index] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                            </h4>
                                            <p class="text-muted mb-0">Not Available</p>
                                            @endif
                                        </div>


                                        <div id="slot_thursday" class="tab-pane fade {{ date('N') == '4' ? 'show active' : '' }}" data-id="4">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Time Slots</span>
                                            @if ($schedule = $scheduleService->getSchedule(4))
                                                <a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
                                            </h4>
                                                <div class="doc-times">
                                                    @foreach (json_decode($schedule->start_times) as $index => $start_time)
                                                        <div class="doc-slot-list">
                                                            {{ $start_time }} - {{ json_decode($schedule->end_times)[$index] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                            </h4>
                                            <p class="text-muted mb-0">Not Available</p>
                                            @endif
                                        </div>


                                        <div id="slot_friday" class="tab-pane fade {{ date('N') == '5' ? 'show active' : '' }}" data-id="5">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Time Slots</span>
                                            @if ($schedule = $scheduleService->getSchedule(5))
                                                <a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
                                            </h4>
                                                <div class="doc-times">
                                                    @foreach (json_decode($schedule->start_times) as $index => $start_time)
                                                        <div class="doc-slot-list">
                                                            {{ $start_time }} - {{ json_decode($schedule->end_times)[$index] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                            </h4>
                                            <p class="text-muted mb-0">Not Available</p>
                                            @endif
                                        </div>


                                        <div id="slot_saturday" class="tab-pane fade {{ date('N') == '6' ? 'show active' : '' }}" data-id="6">
                                            <h4 class="card-title d-flex justify-content-between">
                                                <span>Time Slots</span>
                                            @if ($schedule = $scheduleService->getSchedule(6))
                                                <a class="edit-link" data-toggle="modal" href="#edit_time_slot"><i class="fa fa-edit mr-1"></i>Edit</a>
                                            </h4>
                                                <div class="doc-times">
                                                    @foreach (json_decode($schedule->start_times) as $index => $start_time)
                                                        <div class="doc-slot-list">
                                                            {{ $start_time }} - {{ json_decode($schedule->end_times)[$index] }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <a class="edit-link" data-toggle="modal" href="#add_time_slot"><i class="fa fa-plus-circle"></i> Add Slot</a>
                                            </h4>
                                            <p class="text-muted mb-0">Not Available</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<div class="modal fade custom-modal" id="add_time_slot">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Time Slots</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('doctor.availability.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="slot_day" id="slot_day" value="">
                    <div class="hours-info">
                        <div class="row form-row hours-cont">
                            <div class="col-12 col-md-10">
                                <div class="row form-row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Start Time</label>
                                            <input type="time" name="start_time[]" id="start_time" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <input type="time" name="end_time[]" id="end_time" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-more mb-3">
                        <a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
                    </div>
                    <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade custom-modal" id="edit_time_slot">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Time Slots</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('doctor.availability.update') }}" method="POST">
                    <div class="hours-info">
                        <div class="row form-row hours-cont">
                            <div class="col-12 col-md-10">
                                <div class="row form-row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Start Time</label>
                                            <input type="time" name="start_time[]" id="start_time" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>End Time</label>
                                            <input type="time" name="end_time[]" id="end_time" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="add-more mb-3">
                        <a href="javascript:void(0);" class="add-hours"><i class="fa fa-plus-circle"></i> Add More</a>
                    </div>
                    <div class="submit-section text-center">
                        <button type="submit" class="btn btn-primary submit-btn">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php

namespace App\Http\Controllers;

use App\Models\ScheduledClass;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create () {
        $scheduledClasses = ScheduledClass::where('date_time', '>', now())
            ->with('classType', 'instructor')
            ->whereDoesntHave('members',function($query){
                $query->where('user_id', auth()->user()->id);
            })
            ->oldest()->get();
        return view('member.book')->with('scheduledClasses', $scheduledClasses);
    }

    public function store(Request $request) {
        auth()->user()->bookings()->attach($request->scheduled_class_id);

        return redirect()->route('booking.index');
    }

    public function index() {
        $bookings = auth()->user()->bookings()->where('date_time', '>', now())->get();

        return view('member.upcoming')->with('bookings',$bookings);
    }

    public function destroy(int $id) {
        auth()->user()->bookings()->detach($id);

        return redirect()->route('booking.index');
    }

}
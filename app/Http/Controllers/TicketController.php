<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sender;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required'
        ]);

        $sender = Sender::where('email', '=', $request->email)->first();

        if($sender === null) {
            Sender::create([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        $sender = Sender::where('email', '=', $request->email)->first();

        $work_time = 960;

        $due_date = now();

        while($work_time > 0)
        {
            if ($due_date->format('l') == "Saturday" or $due_date->format('l') == "Sunday") {
                $due_date = $due_date->addDay()->setHour(9)->setMinute(0);
            } else {
                if ($due_date->hour < 9) {
                    $due_date = $due_date->setHour(9)->setMinute(0);
                } else if ($due_date->hour >= 9 and $due_date->hour < 17) {
                    $end_of_day = Carbon::createFromFormat('m j H:i', "{$due_date->month} {$due_date->day} 17:00");
                    $diff = $due_date->diffInMinutes($end_of_day);
                    $due_date = $due_date->addMinutes($diff + 1);
                    $work_time = $work_time - $diff - 1;
                } else if (($due_date->hour == 17 and $due_date->minute > 0) or ($due_date->hour == 17 and $due_date->minute == 0 and $work_time > 0) or $due_date->hour > 17) {
                    $due_date = $due_date->addDay()->setHour(9)->setMinute(0);
                }
            }
        }

        if($work_time < 0) {
            $due_date->subMinutes(abs($work_time));
        }

        Ticket::create([
            'sender_id' => $sender->id,
            'subject' => $request->subject,
            'content' => $request->content,
            'due_date' => $due_date
        ]);

        return redirect()->route('index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

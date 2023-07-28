<?php

namespace App\Http\Controllers;

use App\Models\Sender;
use App\Models\Ticket;
use Illuminate\Http\Request;

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

        /*DB::table('senders')->insert([
            'name' => $request->name
        ])

        $sender = new Sender();
        $sender->name = $request->name;
        $sender->email = $request->email;
        $sender->save();*/

        /*Sender::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);*/

        Ticket::create([
            'sender_id' => 1,
            'subject' => $request->subject,
            'content' => $request->content,
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

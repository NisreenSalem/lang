<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContectMail;
use Illuminate\Support\Facades\Mail;


class SendMailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function recieveContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'required|string',
        ]);

        $content = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,


        ];

        // Mail::to('recipient@email.com')->send(new ContectMail($content));

        try {
            Mail::to('recipient@email.com')->send(new ContectMail($content));
            return "mail sent!";
        } catch (\Exception $e) {
            return "Failed to send mail. Error: " . $e->getMessage();
        }
        return "mail sent!";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

<?php

namespace App\Http\Controllers;

use App\Events\TicketCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
        $ticket = Cookie::get('ticket-customer');
        $ticketId = unserialize($ticket)->id ?? 'tt';
        return view('front.home', [
            'tid' => $ticketId
        ]);
    }
}
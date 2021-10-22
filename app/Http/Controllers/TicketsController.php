<?php

namespace App\Http\Controllers;

use App\Events\TicketCreated;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    public function index(Request $request)
    {
        $ticket = Cookie::get('ticket-customer');
        dd(unserialize($ticket)->id);
    }
    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id'
        ]);
        $ticket = Cookie::get('ticket-customer');
        if ($ticket) {
            return 'you already booked a ticket';
        }
        $user = DB::table('users')
            ->where('service_id', $request->post('service_id'))
            ->where('status', 'free')
            ->orderBy('id', 'asc')
            ->first();
        if ($user) {
            $request->merge([
                'user_id' => $user->id,
                'status' => 'proccessing'
            ]);
            User::where('id', $user->id)->update([
                'status' => 'busy'
            ]);
        }
        $customer = Customer::create($request->all());
        Cookie::queue('ticket-customer', serialize($customer), 60 * 8);
        $message = 'you created a ticket';
        event(new TicketCreated($customer, $message));
        session(['tid' => $customer->id]);
        return 'ticket created';
    }
}
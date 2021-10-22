<?php

namespace App\Http\Controllers;

use App\Events\TicketCreated;
use App\Models\Customer;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function changeStatus(Request $request, $id)
    {
        $user = User::with('customers')->findOrFail($id);
        if ($user->status == 'free') {
            $user->update([
                'status' => 'busy'
            ]);
            return 'Busy';
        } else {
            // $user->update([
            //     'status' => 'free'
            // ]);
            // $currentCustomer = $user
            //     ->load('customers')
            //     ->customers()
            //     ->where('service_id', $user->service_id)
            //     ->where('status', 'waiting')
            //     ->get();
            $user->customers()->update(['status' => 'done']);
            $service = Service::with('customers')->where('id', $user->service_id)->get();
            $currentCustomer = Customer::where('service_id', $user->service_id)
                ->where('status', 'waiting')->first();
            if ($currentCustomer) {
                $currCustomerModel = Customer::findOrFail($currentCustomer->id);
                $currCustomerModel->update([
                    'status' => 'proccessing',
                    'user_id' => $user->id
                ]);
                $message = 'your order in proccessing';
                event(new TicketCreated($currCustomerModel, $message));
                return 'serving';
            } else {
                return 'Serve';
            }
        }
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class TransferMoneyController extends Controller
{
    public function handleTransfer(Request $request)
    {

        /*
        * Note Well that we cannot control the sender since he's not connect, any edits in the html file can cause a security flaw!
        * Though, we can check if the edited html exists as as sender, but we cannot prevent the actual send!
        */
        $sender   = $request->sender;
        $reciever = $request->email;
        $amount   = $request->amount;

        // 1. does the reciever exists?
        $reciever = Customers::where('mail', $reciever)->first();
        $sender   = Customers::where('id', $sender)->first();

        if ($reciever) {
            if ($reciever->mail == $sender->mail) {
                return back()->with('error', 'you cannot send to yourself!');
            }

            if ($sender->balance >= $amount) {
                $sender->decrement('balance', $amount);
                $reciever->increment('balance', $amount);
                return redirect()->route('customersTable.index')->with('message', 'your operation was successfuly done');
            }

            return back()->with('error', 'you dont have enough money!');
        }

        return back()->with('error', 'customer does not exist!');

        // 2. does the sender has enough money?
        // 3. if so, send it
    }
}

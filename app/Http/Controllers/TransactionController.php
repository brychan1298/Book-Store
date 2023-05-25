<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function store(Request $request){
        Transaction::create([
            "user_id" => $request->user_id,
            "book_id" => $request->book_id,
            "transaction_date" => date(now())
        ]);

        return redirect($request->user_id);
    }

    public function index($id){
        $transactions = Transaction::where("user_id","=",$id)->get(); // CARI TRANSAKSI YANG SUDAH DILAKUKAN OLEH USER YANG SEDANG AKTIF
        $user = User::find($id);

        return view("transaction", compact("transactions","user"));
    }
}

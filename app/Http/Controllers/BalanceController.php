<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Income;
use App\Models\Expense;
use App\Models\ExchangeRate;


class BalanceController extends Controller
{
    public function totalBalance()
    {
        $exchange_rate = ExchangeRate::where('currency','usd-riel')->first();
        $user = Auth::user();
        if($user != null){
        $income_usd = Income::all()->sum('amount-usd');
        $income_riel = Income::all()->sum('amount-riel');
        $expense_usd = Expense::all()->sum('amount-usd');
        $expense_riel = Expense::all()->sum('amount-riel');
            return response()->json([
                'total-income-usd'=>$income_usd ,
                'total-income-riel'=>$income_riel ,
                'total-income-as-usd'=>($income_riel/$exchange_rate->rate) + $income_usd,
                'total-expense-usd'=>$expense_usd ,
                'total-expense-riel'=>$expense_riel ,
                'total-expense-as-usd'=>($expense_riel/$exchange_rate->rate) + $expense_usd,
                'Final-Balance-as-usd'=>(($income_riel/$exchange_rate->rate) + $income_usd) - (($expense_riel/$exchange_rate->rate) + $expense_usd)
            ],200);
        }
    }
}

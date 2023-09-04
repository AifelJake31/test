<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;

class ExpenseController extends Controller
{
    // 
    public function index()
    {
        $expenses = Expense::find(1);
        return view('expenses.index', compact('expenses'));
    }

    public function create()
{
    return view('expenses.create');
}

public function store(Request $request) 
{
    $expenses = $request->validate([
        'account' => 'required|string',
        'category' => 'required|string',
        'amount' => 'required|integer',
        'note' => 'nullable|string',
    ]);

    Expense::create($expenses);
    
    return redirect()->route('expenses.index')
            ->with('success', 'Expense created successfully');
}

}

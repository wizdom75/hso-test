<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;

class AccountController extends Controller
{
    // Index method
    public function index()
    {
        return Account::paginate(env('PAGE_SIZE'));
    }

    // Store method
    public function store(Request $request)
    {
        $account = Account::create($request->all());
        return response()->json($account);
    }

    // Show method
    public function show(Account $account)
    {
        return $account;
    }

    // Update method
    public function update(Request $request, Account $account)
    {
        $account->update($request->all());
        return response()->json($account);
    }

    // Destroy method
    public function destroy(Account $account)
    {
        $account->delete();
        return response()->json(null, 204);
    }
}

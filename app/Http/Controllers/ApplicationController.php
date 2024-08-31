<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoanApplicationRequest;
use App\Models\LoanApplication;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('loan.form');
    }

    public function store(LoanApplicationRequest $request)
    {
        $request->validated();
        LoanApplication::create($request->except('status'));
        notify()->success('Your application is submitted, our team will contact you soon');
        return redirect()->route('loan.application.form');
    }
}

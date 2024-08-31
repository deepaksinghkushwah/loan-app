<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoanApplicationRequest;
use App\Models\LoanApplication;
use Illuminate\Http\Request;

class LoanApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = LoanApplication::latest()->get();
        return view('admin.loan-application.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.loan-application.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoanApplicationRequest $request)
    {
        $request->validated();
        LoanApplication::create($request->all());
        notify()->success('Your application is submitted, our team will contact you soon');
        return redirect()->route('admin.loan.index');
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
    public function edit(LoanApplication $loan)
    {
        
        return view('admin.loan-application.update',['row' => $loan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LoanApplicationRequest $request, LoanApplication $loan)
    {
        $request->validated($request->all());
        LoanApplication::where('id', $loan->id)->update($request->except('_token','_method'));
        notify()->success('Your application is updated successfully');
        return redirect()->route('admin.loan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LoanApplication $loan)
    {
        $loan->delete();
        notify()->success('Your application is deleted successfully');
        return redirect()->route('admin.loan.index');
    }
}

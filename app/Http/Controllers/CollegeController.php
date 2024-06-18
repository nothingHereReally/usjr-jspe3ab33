<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Http\Requests\StoreCollegeRequest;
use App\Http\Requests\UpdateCollegeRequest;
use App\Models\College;

class CollegeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('colleges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCollegeRequest $request): RedirectResponse
    {
        College::create($request->validated());
        return redirect()->route('college.index')
            ->with('success', 'College is added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(College $college): View
    {
        return view('colleges.show', compact('college'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(College $college): View
    {
        return view('colleges.edit', compact('college'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCollegeRequest $request, College $college): RedirectResponse
    {
        $college->update($request->validated());
        return redirect()->back()
            ->with('success', 'College is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(College $college): RedirectResponse
    {
        $college->delete();
        return redirect()->route('colleges.index')
            ->with('success', 'College is deleted successfully');
    }
}

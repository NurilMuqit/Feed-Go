<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Form;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $products =Product::inRandomOrder()->take(2)->get();
        return view('layouts.homepage', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'message' => 'required|string',
            ]);
            Form::create([
                'name' => $request->name,
                'email' => $request->email,
                'message' => $request->message,
            ]);

            return back()->with('success', 'Form submitted successfully.');
        } catch (\Exception $e) {
            return back()->with('error', 'An error occurred while submitting the form.')
            ->withInput();
        }
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $form = Form::findOrFail($id);
        $form->delete();

        return back()->with('success', 'Form deleted successfully.');
    }
}

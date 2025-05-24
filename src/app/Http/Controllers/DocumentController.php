<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function ariza()
     {
         $text = "men bu yili haj safariga borishga sharoitim yetarli bo‘lmaganligi sababli keyingi yillarga qoldirishingizni so‘rayman";
         $name = 'Islom';
         $surname = 'Toshpo‘latov';
         $address = 'A.Ikromov ko‘chasi';
         $home_number = '12';
         $day='12';
         $month='04';
         $year='2023';
     
         return view('document_templates.arizapdf', compact('text', 'name', 'surname', 'home_number','day','month','year', 'address'));
     }
    public function index()
    {
        //
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
        //
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
        //
    }
}

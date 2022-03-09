<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        return view('medicine.index', [
            "medicineCollection" => Medicine::All()
        ]);
    }

    public function show($id)
    {
        $medicine = Medicine::find($id);
        return view('medicine.show', [
            "medicine" => $medicine,
        ]);
    }

    public function med_by_category(int $categoryID)
    {
        $medicineCollection = Medicine::where('category_id', $categoryID)->get();
        $categoryName = Category::find($categoryID)->name;
        return view('medicine.med_by_category', [
            "medicineCollection" => $medicineCollection,
            "categoryID" => $categoryID,
            "categoryName" => $categoryName
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Medicine $medicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
    }

}

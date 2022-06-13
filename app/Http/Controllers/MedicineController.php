<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Medicine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MedicineController extends Controller
{
    public function index()
    {
        return view('admin.medicine.index', [
            "medicineCollection" => Medicine::All(),
            "categoryCollection" => Category::All()
        ]);
    }

    public function getEditForm()
    {
        return view('admin.medicine.getEditForm', [
            "categoryCollection" => Category::All()
        ]);
    }

    public function show($id)
    {
        $medicine = Medicine::find($id);
        return view('admin.medicine.show', [
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
     * Get collection of medicine with generic_name, form, price
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function name_formula_price()
    {
        $medicineCollection = Medicine::select([
            'generic_name',
            'form',
            'price'
        ])->get();
        return view('admin.report.2', [
            "medicineCollection" => $medicineCollection
        ]);
    }

    /**
     * Get collection of medicine with generic name, form, price
     * and category name
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function name_formula_price_catname()
    {
        $medicineCollection = Medicine::select([
            'generic_name',
            'form',
            'price'
        ])->addSelect([
            'category_name' => Category::select('name')->whereColumn('category_id', 'id'),
        ])->get();

        return view('admin.report.3', [
            "medicineCollection" => $medicineCollection
        ]);
    }

    /**
     * Get collection of medicine name that only have 1 form
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function have_one_form_only()
    {
        $medicineCollection = DB::table('medicines')
            ->select('generic_name', DB::raw('COUNT(id) as total_form'))
            ->groupBy('generic_name')
            ->havingRaw('total_form = ?', [1])
            ->get();

        return view('admin.report.8', [
            "medicineCollection" => $medicineCollection
        ]);
    }


    /**
     * Get collection of category name, medicine name, and price 
     * with the highest price
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function highest_price()
    {
        $medicineCollection = DB::table('medicines')
            ->select('categories.name as category_name', 'medicines.generic_name', 'medicines.price')
            ->join('categories', 'categories.id', '=', 'medicines.category_id')
            ->whereRaw('medicines.price = ( SELECT MAX(medicines.price) FROM medicines )')
            ->get();

        return view('admin.report.9', [
            "medicineCollection" => $medicineCollection
        ]);
    }

    public function showInfo()
    {
        $result = Medicine::orderBy('price', 'DESC')->first();
        return response()->json(array(
            'status' => 'oke',
            'msg' => "<div class='alert alert-info'>
Did you know? <br>Most expensive medicine is $result->generic_name.</div>"
        ), 200);
    }

    public function create()
    {
        return view('admin.medicine.create', [
            "categoryCollection" => Category::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('admin.medicine.edit', [
            "medicine" => Medicine::find($id),
            "categoryCollection" => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $medicine = Medicine::find($id);
        $medicine->generic_name = $request->generic_name;
        $medicine->restriction_formula = $request->restriction_formula;
        $medicine->price = $request->price;
        $medicine->description = $request->description;
        $medicine->category_id = $request->category_id;
        $medicine->faskes1 = ($request->faskes1 != null) ? 1 : 0;
        $medicine->faskes2 = ($request->faskes2 != null) ? 1 : 0;
        $medicine->faskes3 = ($request->faskes3 != null) ? 1 : 0;
        $medicine->save();
        return redirect()->route('medicine.index')->with('status', 'Medicine data changed!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicine::find($id);
        $medicine->delete();
        return redirect()->route('medicine.index')->with('status', 'Medicine data deleted!');
    }

    public function front_index()
    {
        return view('frontend.product', [
            "medicines" => Medicine::All()
        ]);
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function addToCart($id)
    {
        $medicine = Medicine::find($id);
        $cart = session()->get('cart');
        if(!isset($cart[$id])) 
        {
            $cart[$id] = [
                "name" => $medicine->generic_name,
                "quantity" => 1,
                "price" => $medicine->price,
            ];
        } else {
            $cart[$id]['quantity']++;
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Medicine added to cart successfuly!');
    }
}

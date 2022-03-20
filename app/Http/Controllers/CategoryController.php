<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{    
    /**
     * Get collection of category
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return view('admin.report.1', [
            "categoryCollection" => Category::all()
        ]);
    }

    /**
     * Get total number of category that have medicine
     *
     * @return int
     */
    public function count_have_medicine()
    {
        $countHaveMedicine =
            DB::table('categories')
            ->distinct()
            ->select('categories.id')
            ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
            ->whereNotNull('medicines.id')
            ->count('categories.id');
        
            
        return view('admin.report.4', [
            "number" => $countHaveMedicine
        ]);
    }
    
    /**
     * Get collection of category name that doesn't have medicine data
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function show_haveno_medicine()
    {
        $categoryCollection =
            DB::table('categories')
            ->distinct()
            ->select('categories.name')
            ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
            ->whereNull('medicines.id')
            ->get();
        

        return view('admin.report.5', [
            "categoryCollection" => $categoryCollection
        ]);
    }
    
    /**
     * Get collection of category name and average price for each category
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function avg_price()
    {
        $categoryCollection = DB::table('categories')
            ->select('categories.name', DB::raw('IFNULL(AVG(price),0)'))
            ->leftJoin('medicines', 'categories.id', '=', 'medicines.category_id')
            ->groupBy('categories.id')
            ->get();

        return view('admin.report.6', [
            "categoryCollection" => $categoryCollection
        ]);
    }
        
    /**
     * Get collection of category name that have one medicine only
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function have_one_medicine_only()
    {
        $categoryCollection = DB::table('medicines')
            ->select('categories.name', DB::raw('COUNT(categories.id) as total'))
            ->leftJoin('categories', 'categories.id', '=', 'medicines.category_id')
            ->groupBy('categories.id')
            ->havingRaw('total = ?', [1])
            ->get();
        
        return view('admin.report.7', [
            "categoryCollection" => $categoryCollection
        ]);
    }
}

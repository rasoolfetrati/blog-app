<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('AdminArea.Admin-Category-index', compact('categories'));
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
        $category = new Category();
        $cate = $category::where('Name', '=', $request->name)->get();
        if ($cate->isEmpty()) {
            $category->name = $request->name;
            $category->save();
            return response()->json([
                'code' => 200,
                'message' => 'تگ با موفقیت افزوده شد!',
                'data' => $category
            ]);
        }
        return response()->json([
            'code' => 401,
            'message' => 'این تگ از قبل وجود دارد!',
            'data' => null
        ]);
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
        $category = Category::findOrfail($id);
        $category->delete();
        return redirect()->back();
    }
}

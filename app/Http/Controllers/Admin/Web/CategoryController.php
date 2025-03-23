<?php

namespace App\Http\Controllers\Admin\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Category\CategoryRequest;
use App\Models\Category;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Category::paginate(4); // Corrected paginate method
        return view('admin.category.list', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $data = new Category();
        $data->en_name = $request->category_name_en;
        $data->cn_name = $request->category_name_cn;

        if ($data->save()) {
            // Image upload karna aur path update karna
            $imagePath = UploadImage($request, 'image', $data->id, $data->image, 'category');

            if ($imagePath) {
                $data->image = $imagePath;
                $data->save();
            }

            return redirect()->back()->with('success', 'Category record successfully saved.');
        } else {
            return redirect()->back()->with('error', 'Category record could not be saved.');
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
        try {
            $decryptedUuid = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Invalid UUID.');
        }

        $data = Category::where('uuid', $decryptedUuid)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        return view('admin.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        try {
            $decryptedUuid = Crypt::decrypt($id);
        } catch (DecryptException $e) {
            return redirect()->back()->with('error', 'Invalid UUID.');
        }

        $data = Category::where('uuid', $decryptedUuid)->first();

        if (!$data) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        $data->updated_en_name = $request->category_name_en;
        $data->cn_name = $request->category_name_cn;

        if ($data->save()) {

            $imagePath = UploadImage($request, 'image', $data->id, $data->image, 'category');

            if ($imagePath) {
                $data->image = $imagePath;
                $data->update();
            }

            return redirect()->back()->with('success', 'Category record successfully saved.');
        } else {
            return redirect()->back()->with('error', 'Category record could not be saved.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

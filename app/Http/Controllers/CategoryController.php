<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catList = Category::get();
        return view('admin.category.index', compact('catList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data = $request->validate([
            'catName' => 'required|unique:categories|max:255',
            'slug_cate' => 'required|unique:categories|max:255',
            'Active' => 'required',
        ],[
            'catName.required' => 'Vui lòng nhập Category',
            'catName.unique' => 'Tên đã bị trùng',
            'slug_cate.required' => 'Vui lòng nhập slug',
            'slug_cate.unique' => 'Slug đã bị trùng',
            'Active.required' => 'Vui lòng nhập hoạt động',
        ]);
        $category = new Category();
        $category->catName = $data['catName'];
        $category->slug_cate = $data['slug_cate'];
        $category->Active = $data['Active'];
        $category->save();
        return redirect()->back()->with('status','Thêm thể loại thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
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
        
        $data = $request->validate([
            'catName' => 'required|max:255',
            'slug_cate' => 'required|max:255',
            'Active' => 'required'
        ],[
            'catName.required' => 'Vui lòng nhập tên',
            'slug_cate.required' => 'Vui lòng nhập slug',
            'Active.required' => 'Vui lòng nhập hoạt động',
        ]);
        $category = Category::find($id);
        $category->catName = $data['catName'];
        $category->slug_cate = $data['slug_cate'];
        $category->Active = $data['Active'];
        $category->save();
        return redirect()->back()->with('status','Cập nhật thể loại thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->back()->with('status','Xóa danh mục thành công');
    }
}

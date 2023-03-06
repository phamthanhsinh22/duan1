<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Category;
use DB;
use Carbon\Carbon;
class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeList = Type::get();
        return view('admin.type.index',compact('typeList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::get();
        return view('admin.type.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'typName' => 'required|unique:types|max:255',
            'slug_typ' => 'required|unique:types|max:255',
            'Active' => 'required',
            'category_id' => 'required',
        ],[
            'typName.required' => 'Vui lòng nhập thể loại',
            'typName.unique' => 'Tên đã bị trùng',
            'slug_typ.required' => 'Vui lòng nhập slug',
            'slug_typ.unique' => 'Slug đã bị trùng',
            'Active.required' => 'Vui lòng nhập hoạt động',
            'category_id.required' => 'Vui lòng nhập thể loại111',
        ]);
        $category = new Type();
        $category->typName = $data['typName'];
        $category->slug_typ = $data['slug_typ'];
        $category->Active = $data['Active'];
        $category->category_id = $data['category_id'];
        $category['created_at'] = Carbon::now();     
        $category['updated_at'] = Carbon::now();
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
        $type = Type::find($id);
        $category = Category::get();
        return view('admin.type.edit',compact('type','category'));
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
            'typName' => 'required',
            'slug_typ' => 'required',
            'Active' => 'required',
            'category' => 'required',
        ],
        [
            
            'typName.required' => 'Vui lòng nhập Thể loại',
            'slug_typ.required' => 'Vui lòng nhập slug thể loại',
            'Active.required' => 'Vui lòng nhập hoạt động',
            'category' => 'Vui lòng nhập danh mục',
        ]);
        $type = Type::find($id);
        $type->typName = $data['typName'];
        $type->slug_typ = $data['slug_typ'];
        $type->Active = $data['Active'];
        $type->category_id = $data['category'];
        $type->save();
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
        Type::find($id)->delete();
        return redirect()->back()->with('status','Xóa thể loại thành công');
    }
}

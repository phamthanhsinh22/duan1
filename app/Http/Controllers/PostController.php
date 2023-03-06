<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Post;
use Carbon\Carbon;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Type::get();
        $postList = Post::get();
        return view('admin.post.index',compact('type','postList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type = Type::get();
        return view('admin.post.create',compact('type'));
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
            'title' => 'required',
            'slug_title' => 'required',
            'content' => 'required',
            'summary' => 'required',
            'images' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=2000,max-width=2000,max_height=2000',
            'hot' => 'required',
            'trending' => 'required',
            'Active' => 'required',
            'type_id' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập title',
            'slug_typ.required' => 'Vui lòng nhập slug title',
            'content.required' => 'Vui lòng nhập nội dung',
            'summary.required' => 'Vui lòng nhập tóm tắt',
            'Active.required' => 'Vui lòng nhập hoạt động',
            'type_id.required' => 'Vui lòng chọn typeid',
            'images.required' => 'Vui lòng chọn hình ảnh',
            'hot.required' => 'Vui lòng chọn nổi bật',
            'trending.required' => 'Vui lòng chọn trending',

        ]);
        $posts = new Post();
        $posts->title = $data['title'];
        $posts->slug_title = $data['slug_title'];
        $posts->content = $data['content'];
        $posts->summary = $data['summary'];
       // $posts->images = $data['images'];
       //thêm hình ảnh vào dữ liệu
        $get_image = $request->images;
        $path = 'uploads/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $posts->images = $new_image;


        $posts->Active = $data['Active'];
        $posts->hot = $data['hot'];
        $posts->trending = $data['trending'];
        $posts->type_id = $data['type_id'];
        $posts['created_at'] = Carbon::now();     
        $posts['updated_at'] = Carbon::now();
        $posts->save();
        return redirect()->back()->with('status','Thêm tin thành công');
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
        $type = Type::get();
        $post = Post::find($id);
        return view('admin.post.edit',compact('post','type'));
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
            'title' => 'required',
            'slug_title' => 'required',
            'content' => 'required',
            'summary' => 'required',
            
            'hot' => 'required',
            'trending' => 'required',
            'Active' => 'required',
            'type_id' => 'required',
        ],[
            'title.required' => 'Vui lòng nhập title',
            'slug_typ.required' => 'Vui lòng nhập slug title',
            'content.required' => 'Vui lòng nhập nội dung',
            'summary.required' => 'Vui lòng nhập tóm tắt',
            'Active.required' => 'Vui lòng nhập hoạt động',
            'type_id.required' => 'Vui lòng chọn typeid',
            
            'hot.required' => 'Vui lòng chọn nổi bật',
            'trending.required' => 'Vui lòng chọn trending',

        ]);
        $posts =  Post::find($id);
        $posts->title = $data['title'];
        $posts->slug_title = $data['slug_title'];
        $posts->content = $data['content'];
        $posts->summary = $data['summary'];
       // $posts->images = $data['images'];
       //thêm hình ảnh vào dữ liệu
        $get_image = $request->images;
        if($get_image){

        $path = 'uploads/';
        echo $get_image;
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);
        $posts->images = $new_image;
        }

        $posts->Active = $data['Active'];
        $posts->hot = $data['hot'];
        $posts->trending = $data['trending'];
        $posts->type_id = $data['type_id'];
        $posts['created_at'] = Carbon::now();     
        $posts['updated_at'] = Carbon::now();
        $posts->save();
        return redirect()->back()->with('status','Cập nhật tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $path = 'uploads/'.$post->images;
        if(file_exists($path)){
            unlink($path);
        }
        Post::find($id)->delete();
        return redirect()->back()->with('status','Xoá tin thành công');
    }
}

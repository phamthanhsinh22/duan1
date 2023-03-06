<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Type;
use Carbon\Carbon;
use DB;

class pageController extends Controller
{
     
    public function getIndex(){
        $category = Category::get();
        $type = Type::where('Active',1)->orderBy('id','ASC')->get();
        $post1 = Post::where('Active',1)->orderBy('id','DESC')->get();
        $type1 = Type::limit(5)->where('Active',1)->orderBy('id','DESC')->get();
        $post = Post::limit(5)->where('active',1)->orderBy('id','DESC')->get();
        $tinhot = Post::limit(7)->where('active',1)->where('hot',1)->orderBy('id','DESC')->get();
        $trending = Post::limit(6)->where('active',1)->where('trending',1)->orderBy('id','DESC')->get();
        return view('layout.index', compact('category','type','post','tinhot','trending','type1','post1'));
    }
    public function gettype($slug){
        $category = Category::get();
        $type = Type::get();
        
        $type_id = Type::where('slug_typ',$slug)->first();
        $post = Post::where('active',1)->orderBy('id','DESC')->where('type_id',$type_id->id)->paginate(5);
      //  $post1 = Post::where('active',1)->orderBy('id','DESC')->where('type_id',$type_id->id)->first();
        $trending = Post::limit(4)->where('active',1)->where('trending',1)->orderBy('id','DESC')->get();
        $type1 = $type_id->typName;
        
        //$next = Post::with('types')->where('type_id',$type_id->type_id)->where('id', '>',$post1->id)->min('slug_title');
       // $total = count($product);
        // $pagination = pagination($post);
        // $post1 = $pagination['product'];
        // $page = $pagination['page'];
        return view('layout.type',compact('category','type','type_id','post','trending','type1'));
    }
   
    public function getpost($slug){
        $category = Category::get();
        $type = Type::get();
        $post = Post::with('types')->where('slug_title', $slug)->where('active',1)->first();
        $cungdanhmuc = Post::with('types')->where('type_id',$post->types->id)->whereNotIn('id',[$post->id])->get();
        return view('layout.post', compact('category','type','post','cungdanhmuc'));
    }
    public function getcontact(){
        $category = Category::get();
        $type = Type::get();
        return view('layout.contact',compact('category','type'));
    }
    public function postcontact(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['content'] = $request->content;
        $data['phone'] = $request->phone;
        $data['created_at'] = Carbon::now();        
        $data['updated_at'] = Carbon::now();
        DB::table('contact')->insert($data);
        return redirect()->back()->with('message', 'Gửi thành công');
    }
    public function trending(){
        $category = Category::get();
        $type = Type::get();
      //  $post1 = Post::where('active',1)->orderBy('id','DESC')->where('type_id',$type_id->id)->first();
        $trending = Post::limit(5)->where('active',1)->where('trending',1)->orderBy('id','DESC')->get();
       // $type1 = $type_id->typName;
        //$next = Post::with('types')->where('type_id',$type_id->type_id)->where('id', '>',$post1->id)->min('slug_title');
        return view('layout.trending',compact('category','type','trending'));
    }
}

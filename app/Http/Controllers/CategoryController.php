<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
      $categories = Category::all();
      return view('admins.categories.index')->with('categories',$categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
         $this->validate($request,[

        'cat_name'=>'required|string|max:255',
        'cat_des'=>'required|max:1000',
        'cat_img' => 'image|mimes:jpeg,jpg,png|max:1000',
        ]);
        $category = new Category;
        $category->cat_name = $request->cat_name;
        $category->cat_des = $request->cat_des;
       if($request->hasFile('cat_img')) 
        {
        $cat_img = $request->file('cat_img');
        $cat_img_name= time() .'_'.$cat_img->getClientOriginalName();
        $upload_path='cat_img/';
        $cat_img_name = $upload_path.$cat_img_name;  
        $cat_img->move($upload_path,$cat_img_name);
        $category->cat_img = $cat_img_name;
        }
        $category->save();
        return redirect('/categories');
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
        return view('admins.categories.edit')->with('category',$category);
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
        $category = Category::find($id);
        $category->cat_name = $request->cat_name;
        $category->cat_des = $request->cat_des;
        if($request->hasFile('cat_img')) 
        {
        $cat_img = $request->file('cat_img');
        $cat_img_name= time() .'_'.$cat_img->getClientOriginalName();
        $upload_path='cat_img/';
        $cat_img_name = $upload_path.$cat_img_name;  
        $cat_img->move($upload_path,$cat_img_name);
        $category->cat_img = $cat_img_name;
        }
        
        $category->update();
        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::find($id);
        $category->delete();
        
        return redirect('/categories');
        
    }

    public function active_category(Request $request,$id){

        $category = Category::find($id);
        $category->where('id',$id)->update(['status'=>1]);
        return redirect('categories');


    }

     public function deactive_category(Request $request,$id){

        $category = Category::find($id);
        $category->where('id',$id)->update(['status'=>0]);
        return redirect('categories');


    }
}

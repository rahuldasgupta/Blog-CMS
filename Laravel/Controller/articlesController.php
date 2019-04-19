<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\articles;

class articlesController extends Controller
{
  public function insertform()
  {
    return view('posts');
  }
  public function insert(Request $request)
  {
    $title = $request->input('title');
    $tags = $request->input('tags');
    $post = $request->input('post');
    $postdate = $request->input('postdate');
    $data=array('title'=>$title,"tags"=>$tags,"post"=>$post,"postdate"=>$postdate);
    DB::table('articles')->insert($data);
    echo "Record inserted successfully.<br/>";
  }
  public function index()
  {
    $users = DB::select('select * from articles');
    return view('result',['users'=>$users]);
  }
  public function show($title)
  {
    $users = DB::select('select * from articles where title = ?',[$title]);
    return view('edit',['users'=>$users]);
  }
  public function edit(Request $request,$title)
  {
    $title = $request->input('title');
    $tags = $request->input('tags');
    $postdate = $request->input('postdate');
    $post = $request->input('post');
    DB::update('update articles set title=?,tags=?,post=?,postdate=? where title=?',[$title,$tags,$post,$postdate,$title]);
    echo "Record updated successfully.";
  }
  public function destroy($title)
  {
    DB::delete('delete from articles where title = ?',[$title]);
    echo "Record deleted successfully.";
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//important! 有他input才能動
use Illuminate\Support\Facades\Input;


class HomeController extends Controller
{
    public function index() {
		
		$post = \App\Post::all();
		return View('home')
		->with('title', 'My Blog')
		->with('posts', $post);
    }

    public function show($id) {
		$post = \App\Post::find($id);
		return View('show')
			->with('title', 'My Blog - '. $post->title)
			->with('post', $post);
	}
	
	public function store(){
    	//$input = Input::all();    	
    	//return  $input['title'];

		$input = Input::all();
		$post = new \App\Post;
		$post->title = $input['title'];
		$post->content = $input['content'];
		$post->save();
		return redirect()->action('HomeController@index');
		
	}

	public function create(){
		return View('create')
			->with('title', '新增文章');
	}

	public function edit($id){
		$post = \App\Post::find($id);
		return View('edit')
			->with('title', '編輯文章')
			->with('post', $post);
	}

	public function update($id){
		$input = Input::all();
		$post = \App\Post::find($id);
		$post->title = $input['title'];
		$post->content = $input['content'];
		$post->save();
		return redirect()->action('HomeController@index');
	}

	public function destroy($id){
		$post = \App\Post::find($id);
		$post->delete();
		return redirect()->action('HomeController@index');
	}
}

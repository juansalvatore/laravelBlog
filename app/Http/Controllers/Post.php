<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Post extends Controller
{
    public function getPosts($session)
	{
		if(!$session->has('posts'))
		{
			$this->createDummyData($session);
		}
		return $session->get('posts');
	}
	
	public function createDummyData($session)
	{
		$posts = [
			[
				'title' => 'Learning Laravel',
				'content' => 'This blog post will get you right on thrack with Laravel'
			],
			[
				'title' => 'Something else',
				'content' => 'Some other content'
			],
		];
		$session->put('posts', $posts);
	}
}

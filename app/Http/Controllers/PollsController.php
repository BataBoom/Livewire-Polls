<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\Poll;


class PollsController extends Controller
{

	public function index()
	{
		$poll = Poll::find(4);

    	return view('posts.polls')
        ->with('poll', $poll);
	}

	public function show($id)
	{
		$poll = Poll::find($id);

    	return view('polls.show')
        ->with('poll', $poll);
	}

	public function create()
	{
		return view('polls.create');
	}

}
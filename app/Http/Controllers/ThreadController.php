<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use Auth;

class ThreadController extends Controller
{
    public function add()
    {
        return view('thread.new');
    }
    
    public function create(Request $request)
    {
        $thread = new Thread;
        $thread->fill($request->all());
        $thread->user_id = Auth::id();
        $thread->save();
        return redirect('/');
    }
    
    public function index()
    {
        return view('thread.index', ['threads' => Thread::all()]);
    }
    
    public function show(Request $request)
    {
        return view('thread.show', ['thread' => Thread::find($request->id)]);
    }
}

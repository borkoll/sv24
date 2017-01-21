<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

            $tasks = Task::orderBy('tasks.created_at', 'asc')->leftJoin('photos', 'photos.task_id', '=', 'tasks.id')->get();
            return view('home', [
                'tasks' => $tasks
            ]);

    }
}

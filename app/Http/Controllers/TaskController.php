<?php

namespace App\Http\Controllers;
use App\Task;
use App\Photo;
use Illuminate\Http\Request;

class TaskController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {   $messages = array(
        'required' => 'Поле :attribute должно быть заполнено.',
    );


        $this->validate($request, [
        'name' => 'required|max:255',
        'tel' => 'required|max:255',
        'description' => 'required|max:255',
        'email' => 'required|max:255',
    ], $messages);

        $req=new Task;
        $req->name=$request->name;
        $req->email=$request->email;
        $req->description=$request->description;
        $req->phone=$request->tel;
        $req->save();
        $insertedId = $req->id;


        foreach ($request->file() as $file) {
            foreach ($file as $f){
                $photo=new Photo;
                $photo->task_id=$insertedId;
                $name=time().'_'.$f->getClientOriginalName();
                $photo->path=$name;
                $f->move(public_path('img/upload'),$name );
                $photo->save();
            }
        }


        return view('common.success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return [
            'tasks' => $tasks
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

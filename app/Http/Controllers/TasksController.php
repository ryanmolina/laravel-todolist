<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index () {
        //
        $tasks = Task::all();

        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create () {
        //
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store (Request $request) {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $input = $request->all();
        Task::create($input);

        Session::flash('flash_message', 'Task Successfully added');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show (Task $task) {
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit ($id) {
        $task = Task::findOrFail($id);

        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update (Request $request, $id) {
        //
        $task = Task::findOrFail($id);

        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:255'
        ]);

        $input = $request->all();

        $task->fill($input);
        $task->save();

        Session::flash('flash_message', 'Task successfully added.');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy ($id) {
        $task = Task::findOrFail($id);
        $task->delete();

        Session::flash('flash_message', 'Task successfully deleted');

        return redirect()->route('tasks.index');
    }
}

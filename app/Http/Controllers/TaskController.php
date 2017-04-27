<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests\TaskStoreRequest;

class TaskController extends Controller
{
    private $tasks;
    
    public function __construct(){
        $this->tasks = collect([
            ['id' => 0, 'name' => 'Empty', 'duration' => 0],
            ['id' => 2, 'name' => 'Learn Laravel', 'duration' => 12],
            ['id' => 3, 'name' => 'Learn RubyOnRails', 'duration' => 24]
        ])->keyBy('id');
    }

    // defined into web.pho

    public function show ( $id ){
        return view('tasks.show')->with('task', $this->tasks[$id]);
    }

    public function index (){
        // directory tasks, page index
        return view('tasks.index')->with('tasks', $this->tasks);
        //return view('tasks.index')->with('tasks', Task::all());
    }
    
     public function create (){
        // directory tasks, page index
        return view('tasks.create');
        //return view('tasks.index')->with('tasks', Task::all());
    }
    
    public function store ( TaskStoreRequest $request ) {
        $task = new Task();
        $task->name = $request->name;
        $task->save();
        return redirect(route('tasks.index'));
        
        //$task = Task::create($request->all());
        
        /*
        $name = $request->input('name');
        $email = $request->input('email');
        echo "name=".$name.", email=".$email;
        */
       
    }
    
    
}

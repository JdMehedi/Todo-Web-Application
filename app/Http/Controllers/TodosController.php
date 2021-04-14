<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\todo;

class TodosController extends Controller
{
    public function index()
    {  

        // face all todos from databse

        //Display them todos.index page
        $todos = Todo::all();
        return view ('todos/index')->with('todos',$todos);
        
    }
    // For show page
    public function show(Todo $todo) //[model binding thats why interchanged 'Todo $todo' of $todoId]
    {
        // dd($todoId);
        // $todo = Todo::find($todoId);[model binding]
        return view('todos.show')->with('todos',$todo);
    }

    // For create page
    public function new()
    {
        return view('todos.create');
    }

    //for store data

    public function store()
    {   $this->validate(request(), [
        'name' => 'required|min:6|max:16',
        'description'=>'required|min:12|max:200',
        
      

        ]);
            
       
            
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();
        session()->flash('success','Todo created successfully');
        return redirect('/todos');

    }
    public function edit(Todo $todo)
    {   
        // $todo =Todo::find($todoId);
        return view('todos.edit')->with('todos',$todo);
    }

    public function update(Todo $todo)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:16',
            'description'=>'required|min:12|max:200',
            
          
    
            ]);
            $data = request()->all();
            // $todo = Todo::find($todoId);
            $todo->name = $data['name'];
            $todo->description = $data['description'];

            $todo->save();

            session()->flash('success','Todo updated successfully');

            return redirect('/todos');

    }

    public function destroy(Todo $todo)
    {
        // $todo = Todo::find($todoId);
        $todo->delete();

        session()->flash('success','Todo deleted successfully');

        return redirect('/todos');
    }

    public function complete(Todo $todo)
    {
        $todo->completed = true;
        $todo->save();
        session()->flash('success','Todo completed successfully');
        return redirect('/todos');
    }


 
}

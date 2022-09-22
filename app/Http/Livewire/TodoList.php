<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class TodoList extends Component
{
  public Collection $todos;

  public function __construct() {
    $this->todos = new Collection([]);
  }

  protected $listeners = 
  [
    'changeCompletedStatus' => 'markOrUnmarkAsCompleted',
    'deleteTodo' => 'deleteTodo',
    'addedTodo' => 'onAddedTodo',
  ];
 
  public function onAddedTodo($todoId)
  {
    try {

      $todo = ModelsTodo::findOrFail($todoId);
      $this->todos->add($todo);
      // Empty error body.
    } catch(Exception $e) {}
  }

  public function mount()
  {
    $this->todos = ModelsTodo::all();
  } 

  public function deleteTodo($todoId)
  {
    $this->todos = $this->todos->except($todoId);
    
    ModelsTodo::destroy($todoId);
  }

  public function markOrUnmarkAsCompleted($todoId, bool $isCompleted = false)
  {

    $todo = $this->todos->find($todoId);
    $todo->is_completed = $isCompleted;
    $todo->save();

  }

  public function render()
  {
    
      return <<<'blade'
      <div>
        @foreach ($todos as $todo)
          <x-todo-item :todo="$todo"/>
        @endforeach
      </div>
      blade;
  }
}

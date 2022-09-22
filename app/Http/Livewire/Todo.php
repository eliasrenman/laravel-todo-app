<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Todo extends Component
{
  public $todos;

  public function __construct() {
    $this->todos = new Collection([]);
  }

  protected $listeners = 
  [
    'changeCompletedStatus' => 'markOrUnmarkAsCompleted',
    'deleteTodo' => 'deleteTodo'
  ];
 
  public function mount()
  {
    $this->todos = ModelsTodo::all();
  } 

  public function deleteTodo($todoId)
  {
    $this->todos = $this->todos->except($todoId);
    
    ModelsTodo::destroy($todoId);
  }

  public function markOrUnmarkAsCompleted(bool $isCompleted)
  {
    dd("this happens", $isCompleted);
    // Simply save the updated value here
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

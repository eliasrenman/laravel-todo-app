<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Todo extends Component
{
  public $todos = [];

  protected $listeners = 
  [
    'changeCompletedStatus' => 'markOrUnmarkAsCompleted',
    'deleteTodo'
  ];
 
  protected function mount()
  {
    $todos = ModelsTodo::all();
  } 

  protected function deleteTodo(ModelsTodo $todo)
  {
    // Simply remove the post.
  }

  protected function markOrUnmarkAsCompleted(bool $isCompleted)
  {
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

<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class AddTodo extends Component
{

    public string $title = "";

    public function addTodo()
    {

      $result = Todo::create([
        'title' => $this->title,
        'is_completed' => false
      ]);
      

      $this->title = "";

      $this->emit('addedTodo', $result->id);
    }

    public function render()
    {
        return <<<'blade'
          <div class="flex mt-4">
            <input 
              class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker"
              placeholder="Add Todo"
              wire:model.debounce.500ms="title"
            >
            <button 
              wire:click.debounce.500ms="addTodo"
              class="flex-no-shrink ml-2 p-2 border-2 rounded text-teal-500 border-teal-500 hover:text-white hover:bg-teal-500"
              >Add</button>
          </div>
        blade;
    }
}

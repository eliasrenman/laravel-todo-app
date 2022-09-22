<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public function render()
    {
        return <<<'blade'
        <div>
          <x-todo-item/>
          <x-todo-item/>
        </div>
        blade;
    }
}

@php
    $isDone = $todo->is_completed ?? false;
@endphp

<div>

  <div class="flex mb-4 items-center">
      <p 
      class="w-full text-green"
      @class([
        'line-through' => $isDone
      ])
      > {{ $todo->title ?? 'No Title' }}</p>
      <button
        wire:click="$emit('changeCompletedStatus', {{!$isDone}})"
        class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white hover:text-white text-green border-green hover:bg-green"
        @class([
          'text-grey' => $isDone,
          'border-grey' => $isDone,
          'hover:bg-grey' => $isDone,
          
        ])
        >{{ $isDone ? 'Done' : 'Not Done'}}</button>
      <button 
        class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red hover:text-white hover:bg-red"
        wire:click="$emit('deleteTodo', {{ $post }})"
        >Remove
      </button>
  </div>
</div>
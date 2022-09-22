@php
$isDone = $todo->is_completed ?? false;
@endphp

<div>

    <div class="flex mb-4 items-center">
        <p @class([
            'w-full',
            'text-green-600' => $isDone,
            'line-through' => $isDone,
        ])>{{ $todo->title ?? 'No Title' }}</p>
        <button wire:click="$emit('changeCompletedStatus', {{ $todo->id }},{{ !$isDone }})"
            @class([
                'flex-no-shrink',
                'p-2',
                'ml-4',
                'mr-2',
                'border-2',
                'rounded',
                'text-green-600' => !$isDone,
                'hover:text-white' => !$isDone,
                'border-green-400' => !$isDone,
                'hover:bg-green-400' => !$isDone,
                'text-grey-600' => $isDone,
                'border-gray-200' => $isDone,
                'hover:bg-gray-200' => $isDone,
            ])>{{ $isDone ? 'Not Done' : 'Done' }}</button>
        <button
            class="flex-no-shrink p-2 ml-2 border-2 rounded text-red border-red-400 hover:text-white hover:bg-red-400"
            wire:click="$emit('deleteTodo', {{ $todo->id }})">Remove
        </button>
    </div>
</div>

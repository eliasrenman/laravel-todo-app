<x-layout>
    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans pt-7">
        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest">Todo List</h1>
                <livewire:add-todo/>
            </div>
            <div>
               <livewire:todo-list/>
            </div>
        </div>
    </div>
</x-layout>

<x-layout>
    <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans pt-7">
        <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
            <div class="mb-4">
                <h1 class="text-grey-darkest">Todo List</h1>
                <div class="flex mt-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                    <button class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Add</button>
                </div>
            </div>
            <div>
               <livewire:todo/>
            </div>
        </div>
    </div>
</x-layout>
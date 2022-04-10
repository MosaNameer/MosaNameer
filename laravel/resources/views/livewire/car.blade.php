<div>

    <div
        class="p-6 max-w-7xl mx-auto bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">


        <form wire:submit.prevent="add">
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                    name</label>
                <input wire:model="name" type="text" id="name"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>
            <div class="mb-6">
                <label for="model" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                    Model</label>
                <input wire:model="model" type="number" id="model"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>

            <div class="mb-6">
                <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your
                    Price</label>
                <input wire:model="price"type="number" id="price"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    required="">
            </div>

            <div class="flex items-start mb-6">
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
        </form>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-3">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            #
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Car Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Model
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Price
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>

                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cars as $car)

                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $car->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $car->model }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $car->price }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button type="button" wire:click="edit({{ $car->id }})"
                                    class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Edit</button>
                            </td>

                            <td class="px-6 py-4 text-right">
                                <button type="button" wire:click="delete({{ $car->id }})"
                                    class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Delet</button>
                            </td>
                        </tr>
                        @empty 
                        <td>
                            No Cars
                        </td>

                        @endforelse
                </tbody>
            </table>
        </div>


    </div>

</div>

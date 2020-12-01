<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add Department
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <form class="p-10" method="POST" action="{{ route('department.store') }}">
            @csrf

            <div class="grid grid-cols-2 gap-2 max-w-xl m-auto">

                <div class="col-span-3  lg:col-span-1">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="name"
                        placeholder="Name" required />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="manger"
                        placeholder="Manger Name" />
                </div>
                <div class="col-span-2 text-right">
                    <button class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                        Create
                    </button>
                </div>
            </div>

        </form>
    </div>

</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create Employee
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <form class="p-5" method="POST" action="{{ route('employee.store') }}">
            @csrf

            <div class="grid grid-cols-2 gap-2 max-w-xl m-auto">

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="name"
                        placeholder="Name" required />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="date" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="birthdate" required placeholder="Birth date" />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="position" placeholder="Position" />
                </div>

                <div class="col-span-3">
                    <input type="email" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="email" placeholder="Email Address" />
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="salary"
                        placeholder="salary" />
                </div>

                <div class="col-span-3">
                    <input type="date" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="joinDate" placeholder="join Date" />
                </div>

                <div class="col-span-2">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="experience" placeholder="experience" />
                </div>
                <div class="col-span-2 text-right">
                    <button class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                        Employee
                    </button>
                </div>
            </div>

        </form>
    </div>

</x-app-layout>
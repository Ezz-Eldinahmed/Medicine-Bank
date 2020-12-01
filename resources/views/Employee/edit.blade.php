<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Employee
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <form class="p-5" method="POST" action="{{ route('employee.update',$employee->id) }}">
            @csrf

            <div class="grid grid-cols-2 gap-2 max-w-xl m-auto">

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="name"
                        value="{{$employee->name}}" placeholder="Name" required />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="date" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$employee->birthdate}}" name="birthdate" required placeholder="Birth date" />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$employee->position}}" name="position" placeholder="Position" />
                </div>

                <div class="col-span-3">
                    <input type="email" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$employee->email}}" name="email" placeholder="Email Address" />
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="salary"
                        value="{{$employee->salary}}" placeholder="salary" />
                </div>

                <div class="col-span-3">
                    <input type="date" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$employee->joinDate}}" name="joinDate" placeholder="join Date" />
                </div>

                <div class="col-span-2">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$employee->experience}}" name="experience" placeholder="experience" />
                </div>

                <label class="col-span-3">
                    <span class="text-gray-700">Department</span>
                    <select name="department_id" class="form-select mt-1 block w-full">
                        @foreach ($departments as $department)
                        <option @if ($employee->department->name == $department->name) selected @endif
                            value="{{($department->id)}}">{{($department->name)}}
                        </option>
                        @endforeach
                    </select>
                </label>

                <div class="col-span-2 text-right">
                    <button class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                        Update
                    </button>
                </div>
            </div>

        </form>
    </div>

</x-app-layout>
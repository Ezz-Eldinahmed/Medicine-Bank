<x-app-layout>

    <x-slot name="header">
        Employees
        <x-jet-nav-link href="{{ route('employee.create') }}" :active="request()->routeIs('employee.create')">
            {{ __('Add Employee') }}
        </x-jet-nav-link>
    </x-slot>

    <table class="p-2 table-auto border-separate border border-green-600">
        <thead>
            <tr>
                <th>id</th>
                <th>x</th>
                <th>Edit</th>
                <th>Name</th>
                <th>position</th>
                <th>joinDate</th>
                <th>salary</th>
                <th>age</th>
                <th>experience</th>
                <th>email</th>
                <th>Department</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($employees as $employee)
            <tr>
                <td class="border border-green-600">{{$employee->id}}</td>
                <td class="border border-green-600"><a href="{{route('employee.destroy',$employee)}}"
                        onclick="return confirm('Are you sure you want to delete this employee?')">x</a> </td>
                <td class="border border-green-600"><a href="{{route('employee.edit',$employee->id)}}">Edit</a></td>

                <td class="border border-green-600"><a href='{{route('employee.show',$employee->id)}}'>
                        {{$employee->name}}</a></td>
                <td class="border border-green-600">{{$employee->position}}</td>
                <td class="border border-green-600">{{$employee->joinDate}}</td>
                <td class="border border-green-600">{{$employee->salary}}</td>
                <td class="border border-green-600">{{$employee->age}}</td>
                <td class="border border-green-600">{{$employee->experience}}</td>
                <td class="border border-green-600">{{$employee->email}} </td>
                <td class="border border-green-600">{{$employee->department->name}} </td>
                <td class="border border-green-600">{{$employee->created_at}} </td>
                <td class="border border-green-600">{{$employee->updated_at}} </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</x-app-layout>
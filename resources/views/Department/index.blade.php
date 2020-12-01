<x-app-layout>

    <x-slot name="header">
        Department
        <x-jet-nav-link href="{{ route('department.create') }}" :active="request()->routeIs('department.create')">
            {{ __('Add Department') }}
        </x-jet-nav-link>
        <x-jet-nav-link href="{{ route('employee.index') }}" :active="request()->routeIs('employee.index')">
            {{ __('Employees') }}
        </x-jet-nav-link>
    </x-slot>

    <table class="p-2 table-auto border-separate border border-green-600">
        <thead>
            <tr>
                <th>id</th>
                <th>x</th>
                <th>Edit</th>
                <th>Name</th>
                <th>Manger</th>
                <th>Number Of Employee</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($Department as $dep)
            <tr>
                <td class="border border-green-600">{{$dep->id}}</td>
                <td class="border border-green-600"><a href="{{route('department.destroy',$dep)}}"
                        onclick="return confirm('Are you sure you want to delete this department?')">x</a> </td>
                <td class="border border-green-600"><a href="{{route('department.edit',$dep->id)}}">Edit</a></td>

                <td class="border border-green-600"><a href='{{route('department.show',$dep->id)}}'>
                        {{$dep->name}}</a></td>
                <td class="border border-green-600">{{$dep->manger}}</td>

                <td class="border border-green-600">{{$dep->number}} </td>

                <td class="border border-green-600">{{$dep->created_at}} </td>
                <td class="border border-green-600">{{$dep->updated_at}} </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</x-app-layout>
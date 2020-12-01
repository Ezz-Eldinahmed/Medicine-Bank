<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            employees
        </h2>
    </x-slot>
    <ul class="p-3">
        <li>age : {{$employees->age}}</li>
        <li>salary : {{$employees->salary}}</li>
        <li>position : {{$employees->position}}</li>
        <li>experience : {{$employees->experience}}</li>
        <li>joinDate : {{$employees->joinDate}}</li>
        <li>email : {{$employees->email}}</li>
        <li>name : {{$employees->name}} </li>
        <li>created_at :{{$employees->created_at}} </li>
        <li>updated_at :{{$employees->updated_at}} </li>
    </ul>
</x-app-layout>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Department
        </h2>
    </x-slot>
    <ul class="p-3">
        <li>manger : {{$department->manger}}</li>
        <li>number : {{$department->number}}</li>
        <li>name : {{$department->name}} </li>
        <li>created_at :{{$department->created_at}} </li>
        <li>updated_at :{{$department->updated_at}} </li>
    </ul>
</x-app-layout>
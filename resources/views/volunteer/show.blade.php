<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            volunteer
        </h2>
    </x-slot>
    <ul class="p-3">
        <li>Name : {{$volunteer->name}}</li>
        <li>Address : {{$volunteer->address}}</li>
        <li>birthdate : {{$volunteer->birthdate}} </li>
        <li>certificate : {{$volunteer->certificate}}</li>
        <li>job : {{$volunteer->job}}</li>
        <li>telephone : {{$volunteer->telephone}}</li>
        <li>email : {{$volunteer->email}}</li>
        <li>mobile : {{$volunteer->mobile}}</li>
        <li>location :{{$volunteer->location}} </li>
        <li>what You Have Done :{{$volunteer->whatYouHaveDone}}</li>
        <li>Kind Of Volentering :{{$volunteer->KindOfVolentering}}</li>
        <li>join Before :{{$volunteer->joinBefore}} </li>
        <li>place :{{$volunteer->place}} </li>
        <li>type :{{$volunteer->type}} </li>
        <li>created_at :{{$volunteer->created_at}} </li>
        <li>updated_at :{{$volunteer->updated_at}} </li>
    </ul>
</x-app-layout>
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Volunteers
        </h2>
    </x-slot>

    <table class="table-auto border-collapse border-green-100">
        <thead>
            <tr class="bg-green-300">
                <th>id</th>
                <th>x</th>
                <th>Edit</th>
                <th>name</th>
                <th>address</th>
                <th>birthdate</th>
                <th>certificate</th>
                <th>job</th>
                <th>telephone</th>
                <th>email</th>
                <th>mobile</th>
                <th>location</th>
                <th>what You Have Done</th>
                <th>Kind Of Volentering</th>
                <th>join Before</th>
                <th>place</th>
                <th>type</th>
                <th>created at</th>
                <th>updated at</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($volunteer as $volunt)
            <tr>
                <td class="border border-green-600">{{$volunt->id}}</td>
                <td class="border border-green-600"><a href="{{route('volunter.destroy',$volunt)}}"
                        onclick="return confirm('Are you sure you want to delete this volunteer?')">x</a> </td>
                <td class="border border-green-600"><a href="{{route('volunter.edit',$volunt->id)}}">Edit</a></td>

                <td class="border border-green-600"><a href='{{route('volunter.show',$volunt->id)}}'>
                        {{$volunt->name}}</a></td>
                <td class="border border-green-600">{{$volunt->address}}</td>
                <td class="border border-green-600">{{$volunt->birthdate}} </td>
                <td class="border border-green-600">{{$volunt->certificate}}</td>
                <td class="border border-green-600">{{$volunt->job}}</td>
                <td class="border border-green-600">{{$volunt->telephone}}</td>
                <td class="border border-green-600">{{$volunt->email}}</td>
                <td class="border border-green-600">{{$volunt->mobile}}</td>
                <td class="border border-green-600">{{$volunt->location}} </td>
                <td class="border border-green-600">{{$volunt->whatYouHaveDone}}</td>
                <td class="border border-green-600">{{$volunt->KindOfVolentering}}</td>
                <td class="border border-green-600">{{$volunt->joinBefore}} </td>
                <td class="border border-green-600">{{$volunt->place}} </td>
                <td class="border border-green-600">{{$volunt->type}} </td>
                <td class="border border-green-600">{{$volunt->created_at}} </td>
                <td class="border border-green-600">{{$volunt->updated_at}} </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</x-app-layout>
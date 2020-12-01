<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Volunteers
        </h2>
    </x-slot>

    <table class="p-2 table-auto border-separate border border-green-600">
        <thead>
            <tr>
                <th>id</th>
                <th>x</th>
                <th>Edit</th>
                <th>Name</th>
                <th>Address</th>
                <th>Birthdate</th>
                {{-- <th>Certificate</th> --}}
                {{-- <th>job</th> --}}
                {{-- <th>Telephone</th> --}}
                <th>E-mail</th>
                <th>Mobile</th>
                <th>Location</th>
                {{-- <th>Experience</th> --}}
                <th>Kind</th>
                {{-- <th>Join Before</th> --}}
                <th>Place</th>
                <th>Type</th>
                {{-- <th>Created At</th> --}}
                <th>Updated At</th>
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
                {{-- <td>{{$volunt->certificate}}</td>
                <td>{{$volunt->job}}</td> --}}
                {{-- <td>{{$volunt->telephone}}</td> --}}
                <td class="border border-green-600">{{$volunt->email}}</td>
                <td class="border border-green-600">{{$volunt->mobile}}</td>
                <td class="border border-green-600">{{$volunt->location}} </td>
                {{-- <td>{{$volunt->whatYouHaveDone}}</td> --}}
                <td class="border border-green-600">{{$volunt->KindOfVolentering}}</td>
                {{-- <td>{{$volunt->joinBefore}} </td> --}}
                <td class="border border-green-600">{{$volunt->place}} </td>
                <td class="border border-green-600">{{$volunt->type}} </td>
                {{-- <td>{{$volunt->created_at}} </td> --}}
                <td class="border border-green-600">{{$volunt->updated_at}} </td>
            </tr>
            @empty

            @endforelse
        </tbody>
    </table>
</x-app-layout>
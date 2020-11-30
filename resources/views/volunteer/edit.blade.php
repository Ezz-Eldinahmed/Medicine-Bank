<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <form class="p-5" method="POST" action="/volunteer/{{$volunteer->id}}/update">
            @csrf
            @method('PUT')

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Volunteering Data
            </h2>
            <div class="grid grid-cols-2 gap-2 max-w-xl m-auto">

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="name"
                        value="{{$volunteer->name}}" placeholder="Name" required />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="date" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$volunteer->birthdate}}" name="birthdate" required placeholder="Birth date" />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="job"
                        value="{{$volunteer->job}}" placeholder="Current Job" />
                </div>

                <div class="col-span-3">
                    <input type="email" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$volunteer->email}}" name="email" placeholder="Email Address" />
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$volunteer->certificate}}" name="certificate" placeholder="Certificate" />
                </div>

                <div class="col-span-3">
                    <input type="text" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$volunteer->address}}" name="address" placeholder="Address" />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="text" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$volunteer->telephone}}" name="telephone" placeholder="telephone" />
                </div>

                <div class="col-span-2">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="mobile"
                        value="{{$volunteer->mobile}}" placeholder="Mobile" />
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$volunteer->location}}" name="location" placeholder="location" />
                </div>

                <span class="col-span-3">Have You Joined Any Type Of Charity</span>
                <div class="col-span-3 mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="joinBefore" value="1" @if((
                            $volunteer->location)==1 ) checked @endif>
                        <span class="ml-2">yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="joinBefore" value="0" @if((
                            $volunteer->location)==0 ) checked @endif>
                        <span class="ml-2">No</span>
                    </label>
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="type"
                        value="{{$volunteer->type}}" placeholder="type Your Work" />
                </div>
                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="place"
                        value="{{$volunteer->place}}" placeholder="Place Of Work" />
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        value="{{$volunteer->whatYouHaveDone}}" name="whatYouHaveDone" placeholder="Jobs Do You Do ?" />
                </div>

                <label class="col-span-3">
                    <span class="text-gray-700">Types</span>
                    <select name="KindOfVolentering" class="form-select mt-1 block w-full">
                        <option value="collect">Collect Of Drugs</option>
                        <option value="doctors">Doctors For Charity</option>
                        <option value="sort">Sort of Drugs</option>
                        <option value="prepare">Prepare Of Drugs</option>
                    </select>
                </label>

                <div class="col-span-2 text-right">
                    <button class="py-3 px-6 bg-green-500 text-white font-bold w-full sm:w-32">
                        Volunteer Edit
                    </button>
                </div>
            </div>

        </form>
    </div>

</x-app-layout>
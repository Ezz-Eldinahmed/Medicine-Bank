<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ready for volunteering ?
        </h2>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

        <form class="p-5" method="POST" action="{{ route('volunter') }}">
            @csrf

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Volunteering Form
            </h2>
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
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="job"
                        placeholder="Current Job" />
                </div>

                <div class="col-span-3">
                    <input type="email" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="email" placeholder="Email Address" />
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="certificate" placeholder="Certificate" />
                </div>

                <div class="col-span-3">
                    <input type="text" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="address" placeholder="Address" />
                </div>

                <div class="col-span-2 lg:col-span-1">
                    <input type="text" required class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="telephone" placeholder="telephone" />
                </div>

                <div class="col-span-2">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="mobile"
                        placeholder="Mobile" />
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="location" placeholder="location" />
                </div>

                <span>Have You Joined Any Type Of Charity</span>
                <div class="mt-2">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="joinBefore" value="1">
                        <span class="ml-2">yes</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="joinBefore" value="0">
                        <span class="ml-2">No</span>
                    </label>
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="type"
                        placeholder="type Your Work" />
                </div>
                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full" name="place"
                        placeholder="Place Of Work" />
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-solid border-gray-10 border-2 p-3 md:text-xl w-full"
                        name="whatYouHaveDone" placeholder="Jobs Do You Do ?" />
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
                        Volunteer
                    </button>
                </div>
            </div>

        </form>
    </div>

</x-app-layout>
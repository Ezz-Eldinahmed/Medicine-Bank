<?php

namespace App\Http\Controllers;

use App\Models\volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volunteer = volunteer::paginate(10);
        return view('volunteer.index', ['volunteer' => $volunteer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['name' => 'required', 'birthdate' => 'required']);
        volunteer::create([
            'name' => $request->name,
            'birthdate' => $request->birthdate,
            'joinBefore' => $request->joinBefore,
            'job' => $request->job,
            'email' => $request->email,
            'certificate' => $request->certificate,
            'address' => $request->address,
            'mobile' => $request->mobile,
            'telephone' => $request->telephone,
            'location' => $request->location,
            'type' => $request->type,
            'KindOfVolentering' => $request->KindOfVolentering,
            'place' => $request->place,
            'whatYouHaveDone' => $request->whatYouHaveDone,
        ]);
        return redirect('/volunteer/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $volunteer = volunteer::find($id);
        return view('volunteer.show', ['volunteer' => $volunteer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $volunteer = volunteer::find($id);
        return view('volunteer.edit', ['volunteer' => $volunteer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $volunteer = volunteer::find($id);

        $validatedAttributes =
            $request->validate([
                'name' => 'required', 'birthdate' => 'required',
                'joinBefore' => 'nullable', 'job' => 'nullable', 'email' => 'nullable',
                'certificate' => 'nullable', 'address' => 'nullable',
                'mobile' => 'nullable', 'telephone' => 'nullable',
                'type' => 'nullable', 'KindOfVolentering' => 'nullable',
                'place' => 'nullable', 'whatYouHaveDone' => 'nullable',
                'location' => 'nullable',
            ]);
        $volunteer->update($validatedAttributes);

        return redirect('/volunteer/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $volunteer = volunteer::find($id);
        $volunteer->delete();
        return redirect('/volunteer/index');
    }
}

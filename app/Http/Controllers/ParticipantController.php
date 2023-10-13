<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use illuminate\support\Facades\DB;

use App\Http\Requests\StoreParticipantRequest;
use App\Http\Requests\UpdateParticipantRequest;

class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('back.participants.index');
        return view('back.participants.index', ['participants'=> Participant::orderBy('nom','asc')->get() ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreParticipantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participants = new Participant();

        $participants->nom = $request->input('nom');
        $participants->prenom = $request->input('prenom');
        $participants->email = $request->input('email');
        $participants->tel = $request->input('tel');
        $participants->fonction = $request->input('fonction');
        $participants->organisation = $request->input('organisation');
        //$participants->reponse = $request->input('reponse');
        // $participants->qr_code = $request->input('qr_code');
        $participants->save();
        // return view('back.participants.index', ['participants'=> Participant::orderBy('nom','asc')->get() ]);
        return redirect('/participants')->with("succesfull");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateParticipantRequest  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateParticipantRequest $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }
}

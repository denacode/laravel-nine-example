<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Study;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::all();

        return view('studies.list', [ 'studies' => $studies ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Study $study)
    {
        return view('studies.create', [ 'study' => $study ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Study::create($request->all());

        return redirect('studies')->with('alert', alert('success', 'Estudo salvo com sucesso!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        if(!$study) redirect()->back()->with('alert', alert('danger', 'Estudo não encontrado!'));
        return view('studies.edit', [ 'study' => $study ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study $study)
    {
        if(!$study) redirect()->back()->with('alert', alert('danger', 'Estudo não encontrado!'));

        $study->update($request->all());

        return redirect('studies')->with('alert', alert('success', 'Estudo salvo com sucesso!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $studyId = $request->study_id;

        if(!$studyId) redirect()->back()->with('alert', alert('danger', 'Código do estudo não informado!'));
        $study = Study::findOrFail($studyId);

        $study->delete();

        return redirect('studies')->with('alert', alert('success', 'Estudo excluído com sucesso!'));;
    }
}

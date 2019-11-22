<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\School;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request, Builder $htmlBuilder)
    {
        if($request->ajax()) {
            $schools = School::with('city')->get();
            return Datatables::of($schools)
                ->addIndexColumn()
                ->addColumn('action', function($school){
                    return view('datatable._action', [
                        'model'             => $school,
                        'form_url'          => route('schools.destroy', $school->id),
                        'edit_url'          => route('schools.edit', $school->id),
                        'confirm_message'   => 'Yakin mau menghapus ' . $school->id . '?'
                    ]);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'DT_Row_Index', 'name' => 'nomor', 'title' => 'No.',  'orderable'=>'false'])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => 'Nama Sekolah'])
            ->addColumn(['data' => 'address', 'name' => 'address', 'title' => 'Alamat'])
            ->addColumn(['data' => 'city.name', 'name' => 'city.name', 'title' => 'Kota', 'searchable'=>'true'])
            ->addColumn(['data' => 'phone', 'name' => 'phone', 'title' => 'Telpon'])
            ->addColumn(['data' => 'website', 'name' => 'website', 'title' => 'Website'])
            ->addColumn(['data' => 'email', 'name' => 'email', 'title' => 'Email'])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title'=>'', 'orderable'=>'false', 'searchable'=>'false']);
        
            return view('schools.index', compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

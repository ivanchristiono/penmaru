<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Collective\Html\HtmlBuilder;

use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\City;
use App\Role;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request, builder $htmlBuilder)
    {
        if($request->ajax()) {
            $cities = City::with('province')->get();
            return Datatables::of($cities)
                ->addIndexColumn()
                ->addColumn('action', function($city){
                    return view('datatable._action', [
                        'model'             => $city,
                        'form_url'          => route('cities.destroy', $city->id),
                        'edit_url'          => route('cities.edit', $city->id),
                        'confirm_message'   => 'Yakin mau menghapus ' . $city->id . '?'
                    ]);
                })->make(true);
        }

        $html = $htmlBuilder
            ->addColumn(['data' => 'DT_Row_Index', 'name' => 'nomor', 'title' => 'No.',  'orderable'=>'false'])
            ->addColumn(['data' => 'name', 'name' => 'name', 'title' => 'Kota'])
            ->addColumn(['data' => 'province.name', 'name' => 'province.name', 'title' => 'Provinsi'])
            ->addColumn(['data' => 'action', 'name' => 'action', 'title'=>'', 'orderable'=>'false', 'searchable'=>'false']);
        
            return view('cities.index', compact('html'));
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables;
use Yajra\Datatables\Facades;
use Yajra\Datatables\Html\Builder;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request, Builder $htmlBuilder)
    {
        {
            if($request->ajax()) {
                $events = Event::with('event_type,', 'school');
                return Datatables::of($events)
                    ->addColumn('action', function($event){
                        return view('datatable._action', [
                            'model'             => $event,
                            'form_url'          => route('events.destroy', $event->id),
                            'edit_url'          => route('events.edit', $event->id),
                            'confirm_message'   => 'Yakin mau menghapus ' . $event->school('name') . '?'
                        ]);
                    })->make(true);
            }
    
            $html = $htmlBuilder
                ->addColumn(['data' => 'title', 'name' => 'title', 'title' => 'Judul'])
                ->addColumn(['data' =>'amount', 'name' => 'amount', 'title' => 'Jumlah'])
                ->addColumn(['data' => 'author.name', 'name' => 'author.name', 'title' => 'Penulis'])
                ->addColumn(['data' => 'action', 'name' => 'action', 'title'=>'', 'orderable'=>'false', 'searchable'=>'false']);
            
                return view('events.index')->with(compact('html'));
        }
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

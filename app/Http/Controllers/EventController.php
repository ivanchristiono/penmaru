<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use App\Role;

use App\EventType;
use App\School;
use App\Event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request, Builder $htmlBuilder)
    {
            if($request->ajax()) {
                $events = Event::with('school', 'event_type')->get();
                return Datatables::of($events)
                    ->addIndexColumn()
                    ->addColumn('action', function($event){
                        return view('datatable._action', [
                            'model'             => $event,
                            'form_url'          => route('events.destroy', $event->id),
                            'edit_url'          => route('events.edit', $event->id),
                            'confirm_message'   => 'Yakin mau menghapus ' . $event->id . '?'
                        ]);
                    })->make(true);
            }
    
            $html = $htmlBuilder
                ->addColumn(['data' => 'DT_Row_Index', 'name' => 'nomor', 'title' => 'No.',  'orderable'=>'false'])
                ->addColumn(['data' => 'event_type.name', 'name' => 'event_type.name', 'title' => 'Tipe Acara'])
                ->addColumn(['data' => 'school.name', 'name' => 'school.name', 'title' => 'Sekolah'])
                ->addColumn(['data' => 'date_start', 'name' => 'date_start', 'title' => 'Tanggal Mulai'])
                ->addColumn(['data' => 'date_finish', 'name' => 'date_finish', 'title' => 'Tanggal Selesai'])
                ->addColumn(['data' => 'time_at', 'name' => 'time_at', 'title' => 'Jam Mulai'])
                ->addColumn(['data' => 'time_until', 'name' => 'time_until', 'title' => 'Jam Selesai'])
                ->addColumn(['data' => 'staff_name', 'name' => 'staff_name', 'title' => 'Petugas'])
                ->addColumn(['data' => 'location', 'name' => 'location', 'title' => 'Tempat Lokasi'])
                ->addColumn(['data' =>'notes', 'name' => 'notes', 'title' => 'Keterangan'])
                ->addColumn(['data' => 'action', 'name' => 'action', 'title'=>'', 'orderable'=>'false', 'searchable'=>'false']);
            
                return view('events.index', compact('html'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
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

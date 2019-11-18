@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb">
                    <li><a href="{{ url('/') }}">Dashboard</a></li>
                    <li class="active">Events</li>
                </ul>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="panel-title">Events</h2>
                    </div>
                    <div class="panel-body">
                        <p> <a class="btn btn-primary" href="{{ url('/admin/events/create') }}">Tambah</a>
                        </p>
                        {!! $html->table(['class'=>'table-striped table-responsive']) !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('scripts')
    {!! $html->scripts() !!}
@endsection
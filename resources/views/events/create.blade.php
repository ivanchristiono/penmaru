@extends('layouts.app')
    
@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
        <div class="content-header-left col-md-6 col-12 mb-2">
          <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Events</a>
                </li>
              </ol>
            </div>
          </div>
          <h3 class="content-header-title mb-0">Events</h3>
        </div>
        <div class="content-header-right col-md-6 col-12">
          <div class="btn-group float-md-right" role="group" aria-label="Button group with nested dropdown">
            <div class="btn-group" role="group">
              <button class="btn btn-outline-primary dropdown-toggle dropdown-menu-right" id="btnGroupDrop1"
              type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ft-settings icon-left"></i> Settings</button>
              <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"><a class="dropdown-item" href="card-bootstrap.html">Bootstrap Cards</a>
                <a class="dropdown-item" href="component-buttons-extended.html">Buttons Extended</a>
              </div>
            </div>
            <a class="btn btn-outline-primary" href="full-calender-basic.html"><i class="ft-mail"></i></a>
            <a class="btn btn-outline-primary" href="timeline-center.html"><i class="ft-pie-chart"></i></a>
          </div>
        </div>
      </div>
    <div class="content-body">
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h4 class="card-title">Add Event</h4>
                <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
                </div>
                <div class="card-content collapse show">
                <div class="card-body card-dashboard">
                    {!! Form::open(['url' => route('events.store'),
                    'method' => 'post', 'files'=>'true', 'class'=>'form-horizontal']) !!}
                    @include('events._form')
                    {!! Form::close() !!}
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</div>
@endsection
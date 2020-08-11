@extends('backend.hoteladmin.main')

@section('content')

<div class="row">
    <div class="col-md-12">    
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title-box">
            <h3>Booked Room Details</h3>
            <span>&nbsp;</span>
          </div>
          <ul class="panel-controls" style="margin-top: 2px;">
            <li class="dropdown">
              <a href="{{url('/hotel/admin/available')}}" class="dropdown-toggle"><span class="fa fa-file-o"></span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand">&nbsp;</span>Maximize</a></li>
                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down">&nbsp;</span>Collapse</a></li>
                <li><a href="#" class="panel-refresh"><span class="fa fa-refresh">&nbsp;</span>Refresh</a></li>
                <li><a href="#" class="panel-remove"><span class="fa fa-times">&nbsp;</span>Remove</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="panel-body">
        	<div class="row">
            <div class="col-md-12">

            </div>
          </div>
          <hr>
          <div class="row">
            <div class="table-responsive">
              <table class="table datatable" id="dttbl">
                <thead>
                    <tr>
                    <th>Roomtype</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Room Count</th>
                    <th>Status</th>
                    <th width="200px;">ACTION</th>            
                    </tr>
                </thead>
                <tbody>
                @foreach($availabilities as $key => $value)
                    <tr>
                      <td>{{ $value->roomtype }}</td>
                      <td>{{ $value->startdate }}</td>
                      <td>{{ $value->enddate }}</td>
                      <td>{{ $value->roomcount }}</td>
                      <td>
                      @if($value->sts==1)<span class="badge badge-success">Booked</span>
                      @else($value->sts==0)<span class="badge badge-danger">Canel</span>
                      @endif 
                      </td>
                      <td class="project-actions">
                          <a class="btn btn-info btn-sm" href="" title="Preview">
                              <i class="fa fa-eye"> </i>
                          </a>
                          <a class="btn btn-warning btn-sm" href="" title="Edit">
                              <i class="fa fa-edit"></i>
                          </a>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
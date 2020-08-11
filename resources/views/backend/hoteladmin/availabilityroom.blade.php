@extends('backend.hoteladmin.main')

@section('content')
<ul class="breadcrumb">
  <li><a href="#">Home</a></li>
  <li><a href="#" class="brkmn" id="0" name="cusmass_home.php">Check Room Availability</a></li>
  <li class="active">Check Room Availability </li>
</ul>
<!--START PAGE-->
<div class="page-content-wrap">
<div class="col-md-12">
<div class="panel panel-default">
<form class="form-horizontal" name="frmcu" id="frmcu" action="{{url('/availability/save')}}" method="POST">
{{ csrf_field() }}  
<div class="panel-heading">
  <div class="panel-title-box">
    <h3>&nbsp;ROOM AVAILABILITY</h3>
  </div>
  <div class="pull-right">
    <button type="submit" class="btn btn-success" id="savfm"><span class="fa fa-floppy-o">&nbsp;</span>Save</button>
    <a  href="{{url('/hotel/admin')}}" class="btn btn-danger" id="clofm"><span class="fa fa-times">&nbsp;</span>Close</a>
  </div>
</div>
<div class="panel-body">

    <div class="row" style="padding-top:5px;">
    <div class="col-md-6">
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Start Date</label>
        <div class="col-md-6 col-xs-12">
        	<input type="date" class="form-control" name="stdate" id="stdate" value="" autocomplete="off" required/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">End Date</label>
        <div class="col-md-6 col-xs-12">
          <input type="date" class="form-control" name="endate" id="endate" value="" autocomplete="off" required/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 control-label text-left">Category</label>
        <div class="col-md-6">
        <select class="form-control select" id="roomcategory"  name="roomcategory" required>
                <option value="" selected>Select Category</option>
                <option value="Standard">Standard</option>
                <option value="Superior">Superior</option>
                <option value="Deluxe">Deluxe</option>
                <option value="Sub-Standard">Sub-Standard</option>
                <option value="Sub-Superior">Sub-Superior</option>
                <option value="Sub-Deluxe">Sub-Deluxe</option>
            </select>
        </div>
    </div>
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Room Count</label>
        <div class="col-md-6 col-xs-12">
          <input type="text" class="form-control" name="roomcount" id="roomcount" value="" autocomplete="off" required/>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-3 col-xs-12 control-label text-left">Description</label>
        <div class="col-md-6 col-xs-12">
          <textarea class="form-control" name="rmrk" id="rmrk" rows="4" required></textarea>
        </div>
      </div>
    </div>
    <div class="col-md-6">

    </div>

  </div>
</div>
</form>
@stop

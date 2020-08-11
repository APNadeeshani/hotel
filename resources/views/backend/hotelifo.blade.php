<!DOCTYPE html>
<html lang="en">
<head>
<title>Resturant MNG</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon" href="img/myebus_logo.jpg" type="image/x-icon" />
<link rel="icon" href="{{asset('img/myebus_logo.jpg')}}" type="image/x-icon" />
<link rel="stylesheet" type="text/css" id="theme" href="{{asset('css/theme-default.css')}}"/>
</head>
<body>
<div class="page-container page-navigation-toggled">
<div class="page-content">
<style>


.regular-checkbox {
	-webkit-appearance: none;
	background-color: #fafafa;
	border: 9px solid #cacece;
	box-shadow: 0 1px 2px rgba(0,0,0,0.05), inset 0px -15px 10px -12px rgba(0,0,0,0.05);
	padding: 9px;
	border-radius: 3px;
	display: inline-block;
	
}


.regular-checkbox:checked:after {
	content: '\2714';
	font-size: 23px;
	position: absolute;
	top: 0px;
	left: 3px;
	color: #40b915;
}

</style>

<ul class="breadcrumb">

  <li class="active">Hotels Registration</li>
</ul>
<!--START PAGE-->
<div class="page-content-wrap">
<div class="col-md-12">
<div class="panel panel-default">
<form class="form-horizontal" name="frmcu" id="frmcu" action="{{url('/hotelinfomation/save')}}" method="POST">
{{ csrf_field() }}  
<div class="panel-heading">
  <div class="panel-title-box">
    <h3>&nbsp;HOTEL REGISTRATION</h3>
  </div>
  <div class="pull-right">
    <button type="submit" class="btn btn-success" id="savfm"><span class="fa fa-floppy-o">&nbsp;</span>Save</button>
    <a  href="{{url('/')}}" class="btn btn-danger" id="clofm"><span class="fa fa-times">&nbsp;</span>Close</a>
  </div> 
</div>
<div class="panel-body">

    <div class="row" style="padding-top:5px;">
        <h3 class="text-title">General Information</h3>
        <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Property Name</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="prpname" id="prpname" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Property Type </label>
            <div class="col-md-7 col-xs-12">
            <select class="form-control select" id="star" name="star" required>
                <option value="" selected>Select Property Type </option>
                <option value="1">1 star</option>
                <option value="3">3 star</option>
                <option value="4">4 star</option>
                <option value="5">5 star</option>
                <option value="6">Unrated</option>
            </select>
            </div>
        </div>
        <div class="form-group"> <!-- advance -->
            <label class="col-md-3 col-xs-12 control-label text-left">KM</label>
            <div class="col-md-7 col-xs-12">
            <select class="form-control select" id="km" name="km" required>
                <option value="" selected>Select KM </option>
                <option value="1">1 KM</option>
                <option value="2">3 KM</option>
                <option value="2">5 KM</option>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Description </label>
            <div class="col-md-7 col-xs-12">
            <textarea class="form-control" rows="4" cols="50" name="description" id="description" required></textarea> 
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Address</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="address" id="address" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-3 control-label text-left">Category</label>
        <div class="col-md-7">
        <select class="form-control select" id="type" name="type" required>
                <option value="" selected>Select Category</option>
                <option value="1">Hotels</option>
                <option value="2">Resorts</option>
                <option value="3">Guest House</option>
                <option value="4">Apartments</option>
                <option value="5">Camp Side</option>
            </select>
        </div>
    </div>
    <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Day Outing </label>
            <div class="col-md-7 col-xs-12">
            <select class="form-control select" id="dayouting" name="dayouting" required>
                <option value="" selected>Select Day Outing</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            </div>
        </div>
        <div class="form-group"> <!-- advance -->
            <label class="col-md-3 col-xs-12 control-label text-left">Destination</label>
            <div class="col-md-7 col-xs-12">
            <select class="form-control select" name="destination" id="destination" required>
                    <option  value="">select Destination</option>
                    @foreach($destinationdata AS $desData)
                    <option  value="{{$desData->id}}">{{$desData->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Password</label>
            <div class="col-md-7 col-xs-12">
                <input type="password" class="form-control" name="password" id="password" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Confirm Password</label>
            <div class="col-md-7 col-xs-12">
                <input type="password" class="form-control" name="confirm" id="confirm" value="" autocomplete="off" required/>
            </div>
        </div>
        </div>
    </div>

    <br>

    <div class="row" style="padding-top:5px;">
        <div class="col-md-6">
        <h3 class="text-title">Owner’s Contact Details</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Name </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="ownername" id="ownername" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Contact Number</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="phone" id="phone" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Email Address</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="email" id="email" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">WhatsApp </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="mobile" id="mobile" value="" autocomplete="off" required/>
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <h3 class="text-title">Secondary Contact Details</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Name</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="seconname" id="seconname" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Contact Number</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="seconmobile" id="seconmobile" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Email Address </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="seconemail" id="seconemail" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Designation </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="seconDesignation" id="seconDesignation" value="" autocomplete="off" required/>
            </div>
        </div>
        </div>
    </div>
<br>
    <div class="row" style="padding-top:5px;">
        <div class="col-md-6">
        <h3 class="text-title">Seasonal Months</h3>
        <div class="form-group " >
            <label class="col-md-3 col-xs-12 control-label text-left "><input class="regular-checkbox"  type="checkbox" >&nbsp;&nbsp;&nbsp;January</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input  class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;February</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input  class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;March</label>
            
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left"><input  class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;April</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input  class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;May</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input  class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;June</label>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left"><input  class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;July</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;August</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input  class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;September</label>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;October</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;November</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;December</label>
        </div>
        </div>
        <div class="col-md-6">
        <h3 class="text-title">Off-Season</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;January</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;February</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;March</label>
            
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;April</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox" type="checkbox">&nbsp;&nbsp;&nbsp;May</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;June</label>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;July</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;August</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;September</label>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;October</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;November</label>
            <label class="col-md-3 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox">&nbsp;&nbsp;&nbsp;December</label>
        </div>
        </div>
    </div>
<BR>

<div class="row" style="padding-top:5px;">
<h3 class="text-title">OTA Details</h3>
    <div class="col-md-12">
        <table class="table datatable">
            <tr>
                <th>OTA</th>
                <th>Property ID</th>
                <th>Login ID</th>
                <th>Password</th>
            </tr>
            <tr>
                <td>Booking.com</td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>Agoda</td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>Expedia</td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>Airbnb</td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>TripAdvisor</td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>Ctrip</td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>MMT</td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
            </tr>
            <tr>
                <td>Other</td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
                <td><input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off"/></td>
            </tr>
        </table>
    </div>
</div>
<div class="row" style="padding-top:5px;">
<h3 class="text-title">Rooms Details </h3>
        <div class="col-md-6">
        <h3 class="text-title">Standard</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Display Name </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="stndname" id="stndname" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">No. of Rooms</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="stndrooms" id="stndrooms" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Bed  type</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="standbedtype" id="standbedtype" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Room Size (sqft)  </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="standroomsize" id="standroomsize" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Description </label>
            <div class="col-md-7 col-xs-12">
              <textarea class="form-control" rows="4" cols="50" name="standdescription" id="standdescription" required></textarea> 
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <h3 class="text-title">Superior</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Display Name </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="supername" id="supername" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">No. of Rooms</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="supercount" id="supercount" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Bed  type</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="supertype" id="supertype" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Room Size (sqft) </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="supersize" id="supersize" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Description </label>
            <div class="col-md-7 col-xs-12">
            <textarea class="form-control" rows="4" cols="50" name="superdescription" id="superdescription" required></textarea> 
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <h3 class="text-title">Deluxe</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Display Name </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="deluxname" id="deluxname" value="" autocomplete="off" required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">No. of Rooms</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="deluxcount" id="deluxcount" value="" autocomplete="off"required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Bed type</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="deluxbedtype" id="deluxbedtype" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Room Size (sqft)  </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="deluxroomsize" id="deluxroomsize" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Description </label>
            <div class="col-md-7 col-xs-12">
              <textarea class="form-control" rows="4" cols="50" name="deluxdescription" id="deluxdescription" required></textarea> 
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <h3 class="text-title">Sub-Standard</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Display Name </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="substnname" id="substnname" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">No. of Rooms</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="substandcount" id="substandcount" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Bed type</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="substandtype" id="substandtype" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Room Size (sqft)  </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="substandsize" id="substandsize" value="" autocomplete="off"required />
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Description </label>
            <div class="col-md-7 col-xs-12">
            <textarea class="form-control" rows="4" cols="50" name="substanddescript" id="substanddescript" required></textarea> 
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <h3 class="text-title">Sub-Superior</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Display Name </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="subsupriorname" id="subsupriorname" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">No. of Rooms</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="subsupirorooms" id="subsupirorooms" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Bed type</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="subsupiriotype" id="subsupiriotype" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Room Size (sqft)  </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="subsupiriosize" id="subsupiriosize" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Description </label>
            <div class="col-md-7 col-xs-12">
              <textarea class="form-control" rows="4" cols="50" name="subsupiriodescrip" id="subsupiriodescrip" required></textarea> 
            </div>
        </div>
        </div>
        <div class="col-md-6">
        <h3 class="text-title">Sub-Deluxe</h3>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Display Name</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="subdeluxname" id="subdeluxname" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">No. of Rooms</label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="subdeluxrooms" id="subdeluxrooms" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Bed type </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="subdeluxbed" id="subdeluxbed" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Room Size (sqft) </label>
            <div class="col-md-7 col-xs-12">
                <input type="text" class="form-control" name="subdulaxsize" id="subdulaxsize" value="" autocomplete="off" required/>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 col-xs-12 control-label text-left">Description </label>
            <div class="col-md-7 col-xs-12">
            <textarea class="form-control" rows="4" cols="50" name="subdeluxdescrit" id="subdeluxdescrit" required></textarea> 
            </div>
        </div>
        </div>
    </div>

    <div class="row" style="padding-top:5px;">
    <h3 class="text-title">Facilities</h3>
        <div class="col-md-12">
        <div class="form-group">
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="pool" id="pool" value="1">&nbsp;&nbsp;&nbsp;Swimming pool</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="breakfast" id="breakfast" value="1">&nbsp;&nbsp;&nbsp;Breakfast included</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="privatebathroom" id="privatebathroom">&nbsp;&nbsp;&nbsp;Private bathroom</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="beachfront" id="beachfront">&nbsp;&nbsp;&nbsp;Beachfront</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="ac" id="ac">&nbsp;&nbsp;&nbsp;Air conditioning</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="apartments" id="apartments">&nbsp;&nbsp;&nbsp;Apartments</label>
            
        </div>
        <div class="form-group">
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="breakfastdinner" id="breakfastdinner">&nbsp;&nbsp;&nbsp;Breakfast & dinner included</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="seaview" id="seaview">&nbsp;&nbsp;&nbsp;Sea view</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="bath" id="bath">&nbsp;&nbsp;&nbsp;Bath</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="balcony" id="balcony">&nbsp;&nbsp;&nbsp;Balcony</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="spabath" id="spabath">&nbsp;&nbsp;&nbsp;Spa Bath</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="beds" id="beds">&nbsp;&nbsp;&nbsp; beds</label>
        </div>
        <div class="form-group">
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="kitchen" id="kitchen">&nbsp;&nbsp;&nbsp;Kitchen/kitchenette</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="freewifi" id="freewifi">&nbsp;&nbsp;&nbsp;Free WiFi</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="hiking" id="hiking">&nbsp;&nbsp;&nbsp;Hiking</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="walking" id="walking">&nbsp;&nbsp;&nbsp;Walking tours</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="bicyclerental" id="bicyclerental">&nbsp;&nbsp;&nbsp;Bicycle rental (additional charge)</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="tourorclz" id="tourorclz">&nbsp;&nbsp;&nbsp;Tour or class about local culture</label>
        </div>
        <div class="form-group">
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="coffeemachine" id="coffeemachine">&nbsp;&nbsp;&nbsp;Coffee machine</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="terrence" id="terrence">&nbsp;&nbsp;&nbsp;Terrace</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="flat" id="flat">&nbsp;&nbsp;&nbsp;Flat-screen TV</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="washingmachine" id="washingmachine">&nbsp;&nbsp;&nbsp;Washing Machine</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="electrickettle" id="electrickettle">&nbsp;&nbsp;&nbsp;Electric kettle</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="coffeemaker" id="coffeemaker">&nbsp;&nbsp;&nbsp;Coffee/tea maker</label>
        </div>
        <div class="form-group">
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="airportshuttle" id="airportshuttle">&nbsp;&nbsp;&nbsp;Airport shuttle</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="parking" id="parking">&nbsp;&nbsp;&nbsp;Parking</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="nonsmorking" id="nonsmorking">&nbsp;&nbsp;&nbsp;Non-smoking rooms</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="familyroom" id="familyroom">&nbsp;&nbsp;&nbsp;Family rooms</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="fitness" id="fitness">&nbsp;&nbsp;&nbsp;Fitness centre</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="selfcatering" id="selfcatering">&nbsp;&nbsp;&nbsp;Self catering</label>
        </div>
        <div class="form-group">
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="mealinclude" id="mealinclude">&nbsp;&nbsp;&nbsp;All meals included</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="allinclusive" id="allinclusive">&nbsp;&nbsp;&nbsp;All-inclusive</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="breakfastlunch" id="breakfastlunch">&nbsp;&nbsp;&nbsp;Breakfast & lunch included</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="spawellness" id="spawellness">&nbsp;&nbsp;&nbsp;Spa and wellness centre</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="pets" id="pets">&nbsp;&nbsp;&nbsp;Pets allowed</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox"  type="checkbox" name="electric" id="electric">&nbsp;&nbsp;&nbsp;Electric vehicle charging station</label>
        </div>
        <div class="form-group">
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox" type="checkbox" name="cooking" id="cooking">&nbsp;&nbsp;&nbsp;Cooking class</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox" type="checkbox" name="free" id="free">&nbsp;&nbsp;&nbsp;Free cancellation</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox" type="checkbox" name="bookwithoutcreadit" id="bookwithoutcreadit">&nbsp;&nbsp;&nbsp;Book without credit card</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox" type="checkbox" name="nopayment" id="nopayment">&nbsp;&nbsp;&nbsp;No prepayment</label>
            <label class="col-md-2 col-xs-12 control-label text-left"><input class="regular-checkbox" type="checkbox" name="hottub" id="hottub">&nbsp;&nbsp;&nbsp;Hot Tub</label>
            
        </div>
        </div>
    </div>

    

</div>
</form>
</div>
</div>
</div>
<!--END PAGE-->
</div>
</div>
<!-- POST FORM -->
<!-- END POSTING -->


   <!-- START PLUGINS -->
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/jquery/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->
<script type="text/javascript" src="{{asset('js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/scrolltotop/scrolltopcontrol.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/owl/owl.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/nvd3/lib/d3.v3.js')}}"></script>        
<script type="text/javascript" src="{{asset('js/plugins/nvd3/nv.d3.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/bootstrap/bootstrap-select.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<!-- END THIS PAGE PLUGINS-->        

<?php //include 'menu_bar_action.php'; ?>
<!-- START TEMPLATE -->
<script type="text/javascript" src="{{asset('js/settings.js')}}"></script>
<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('js/actions.js')}}"></script>
<script type="text/javascript" src="{{asset('js/my_functions.js')}}"></script>
<!-- END TEMPLATE -->
<script src="{{ asset('js/alertify.min.js') }}"></script>
<!-- PAGE ACTION -->
  <!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  <!-- Font Awesome -->
  
<?php //include 'menu_bar_action.php'; ?>

</body>
</html>
@if (session('success'))
    <script type="text/javascript">
      alertify.success('{{ session('success') }}');
    </script>
@elseif(session('error'))
    <script type="text/javascript">
      alertify.error('{{ session('error') }}');
    </script>
@endif
<script type="text/javascript">
//Press enter key focus next element
$(document).ready(function(){
	$('input,textarea,select').not($(":button")).keypress(function(evt){
		if(evt.keyCode==13){
			iname=$(this).val();
			if(iname!=='Submit'){
				var fields=$(this).parents('form:eq(0),body').find('input:visible:not([disabled],[readonly]),textarea,select:visible:not([disabled],[readonly])');
				var index=fields.index(this);
				if(index>-1 && (index+1)<fields.length){
					fields.eq(index+1).focus();
				}
				return false;
			}
		}
	});
});
</script>
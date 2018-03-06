@extends('layouts.index')
@section('content')



<form action="#" name="myForm" method="post" onsubmit="return(validate());">
        <div class="container">
            <div class="row col-xs-6">
                <div class="well center-block">
                    <div class="well-header">
                        <h3 class="text-center text-success"> Register Here! </h3>
                        <hr>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <input type="text" placeholder="First Name" name="txtfname" class="form-control">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-user"></i>
                                    </div>
                                    <input type="text" placeholder="Last Name" name="txtlname" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-lock"></i>
                                    </div>
                                    <input type="password" minlength="8" maxlength="20" placeholder="Password" name="txtpass" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-phone"></i>
                                    </div>
                                    <input type="number" minlength="10" maxlength="12" class="form-control" name="txtmobile" placeholder="Mobile No.">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-envelope"></i>
                                    </div>
                                    <input type="email" class="form-control" name="txtmail" placeholder="E-Mail">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-list-alt"></i>
                                    </div>
                                    <textarea class="form-control" name="txtadd" placeholder="Address"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">
                                        <i class="glyphicon glyphicon-calendar"></i>
                                    </div>
                                    <input type="text" name="dob" placeholder="Date Of Birth" class="form-control" id="datepicker">
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="row widget">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <button class="btn btn-warning btn-block"> Submit </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    
    </form>

    @endsection
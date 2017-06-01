@extends('layouts.masterlogged')

@section('content')


    <script src="js/profile.js"></script>

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/212110-200.png" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            {{ auth()->user()->name }}
                        </div>
                        <div class="profile-usertitle-job">
                            User
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu " >
                        <ul class="nav">

                            <li>
                                <a href="#"  id="toggleAccsettings">
                                    <i class="glyphicon glyphicon-user" ></i>
                                    Account Settings </a>
                            </li>
                            <li>
                                <a href="#" id="toggleKids">
                                    <i class="glyphicon glyphicon-baby-formula"></i>
                                    Kids </a>
                            </li>
                            <li>
                                <a href="#" id="toggleGroups">
                                    <i class="glyphicon glyphicon-folder-open"></i>
                                    Groups </a>
                            </li>
                            <li>
                                <a href="#" id="toggleNotifications">
                                    <i class="glyphicon glyphicon-list"></i>
                                    Notifications </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>



        <div  id="accsettings" >
            <div class= id="signupContainer">

                <form class="form-signin">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-4">
                                <div class=" panel-default">
                                    <div class="panel panel-primary">

                                        <h3 class="text-center">
                                            Update Account</h3>
                                    <form>
                                        <div class="panel-body">

                                            <div class="form-group">
                                                <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                                                    <input type="text" class="form-control" placeholder="Name" value="{{ \Illuminate\Support\Facades\Auth::user()->name }}"/>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                    <input type="text" class="form-control" placeholder="Email" value="{{ \Illuminate\Support\Facades\Auth::user()->email }}"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                    <input type="password" class="form-control" placeholder="New Password" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                    <input type="password" class="form-control" placeholder="Confirm New Password" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                                    <input type="text" class="form-control" placeholder="Address" value="{{ \Illuminate\Support\Facades\Auth::user()->address }}"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    <input type="text" class="form-control" placeholder="Age" value="{{ \Illuminate\Support\Facades\Auth::user()->age }}"/>
                                                </div>
                                            </div>

                                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                                Save
                                            </button>


                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>


            <div class="col-md-9" id="kids" style="display: none;">
                <div class="profile-content" id="signupContainer">

                    <table  class="table table-hover" >
                        Kids
                    </table>

                </div>
            </div>

            <div class="col-md-9" id="groups" style="display: none;">
                <div class="profile-content" id="signupContainer">

                    <table  class="table table-hover" >
                        Groups
                    </table>

                </div>
            </div>

            <div class="col-md-9" id="notifications" style="display: none;">
                <div class="profile-content" id="signupContainer">

                    <table  class="table table-hover" >
                        Notifications
                    </table>

                </div>
            </div>




        </div>
    </div>


@endsection
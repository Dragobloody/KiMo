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
                                <a href="#" id="toggleOverview">
                                    <i class="glyphicon glyphicon-home active" > </i>
                                    Overview </a>
                            </li>

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


        <div class="col-md-9" id="overview" >
            <div class="profile-content" id="signupContainer">

                    <table  class="table table-hover" >
                        Overview
                    </table>

            </div>
        </div>

        <div class="col-md-9" id="accsettings" style="display: none;">
            <div class="profile-content" id="signupContainer">

                    <table  class="table table-hover" >
                        Account settings
                    </table>

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
@extends('layouts.masterloggedprofile')

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
                        @foreach($user as $userProfile)
                        <div class="profile-usertitle-name">
                            {{ $userProfile->name }}
                        </div>
                        @endforeach
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

                <form class="form-signin" method="post" action="updateProfile">
                    {{csrf_field()}}
                    <div class="container">
                        <div class="row">
                            <div class="col-md-offset-1 col-md-6">
                                <div class=" panel-default">
                                    <div class="panel panel-primary">

                                        <h3 class="text-center">
                                            Update Account</h3>


                                        <div class="panel-body">
                          @foreach($user as $userProfile)
                                            <div class="form-group">
                                                <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                            </span>
                                                    <input name="userName" type="text" class="form-control" placeholder="Name" value="{{ $userProfile->name }}"/>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                                    <input name="userEmail" type="text" class="form-control" placeholder="Email" value="{{ $userProfile->email }}"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                    <input name="userNewPassword" type="password" class="form-control" placeholder="New Password" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                                    <input name="userNewPasswordConfirm" type="password" class="form-control" placeholder="Confirm New Password" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                                                    <input name="userAddress" type="text" class="form-control" placeholder="Address" value="{{ $userProfile->address }}"/>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    <input name="userAge" type="text" class="form-control" placeholder="Age" value="{{ $userProfile->age }}"/>
                                                </div>
                                            </div>

                                            <button class="btn btn-lg btn-primary btn-block" type="submit">
                                                Save
                                            </button>

                                            <div class="form-group">
                                                @include('layouts.errors')
                                            </div>

                                        </div>
                                @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>



            </div>
        </div>


            <div  id="kids" style="display: none;">
                <div class="row col-md-4 col-md-offset-1 panel-body panel  panel-primary" >


                                <div class="table-responsive">


                                    <table id="mytable" class="table panel-table ">
                                        <h3 class="text-center">
                                            Edit Your Kids</h3>

                                        <thead>

                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                        </thead>

                                        <tbody>
                                        @foreach($kids as $kid)
                                        <tr>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $kid->name }}</td>
                                            <td>{{ $kid->age }}</td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" data-id="{{ $kid->id_kid }} " data-name="{{ $kid->name }}" data-age="{{
                                            $kid->age }}"><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                            <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" data-id="{{ $kid->id_kid }}"><span class="glyphicon glyphicon-trash"></span></button></p></td>
                                        </tr>

                                        @endforeach


                                        </tbody>

                                    </table>

                    </div>
                </div>


                </div>
            </div>

        <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">Edit Your Kid</h4>
                    </div>
                    <form class="form-signin" method="post" action="editKid">
                        {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <input class="form-control edit-name" name="kidName" type="text" placeholder="Name">
                        </div>
                        <div class="form-group">

                            <input class="form-control edit-age" type="text" placeholder="Age" name="kidAge">
                            <input type="hidden" class="form-control edit-id" name="kidID"/>
                        </div>

                    </div>

                    <div class="modal-footer ">
                        <button type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

        <script>
            $('#edit').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var v_name = button.data('name') // Extract info from data-* attributes
                var v_age = button.data('age')
                var v_id = button.data('id')
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                var modal = $(this)
                modal.find('.edit-name').val(v_name)
                modal.find('.edit-age').val(v_age)
                modal.find('.edit-id').val(v_id)
            })

        </script>



        <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
                    </div>
                    <div class="modal-body">

                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?</div>

                    </div>
                    <form class="form-signin" method="post" action="deleteKid">
                        {{csrf_field()}}
                    <div class="modal-footer ">
                        <input type="hidden" class="delete-id" name="kidID"/>
                        <button type="submit" class="btn btn-success" ><span class="glyphicon glyphicon-ok-sign"></span> Yes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                    </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>


        <script>
            $('#delete').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var v_id = button.data('id')
                var modal = $(this)
                modal.find('.delete-id').val(v_id)
            })

        </script>


            <div class="col-md-9" id="groups" style="display: none;">
                <div class="profile-content" id="signupContainer">

                    <table  class="table table-hover" >
                        Groups
                    </table>

                </div>
            </div>

            <div class="col-md-9 " id="notifications" style="display: none;">
                <div class="profile-content" id="signupContainer">

                    <table  class="table table-hover" >
                        Notifications
                    </table>

                </div>
            </div>




        </div>
    </div>


@endsection
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head >
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KiMo</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="css/custom.css" rel="stylesheet"/>
    <link href="css/signup.css" rel="stylesheet"/>
    <link href="css/footer.css" rel="stylesheet"/>
    <link href="css/buttons.css" rel="stylesheet"/>
    <link href="css/addkid_modal.css" rel="stylesheet"/>
    <link href="css/profile.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Website Font style -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <!-- Flavicon-->
    <link rel="icon" type="image/ico" href="favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

<style>

    @media only screen and (max-width : 540px) {
        .chat-sidebar {
            display: none !important;
        }

        .chat-popup {
            display: none !important;
        }
    }

    body {
        background-color: #e9eaed;
    }

    .chat-sidebar {
        width: 200px;
        position: fixed;
        height: 100%;
        right: 0px;
        top: 0px;
        padding-top: 10px;
        padding-bottom: 10px;
        background:rgba(255,255,255,.15);
        border: 1px solid rgba(29, 49, 91, .3);
    }
    .chat-sidebar-left {
        width: 200px;
        position: fixed;
        height: 100%;
        left: 0px;
        top: 0px;
        padding-top: 10px;
        padding-bottom: 10px;
        background:rgba(255,255,255,.15);
        border: 1px solid rgba(29, 49, 91, .3);
    }

    .sidebar-name {
        padding-left: 10px;
        padding-right: 10px;
        margin-bottom: 4px;
        font-size: 12px;
    }

    .sidebar-name span {
        padding-left: 5px;
    }

    .sidebar-name a {
        display: block;
        height: 100%;
        text-decoration: none;
        color: inherit;
    }

    .sidebar-name:hover {
        background-color: #e1e2e5;
    }

    .sidebar-name img {
        width: 32px;
        height: 32px;
        vertical-align: middle;
    }

    .popup-box {
        display: none;
        position: fixed;
        bottom: 0px;
        right: 220px;
        height: 285px;
        background-color: rgb(237, 239, 244);
        width: 300px;
        border: 1px solid rgba(29, 49, 91, .3);
    }

    .popup-box .popup-head {
        background-color: #37425A;
        padding: 3px;
        color: white;
        font-weight: bold;
        font-size: 14px;
        clear: both;
    }

    .popup-box .popup-head .popup-head-left {
        float: left;
    }

    .popup-box .popup-head .popup-head-right {
        float: right;
        opacity: 0.5;
    }

    .popup-box .popup-head .popup-head-right a {
        text-decoration: none;
        color: inherit;
    }

    .popup-box .popup-messages {
        height: 100%;
        overflow-y: scroll;
    }




    .background {
        <!--background-image: url('public/img/bck.jpg');-->
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        min-height: 740px;
    }

    .column-left {
        float: left;
        width: 25%;
    }

    .column-right {
        float: right;
        width: 15%;
    }

    .column-center {
        display: inline-block;
        width: 60%;
    }

    html {
        height: 100%;
    }

    .map-responsive{
        overflow:hidden;
        padding-bottom:56.25%;
        position:relative;
        height:0;
    }
    .map-responsive iframe{
        left:0;
        top:0;
        height:100%;
        width:100%;
        position:absolute;
    }
</style>

</head>


<body >
<div class="background">
    @include('layouts.nav')
    @yield('content')
    @include('layouts.footer')
</div>

</body>
</html>

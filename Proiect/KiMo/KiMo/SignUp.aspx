<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="SignUp.aspx.cs" Inherits="KiMo.SignUp" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sign Up</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet"/>
     <link href="css/Custom.css" rel="stylesheet"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
   

</head>


<body  >
    <div class="background">
    <form id="SignUpForm" runat="server">
        <div>
            <div class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> <span><img alt="Logo" src="Resources/img/KiMo Logo.png" height="30" /></span> </a>
                    </div>                                             

                    <div class="navbar-collapse collapse" >
                        <ul class="nav navbar-nav navbar-right">
                            <li ><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Log In</a></li>
                            <li class="active"><a href="SignUp.aspx"">Sign Up</a></li>

                        </ul>
                    </div>

                </div>
            </div>   

        </div>


        <!---Sign Up--->
        
        <div class="center-page">

             
            <label class="col-xs-11 ">Username</label>
            <div class="col-xs-11">
                <asp:TextBox ID="tbUsername" runat="server" CssClass="form-control" placeholder="Username"></asp:TextBox>
            </div>

            <label class="col-xs-11 space-vert ">Password</label>
            <div class="col-xs-11">
                <asp:TextBox ID="tbPassword" runat="server" CssClass="form-control" placeholder="Password"></asp:TextBox>
            </div>

            <label class="col-xs-11 space-vert">Confirm Password</label>
            <div class="col-xs-11">
                <asp:TextBox ID="tbConfPassword" runat="server" CssClass="form-control" placeholder="Confirm Password"></asp:TextBox>
            </div>

            <label class="col-xs-11 space-vert">Name</label>
            <div class="col-xs-11">
                <asp:TextBox ID="tbName" runat="server" CssClass="form-control" placeholder="Name"></asp:TextBox>
            </div>

            <label class="col-xs-11 space-vert">Email</label>
            <div class="col-xs-11">
                <asp:TextBox ID="tbEmail" runat="server" CssClass="form-control" placeholder="Email"></asp:TextBox>
            </div>
            <div class="col-xs-11 space-vert">
                <asp:Button ID="btSignUp" runat="server" Text="Sign Up" class="btn btn-success"/>
            </div>                          


        </div>
        
        <!---Sign Up--->


          <!---Footer--->
       
            <footer class="footer-pos">
                <div class="container space-vert">
                   <p class="pull-right"><a href="#">Back to top</a></p>
                   <p>&copy; 2017 KiMo.com &middot; <a href="#">Home</a> &middot;  <a href="#">About</a> &middot;  <a href="#">Contact</a> &middot;  <a href="#">Log In</a> &middot;  <a href="SignUp.aspx">Sign Up</a> </p>
                </div>
            </footer>


        <!---Footer--->






   </form>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</div>
</body>
</html>

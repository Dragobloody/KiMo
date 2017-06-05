

<?php


    include("connect.php");
    include('checkDistances.php');

    $userID=$_POST['userID'];
    $ran=rand(1,4);
    if($ran==1)
    {
        $query=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.001 , k.lng=k.lng+0.001 where k.followed=1 and uk.id_user=".$userID;
    }
    if($ran==2)
    {
        $query=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.001 , k.lng=k.lng-0.001 where k.followed=1 and uk.id_user=".$userID;
    }
    if($ran==3)
    {
        $query=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat-0.001 , k.lng=k.lng+0.001 where k.followed=1 and uk.id_user=".$userID;
    }
    if($ran==4)
    {
        $query=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat-0.001 , k.lng=k.lng-0.001 where k.followed=1 and uk.id_user=".$userID;

    }
    $result = mysqli_query($connect, $query);

    distanceKidObject($userID,$connect);




?>





<?php

//fetch.php;
include("connect.php");
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


echo 'salut';
    include('checkDistances.php');
    $query1 = "SELECT lat,lng FROM users where id=2";
    $result1 = mysqli_query($connect, $query1);
    $row1 = mysqli_fetch_array($result1);



    $query2=" select k.lat AS lat,k.lng AS lng from kids k join user_kid uk on k.id_kid=uk.id_kid
              where k.followed=1 and uk.id_user=".$userID;
    $result2 = mysqli_query($connect, $query2);

    while($row2 = @mysqli_fetch_assoc($result2))
    {
        if($rezultat=calculateDistance($row1['lat'],$row1['lng'],$row2['lat'],$row2['lng'])>2)
        {

        }
    }




?>



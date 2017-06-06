

<?php


    include("connect.php");
    include('checkDistances.php');

    $userID=$_POST['userID'];
    $ran=rand(1,4);
    $nr=0;
    if($ran==1)
    {  $nr=0 ;
        while( $nr<6 ) {
            $query = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.001 , k.lng=k.lng+0.001 where k.followed=1 and uk.id_user=" . $userID;
            $nr++;
        }
    }
    if($ran==2)
    {    $nr=0 ;
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
    distanceUserKid($userID,$connect)


    //include('checkDistances.php');






?>



<?php


include("connect.php");
include('checkDistances.php');

$userID=$_POST['userID'];

$query = "select lat, lng from users WHERE id=". $userID;
$row=mysqli_fetch_array($result,MYSQLI_NUM);
$user_lat=row[0];
$user_lng=$row[1];

$ran=rand(1,4);
$nr=0;
if($ran==1)
{  $nr=0 ;
    while( $nr<6 ) {
        $query1 = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.0005 , k.lng=k.lng+0.0005 where k.followed=1  and uk.id_kid=30 and uk.id_user=" . $userID;
        $query2 = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.0001 , k.lng=k.lng+0.0006 where k.followed=1  and uk.id_kid=28 and uk.id_user=" . $userID;
        $query3=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat-0.0004 , k.lng=k.lng-0.0004 where k.followed=1  and uk.id_kid=32 and uk.id_user=".$userID;
        $query4=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.0002 , k.lng=k.lng-0.0003 where k.followed=1  and uk.id_kid=33 and uk.id_user=".$userID;
        $query5=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.0004 , k.lng=k.lng-0.0003 where k.followed=1  and uk.id_kid>33 and uk.id_user=".$userID;

        $nr++;
    }
}
if($ran==2)
{    $nr=0 ;
    while( $nr<6 ) {
        $nr=0;
        $query1 = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.0005 , k.lng=k.lng+0.0005 where k.followed=1  and uk.id_kid=30 and uk.id_user=" . $userID;
        $query2 = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.0001 , k.lng=k.lng+0.0006 where k.followed=1  and uk.id_kid=28 and uk.id_user=" . $userID;
        $query3=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat-0.0004 , k.lng=k.lng-0.0004 where k.followed=1  and uk.id_kid=32 and uk.id_user=".$userID;
        $query4=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.0002 , k.lng=k.lng-0.0003 where k.followed=1  and uk.id_kid=33 and uk.id_user=".$userID;
        $query5=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.0004 , k.lng=k.lng-0.0003 where k.followed=1  and uk.id_kid>33 and uk.id_user=".$userID;

        $nr++;
    }
}
if($ran==3)
{    $nr=0 ;
    while( $nr<6 ) {
        $query1 = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.0005 , k.lng=k.lng+0.0005 where k.followed=1  and uk.id_kid=30 and uk.id_user=" . $userID;
        $query2 = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.0001 , k.lng=k.lng+0.0006 where k.followed=1  and uk.id_kid=28 and uk.id_user=" . $userID;
        $query3=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat-0.0004 , k.lng=k.lng-0.0004 where k.followed=1  and uk.id_kid=32 and uk.id_user=".$userID;
        $query4=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.0007 , k.lng=k.lng-0.0005 where k.followed=1  and uk.id_kid=33 and uk.id_user=".$userID;
        $query5=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.0007 , k.lng=k.lng-0.0005 where k.followed=1  and uk.id_kid>33 and uk.id_user=".$userID;

        $nr++;
    }
}
if($ran==4)
{      $nr=0 ;
    while( $nr<6 ) {
        $query1 = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.0005 , k.lng=k.lng+0.0005 where k.followed=1  and uk.id_kid=30 and uk.id_user=" . $userID;
        $query2 = " update kids k join user_kid uk on k.id_kid=uk.id_kid
                set k.lat=k.lat+0.0001 , k.lng=k.lng+0.0006 where k.followed=1  and uk.id_kid=28 and uk.id_user=" . $userID;
        $query3=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat-0.0004 , k.lng=k.lng-0.0004 where k.followed=1  and uk.id_kid=32 and uk.id_user=".$userID;
        $query4=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.0007 , k.lng=k.lng-0.0005 where k.followed=1  and uk.id_kid=33 and uk.id_user=".$userID;
        $query5=" update kids k join user_kid uk on k.id_kid=uk.id_kid
                 set k.lat=k.lat+0.0007 , k.lng=k.lng-0.0005 where k.followed=1  and uk.id_kid>33 and uk.id_user=".$userID;


        $nr++;
    }
}



$result1 = mysqli_query($connect, $query1);

$result2 = mysqli_query($connect, $query2);

$result3 = mysqli_query($connect, $query3);

$result4 = mysqli_query($connect, $query4);

$result5 = mysqli_query($connect, $query4);

distanceKidObject($userID,$connect);
distanceUserKid($userID,$connect)


//include('checkDistances.php');





?>


<?php 
//  include ('../admin/topics/index.php');
session_start();

//include('C:\xampp\htdocs\VegBuddy\VegBuddyV7.1\VegBuddyV7.1\controller\topics.php');
 //include('../database/db_connection.php');
 include('C:\xampp\htdocs\VegBuddy\VegBuddyV7.1\VegBuddyV7.2\database\db_connection.php');
// $sql= "SELECT * FROM 'topics'";
// $result=mysqli_query($conn,$sql);
// if($result)
// {
//     while($row=mysqli_fetch_assoc($result))
//     {
//         $topics[]=$row;
//     }
// }


if(isset($_POST['add-topic']))
{

    $title=$_POST['title'];
    $description=$_POST['description'];

    $query="insert into topics(name,description) values('$title' , '$description')";

    $run=mysqli_query($conn , $query) ;

    echo "<script>location.href='../admin/topics/index.php';</script>";
     
}

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="DELETE FROM `topics` WHERE `topics`.`id` = $id";
    $result=mysqli_query($conn,$sql);
}
?>
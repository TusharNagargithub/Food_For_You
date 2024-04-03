<?php
    //Include Constants Page
    include('../config/constants.php');

    //echo "Delete Food Page";

    if(isset($_GET['id']) && isset($_GET['image_name'])){ //Ether use "&&" or "AND"
        //process to Delete
        //echo "Process to Delete";

        //1. Get ID and Image name
        $id = $_GET['id'];
        $image_name = $_GET['image_name'];

        //2. Remove the image if available
        //Check whether the image is available or not and Delete only if available
        if($image_name != ""){
            //It has image and need to remove from folder
            //Get the image path
            $path = "../images/food/".$image_name;


            //Remove image file from folder
            $remove = unlink($path);

            //Check whether the image is removed or not
            if($remove==FALSE){
                //Failed to remove Image
                $_SESSION['upload'] = "<div class='error'>Failed to remove Image file.</div>";
                //Redirect to Manage food
                header('location:'.SITEURL.'admin/manage-food.php');
                //Stop the process of Deleting Food
                die();
            }
        }

        //3. Delete food from database
        $sql = "DELETE FROM tbl_food WHERE id=$id";
        //Execute the Query
        $res = mysqli_query($conn,$sql);

        //Check whether the query executed or not and set the session message respectively
        //4. Redirect to manage food with session message
        
        if($res==TRUE){
            //Food Deleted
            $_SESSION['delete'] = "<div class='success'>Food Deleted Successfully.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        }
        else{
            //Failed to Delete Food
            $_SESSION['delete'] = "<div class='error'>Failed to Deleted Food.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
        
        }

        

    }
    else{
        //Redirect to manage Food Page
        //echo "Redirect";
        $_SESSION['unauthorize'] = "<div class='error'>Unauthorized Access.</div>";
        header('location:'.SITEURL.'admin/manage-food.php');
    }
?>
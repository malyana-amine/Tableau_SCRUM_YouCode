<?php
    //INCLUDE DATABASE FILE
    include('database.php');

    //ROUTING
    if(isset($_POST['save']))        saveTask();
    if(isset($_POST['submit1']))      updateTask();
    if(isset($_POST['submit2']))      deleteTask();
    



    function getTasks()
    {
        global $conn ;
        global $result;

    $sql="SELECT t.id, t.title, p.name as periority, s.name as status, tp.name as type, t.task_datetime,t.description FROM `tasks` t 
                    INNER JOIN priorities p ON t.priority_id=p.id 
                    INNER JOIN statuses s ON t.status_id=s.id 
                    INNER JOIN types tp on t.type_id=tp.id";
    $qry = mysqli_query($conn, $sql);
    
    while($row = mysqli_fetch_assoc($qry)){

         $GLOBALS['result'][] = $row;
    }
   
            return $GLOBALS['result']; 

    }


    function saveTask()
    {
        //CODE HERE
        global $conn ;

        if( isset($_POST['submit'])) {
           
            // --------------
            $title = $_POST['title'];
            $type = $_POST['flexRadioDefault'];
            $priority = $_POST['priority'];
            $status = $_POST['status'];
            $date = $_POST['date'];
            $description = $_POST['description'];
                      
             $sql = " INSERT INTO `tasks` (`title`, `type_id`, `priority_id`, `status_id`, `task_datetime`, `description`) VALUES ('$title', $type, $priority, $status , '$date','$description')"; 
 
            mysqli_query($conn,$sql);
            header('location: index.php');
         }

    }



    function updateTask()
    {
        global $conn ;
        //CODE HERE


        if( isset($_POST['submit1'])){

        $title = $_POST['title1'];
        $type = $_POST['flexRadioDefault1'];
        $priority = $_POST['priority1'];
        $status = $_POST['status1'];
        $date = $_POST['date1'];
        $description = $_POST['description1'];
         
        $id   =  $_POST['hidinput'];
       // die($type . $priority . $status . $title . $date . $description .$id) ;
        $sql1 = "UPDATE `tasks` 
                SET`title`='$title',`type_id`='$type',`priority_id`='$priority',`status_id`='$status',`task_datetime`='$date',`description`='$description'
                 WHERE `id`='$id'";

            mysqli_query($conn,$sql1);

    }
    }




    function deleteTask()
    {
        global $conn ;
        //CODE HERE
        {
            $id   =  $_POST['hidinput'];
            
           $sql2 = " DELETE FROM `tasks` WHERE id = $id ";

           mysqli_query($conn,$sql2);

        }

    }
    function counter($contStatus){
        global $conn;
        $sql= "SELECT * FROM tasks where status_id= $contStatus";
        $result = mysqli_query($conn,$sql);
        $res=mysqli_fetch_all($result, MYSQLI_ASSOC);
        echo count($res);

    }

?>
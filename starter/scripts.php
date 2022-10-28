<?php
    //INCLUDE DATABASE FILE
    include('database.php');
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['save']))        saveTask();
    if(isset($_POST['update']))      updateTask();
    if(isset($_POST['delete']))      deleteTask();
    
    $sql="SELECT t.id, t.title, p.name as periority, s.name as status, tp.name as type, t.task_datetime,t.description FROM `tasks` t INNER JOIN priorities p ON t.priority_id=p.id INNER JOIN statuses s ON s.id=t.status_id INNER JOIN types tp on tp.id=t.type_id";
    $qry = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($qry))
    $GLOBALS['result'][] = $row;


    
    function getTasks()
    {
        global $conn ;
        global $result;
        //CODE HERE
//         $conn = new mysqli('localhost', 'root', '', 'scrumboard');


// // Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);

echo "";
        //SQL SELECT
        //$sql = "SELECT id,title,type_id, priority_id, status_id, task_datetime, description FROM tasks";
     
        return $result;
        

        // if (mysqli_num_rows($result) > 0) {
        //     // output data of each row
        //     while($row = mysqli_fetch_assoc($result)) {
        //     // var_dump($row);
        //      echo   $row['status'];

        //             if ( $row['status'] == 'to do' ){

        //    echo ' <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
		// 						<div class="">
        //                         <i class="mr-3 fw-bold"><i class="fa-regular fa-circle-question text-red fs-25px"></i></i>  
		// 						</div>
		// 						<div class="d-flex flex-column align-items-start">
		// 							<div class="fw-bolder text-start">'.$row['title'].'</div>
		// 							<div class="text-start">
		// 								<div class="text-muted">#1 created in '.$row['task_datetime'].'</div>
		// 								<div class="" title="">'.$row['description'].'..</div>
		// 							</div>
		// 							<div class="mt-2 text-start">
		// 								<span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">'.$row['periority'].'</span>
		// 								<span class="py-1 px-2 bg-muted rounded-pill fw-bold">'.$row['type'].'</span>
		// 							</div>
		// 						</div>
		// 					</button> ';

        //             }


        //                     if ( $row['status'] == 'In progress' ) {

        //    echo ' <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
		// 						<div class="">
        //                         <i class="mr-3 fw-bold"><i class="fa-regular fa-circle-question text-red fs-25px"></i></i>  
		// 						</div>
		// 						<div class="d-flex flex-column align-items-start">
		// 							<div class="fw-bolder text-start">'.$row['title'].'</div>
		// 							<div class="text-start">
		// 								<div class="text-muted">#1 created in '.$row['task_datetime'].'</div>
		// 								<div class="" title="">'.$row['description'].'..</div>
		// 							</div>
		// 							<div class="mt-2 text-start">
		// 								<span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">'.$row['periority'].'</span>
		// 								<span class="py-1 px-2 bg-muted rounded-pill fw-bold">'.$row['type'].'</span>
		// 							</div>
		// 						</div>
		// 					</button> ';}





        //                     if ( $row['status'] == 'Done' ){

        //    echo ' <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
		// 						<div class="">
        //                         <i class="mr-3 fw-bold"><i class="fa-regular fa-circle-question text-red fs-25px"></i></i>  
		// 						</div>
		// 						<div class="d-flex flex-column align-items-start">
		// 							<div class="fw-bolder text-start">'.$row['title'].'</div>
		// 							<div class="text-start">
		// 								<div class="text-muted">#1 created in '.$row['task_datetime'].'</div>
		// 								<div class="" title="">'.$row['description'].'..</div>
		// 							</div>
		// 							<div class="mt-2 text-start">
		// 								<span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">'.$row['periority'].'</span>
		// 								<span class="py-1 px-2 bg-muted rounded-pill fw-bold">'.$row['type'].'</span>
		// 							</div>
		// 						</div>
		// 					</button> ';}




        //     }

          
        //   } else {
        //     echo "0 results";
        //   }
          
        //   mysqli_close($conn);

        // echo "Fetch all tasks";
    }


    function saveTask()
    {
        //CODE HERE
        //SQL INSERT
        $_SESSION['message'] = "Task has been added successfully !";
		header('location: index.php');
    }

    function updateTask()
    {
        //CODE HERE
        //SQL UPDATE
        $_SESSION['message'] = "Task has been updated successfully !";
		header('location: index.php');
    }

    function deleteTask()
    {
        //CODE HERE
        //SQL DELETE
        $_SESSION['message'] = "Task has been deleted successfully !";
		header('location: index.php');
    }

?>
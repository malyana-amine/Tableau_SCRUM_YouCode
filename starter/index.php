<?php
    include('scripts.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="utf-8" />
	<title>YouCode | Scrum Board</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN core-css ================== -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="assets/css/vendor.min.css" rel="stylesheet" />
	<link href="assets/css/default/app.min.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
	<!-- ================== END core-css ================== -->
</head>
<body>
<?php
global $conn ;
saveTask();	
?>

	<!-- BEGIN #app -->
	<div id="app" class="app-without-sidebar">
		<!-- BEGIN #content -->
		<div id="content" class="app-content main-style">
			<div class="row justify-content-between">
				<div class="col-auto">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
						<li class="breadcrumb-item">Scrum Board </li>
					</ol>
					<!-- BEGIN page-header -->
					<h1 class="page-header">
						Scrum Board 
					</h1>
					<!-- END page-header -->
				</div>
				
				<div class="col-auto pt-30px ">
					<button   class="btn btn-dark rounded-pill" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fa fa-plus p-1 "></i> Add Task</button>
				</div>
			</div>
			<div class="row justify-content-center">
			
	
			  </div>
			
			<div class="row justify-content-evenly flex-wrap">
				<div class="col-md-4 col-12 mb-3">
					<div class="border rounded bg-light p-0 overflow-hidden shadow">
						<div class="bg-dark p-2">
							<h4 class="text-white m-0">To do (<span id="to-do-tasks-count">5</span>)</h4>

						</div>
						<div class="p-1 d-flex bg-secondary flex-column gap-1" id="to-do-tasks">
							<!-- TO DO TASKS HERE -->




							<?php
								foreach(array_values($GLOBALS['result']) as $row ){
									
									
									// var_dump( $row['periority']);
									// var_dump( $row['status']);

									if ( $row['status'] == 'To Do' ){
										
										
										
										
										



				    echo ' <button onclick="update('.$row['id'].')"  id="" class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
								<div class="">
                                <i class="mr-3 fw-bold"><i class="fa-regular fa-circle-question text-red fs-25px"></i></i>  
								</div>
								<div class="d-flex flex-column align-items-start">
									<div id="title'.$row['id'].'" class="fw-bolder text-start">'.$row['title'].'</div>
									<div class="text-start">
										<div id="date'.$row['id'].'" data="'.$row['task_datetime'].'"  class="text-muted">#1 created in '.$row['task_datetime'].'</div>
										<div id="description'.$row['id'].'" class="" title="">'.$row['description'].'..</div>
									</div>
									<div class="mt-2 text-start">
										<span data="'.$row['periority'].'" id="priority'.$row['id'].'" class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">'.$row['periority'].'</span>
										<span datastatus="'.$row['status'].'" data="'.$row['type'].'" id="type'.$row['id'].'" class="py-1 px-2 bg-muted rounded-pill fw-bold">'.$row['type'].'</span>
									</div>
								</div>
							</button>';?>

							

							<!-- <div class="modal fade" id="update<?php echo $row["id"] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header bg-dark">
				  <h5 class="modal-title p-1 text-white" id="staticBackdropLabel">Modifier task</h5>
				  <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label  class="form-label">Title</label>
						<input type="text" value="<?php echo $row["title"] ?>" class="form-control" id="title2" placeholder="Enter card title">
					  </div>
		
		
					 
					  <div class="mb-3">
					  
					  
						  <label  class="form-label">type</label>
						  
						  <div class="form-check">
							
						  
						  
							  <input type="radio" class="form-check-input" name="type" value="Feature"  <?php  if($row["type"] == "feature") echo 'checked'?>>
							  <label class="form-check-label" for="flexRadioDefault1">
								Feature
							  </label>
							</div>
							<div class="form-check pb-3">
							  <input class="form-check-input" type="radio" id="flexRadioDefault2" name="type" value="Bug" <?php  if($row["type"] == "bug") echo 'checked' ?>>
							  <label class="form-check-label" for="flexRadioDefault2">
								Bug
							  </label>
							</div>
		
		
		
							<div class="col-md-4 w-100 mb-4">
								<label for="inputState" class="form-label">Priority</label>
								<select id="form_options_priority1" class="form-select " required >
								<option selected value="High">High</option>
								<option  value="High">High</option>
								<option value="medium">medium</option>
								<option value="Low">Low</option>
								</select>
							</div>
		
		
		
							<div class="col-md-4 w-100 mb-4">
								<label for="inputState" class="form-label">status</label>
								<select id="form_options_status1" class="form-select " required >
								<option selected value="To Do">To Do</option>
								<option value="In Progress">In Progress</option>
								<option value="Done">Done</option>
								</select>
							</div>
		
		
						  <div class="md-form md-outline input-with-post-icon datepicker mb-3">
							  <label for="inputState" class="form-label" >Date</label>
							  <input value ="<?php echo $row["task_datetime"] ?>" placeholder="Select date" type="date"  class="form-control" id="date1">
						  </div>
		
						  <div class="form-group">
							  <label for="exampleFormControlTextarea1" id="description2">Description</label>
							  <textarea value="" class="form-control" rows="3" id="description3"><?php echo $row["description"] ?></textarea>
						  </div>
		
						  
						  </div>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-muted rounded-pill text-black" data-bs-dismiss="modal">Cancel</button>
				  <button type="button" class="btn btn-danger rounded-pill text-black" data-bs-dismiss="modal" id="save1" onclick="deleteTask()">delete</button>
				  <button type="button" class="btn btn-warning rounded-pill text-black" data-bs-dismiss="modal" id="edit" onclick="editTask()">edit</button>
				</div>
			  </div>
			</div>
		  </div> -->


								<?php }
							
							
							} ?>

						
						</div>
					</div>
				</div>
				<div class="col-md-4 col-12 mb-3">
					<div class="border rounded bg-light p-0 overflow-hidden shadow">
						<div class="bg-dark p-2">
							<h4 class="text-white m-0">In Progress (<span id="in-progress-tasks-count">4</span>)</h4>

						</div>
						<div class="p-1 d-flex bg-secondary flex-column gap-1" id="in-progress-tasks">
							<!-- IN PROGRESS TASKS HERE -->
							<?php
								foreach(array_values($GLOBALS['result']) as $row ){

									if ( $row['status'] === 'In progress' ){
										

										echo ' <button onclick="update('.$row['id'].')"  id="" class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
										<div class="">
										<i class="mr-3 fw-bold"><i class="fa-regular fa-circle-question text-red fs-25px"></i></i>  
										</div>
										<div class="d-flex flex-column align-items-start">
											<div id="title'.$row['id'].'" class="fw-bolder text-start">'.$row['title'].'</div>
											<div class="text-start">
												<div id="date'.$row['id'].'" data="'.$row['task_datetime'].'"  class="text-muted">#1 created in '.$row['task_datetime'].'</div>
												<div id="description'.$row['id'].'" class="" title="">'.$row['description'].'..</div>
											</div>
											<div class="mt-2 text-start">
												<span data="'.$row['periority'].'" id="priority'.$row['id'].'" class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">'.$row['periority'].'</span>
												<span datastatus="'.$row['status'].'" data="'.$row['type'].'" id="type'.$row['id'].'" class="py-1 px-2 bg-muted rounded-pill fw-bold">'.$row['type'].'</span>
											</div>
										</div>
									</button>';
								}
							}
							?>
							

						</div>
					</div>
				</div>
				<div class="col-md-4 col-12 mb-3">
					<div class="border rounded bg-light p-0 overflow-hidden shadow">
						<div class="bg-dark p-2">
							<h4 class="text-white m-0">Done (<span id="done-tasks-count">4</span>)</h4>

						</div>
						<div class="p-1 bg-secondary d-flex flex-column gap-1" id="done-tasks">
							<!-- DONE TASKS HERE -->

							<?php
								foreach(array_values($GLOBALS['result']) as $row ){

									if ( $row['status'] === 'Done' ){
										



										echo ' <button onclick="update('.$row['id'].')"  id="" class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
										<div class="">
										<i class="mr-3 fw-bold"><i class="fa-regular fa-circle-question text-red fs-25px"></i></i>  
										</div>
										<div class="d-flex flex-column align-items-start">
											<div id="title'.$row['id'].'" class="fw-bolder text-start">'.$row['title'].'</div>
											<div class="text-start">
												<div id="date'.$row['id'].'" data="'.$row['task_datetime'].'"  class="text-muted">#1 created in '.$row['task_datetime'].'</div>
												<div id="description'.$row['id'].'" class="" title="">'.$row['description'].'..</div>
											</div>
											<div class="mt-2 text-start">
												<span data="'.$row['periority'].'" id="priority'.$row['id'].'" class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">'.$row['periority'].'</span>
												<span datastatus="'.$row['status'].'" data="'.$row['type'].'" id="type'.$row['id'].'" class="py-1 px-2 bg-muted rounded-pill fw-bold">'.$row['type'].'</span>
											</div>
										</div>
									</button>';
								}
							}
							?>
							
							


						</div>
					</div>
				</div>
			</div>
		</div>
		<script>

function update(id) {

alert("hello");
let btn_titleid = "title"+id;
let btn_title = document.getElementById(btn_titleid).textContent;



// remplire
document.getElementById(title2).value = btn_title;

}
		</script>
		<!-- END #content -->
		
		
		<!-- BEGIN scroll-top-btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
		<!-- END scroll-top-btn -->
	</div>
	<!-- END #app -->
	
	<!-- TASK MODAL -->
  
  <!-- Modal -->

  
  <form method="POST" class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header bg-dark">
		  <h5 class="modal-title p-1 text-white" id="staticBackdropLabel">Add task</h5>
		  <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="mb-3">
				<label  class="form-label">Title</label>
				<input name="title" type="text" class="form-control" id="title1" placeholder="Enter card title">
				<p id="title_error"> </p>
			  </div>


			  <div class="mb-3">
				  <label  class="form-label">type</label>
				  <div class="form-check">
					  <input class="form-check-input" type="radio" value="1" name="flexRadioDefault" id="feature">
					  <label class="form-check-label" for="flexRadioDefault1">
						Feature
					  </label>
					</div>
					<div class="form-check pb-3">
					  <input class="form-check-input" type="radio" value="2" name="flexRadioDefault" id="bug" checked>
					  <label class="form-check-label" for="flexRadioDefault2">
						Bug
					  </label>
					  <p class="type_error"> </p>
					</div>



					<div class="col-md-4 w-100 mb-4">
						<label for="inputState" class="form-label">Priority</label>
						<select name="priority" id="form_options_priority" class="form-select " required >
						<option value=""disabled hidden selected>open this menu select</option>
						<option value="1">High</option>
						<option value="2">medium</option>
						<option value="3">Low</option>
						</select>
						<p class="per_error"> </p>
					</div>



					<div class="col-md-4 w-100 mb-4">
						<label for="inputState" class="form-label">status</label>
						<select name="status" id="form_options_status" class="form-select " required >
						<option value=""disabled hidden selected>open this menu select</option>
						<option value="1">To Do</option>
						<option value="2">In Progress</option>
						<option value="3">Done</option>
						</select>
						<p class="status_error"> </p>
					</div>


				  <div class="md-form md-outline input-with-post-icon datepicker mb-3">
					  <label for="inputState" class="form-label">Date</label>
					  <input name="date" placeholder="Select date" type="date"  class="form-control" id="date">
					  <p class="date_error"> </p>
				  </div>

				  <div class="form-group">
					  <label for="exampleFormControlTextarea1" id="description1">Description</label>
					  <textarea name="description" class="form-control" rows="3" id="description"></textarea>
					  <p class="description_error"> </p>
				  </div>

				  
				  </div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-muted rounded-pill text-black" data-bs-dismiss="modal">Cancel</button>
		  <button type="submit" name="submit" class="btn btn-primary rounded-pill text-black" id="save1" data-bs-dismiss="modal" onclick="saveTask()">Save</button>
		</div>
	  </div>
	</div>
	</form>

<?php


?>
		<!-- Modal content goes here -->

		<form method="POST" class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header bg-dark">
				  <h5 class="modal-title p-1 text-white" id="staticBackdropLabel">Modifier task</h5>
				  <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<input type="hidden" name="hid_input" class="hid" value="">
				<div class="modal-body">
					<div class="mb-3">
						<label  class="form-label">Title</label>
						<input name="title1" type="text" class="form-control" id="title2" placeholder="Enter card title">
						
					  </div>
		
		
					  <div class="mb-3">
						  <label  class="form-label">type</label>
						  <div class="form-check">
							  <input class="form-check-input" value="1" type="radio" name="flexRadioDefault1" id="feature1">
							  <label class="form-check-label" for="flexRadioDefault1">
								Feature
							  </label>
							</div>
							<div class="form-check pb-3">
							  <input class="form-check-input" value="2" type="radio" name="flexRadioDefault1" id="bug1" checked>
							  <label class="form-check-label" for="flexRadioDefault2">
								Bug
							  </label>
							</div>
		
		
		
							<div class="col-md-4 w-100 mb-4">
								<label for="inputState" class="form-label">Priority</label>
								<select name="priority1" id="form_options_priority1" class="form-select " required >
								<option selected value="1">High</option>
								<option value="2">medium</option>
								<option value="3">Low</option>
								</select>
							</div>
		
		
		
							<div class="col-md-4 w-100 mb-4">
								<label for="inputState" class="form-label">status</label>
								<select name="status1" id="form_options_status1" class="form-select " required >
								<option selected value="1">To Do</option>
								<option value="2">In Progress</option>
								<option value="3">Done</option>
								</select>
							</div>
		
		
						  <div class="md-form md-outline input-with-post-icon datepicker mb-3">
							  <label for="inputState" class="form-label">Date</label>
							  <input name="date1" placeholder="Select date" type="date"  class="form-control" id="date1">
						  </div>
		
						  <div class="form-group">
							  <label for="exampleFormControlTextarea1" id="description2">Description</label>
							  <textarea name="description1" class="form-control" rows="3" id="description3"></textarea>
						  </div>
		
						  
						  </div>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-muted rounded-pill text-black" data-bs-dismiss="modal">Cancel</button>
				  <button type="button" class="btn btn-danger rounded-pill text-black" data-bs-dismiss="modal" id="save1" onclick="deleteTask()">delete</button>
				  <button type="submit" name="submit1" class="btn btn-warning rounded-pill text-black" data-bs-dismiss="modal" id="edit" onclick="">edit</button>
				</div>
			  </div>
			</div>
</form>
	
	<!-- ================== BEGIN core-js ================== -->
	
	<script src="assets/js/vendor.min.js"></script>
	<script src="assets/js/app.min.js"></script>
	<script src="assets/js/data.js"></script>
	<script src="assets/js/main.js"></script>
	<!-- ================== END core-js ================== -->
	<script src="scripts.js"></script>

</body>
</html>
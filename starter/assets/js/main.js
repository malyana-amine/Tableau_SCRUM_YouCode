/**
 * In this file app.js you will find all CRUD functions name.
 * 
 */

 function createTask() {
    // initialiser task form

    // Afficher le boutton save

    // Ouvrir modal form
    
}

function saveTask() {
    // Recuperer task attributes a partir les champs input
    let title = document.getElementById("title1");
    let type_bug = document.getElementById("bug");
    let type_feature = document.getElementById("feature");
    let priority = document.getElementById("form_options_priority");
    let p_value = priority.options[priority.selectedIndex].text;
    let status = document.getElementById("form_options_status");
    let s_value = status.options[status.selectedIndex].text;
    let date = document.getElementById("date");
    let description = document.getElementById("description");

    var checked;
    if(type_bug.checked==true){
        checked = "Bug";
    }
    else if(type_feature.checked==true){
        checked = "Feature";
    }
    // Créez task object

   

   const temp_task = {title : title.value,type : checked, priority : p_value, status : s_value, date : date.value , description : description.value};
    // Ajoutez object au Array 
        tasks.push(temp_task);
       
        console.log(tasks);
    // refresh tasks
       // tasks.reload();
       reloadTasks();
    
}

function editTask(index) {
    // Initialisez task form

    // Affichez updates

    // Delete Button

    // Définir l’index en entrée cachée pour l’utiliser en Update et Delete

    // Definir FORM INPUTS

    // Ouvrir Modal form
}

function updateTask() {
    // GET TASK ATTRIBUTES FROM INPUTS

    // Créez task object

    // Remplacer ancienne task par nouvelle task

    // Fermer Modal form

    // Refresh tasks
    
}

function deleteTask() {
    // Get index of task in the array

    // Remove task from array by index splice function

    // close modal form

    // refresh tasks
}

function initTaskForm() {
    // Clear task form from data

    // Hide all action buttons
}

function reloadTasks() {
    // Remove tasks elements


    let todo = document.getElementById("to-do-tasks");
    let progress = document.getElementById("in-progress-tasks");
    let done = document.getElementById("done-tasks");

    todo.innerHTML="";
    progress.innerHTML="";
    done.innerHTML="";
    // Set Task count

    for(let i=0 ; i< tasks.length ;i++){
            if(tasks[i].status=='To Do'){

                    let button1 = `
                                    <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1">
								<div class="">
									<i class="mr-3 fw-bold"><i class="fa-sharp fa-solid fa-circle-check text-green fs-25px"></i></i> 
								</div>
								<div class="d-flex flex-column align-items-start">
									<div class="fw-bolder text-start">${tasks[i].title}</div>
									<div class="text-start">
										<div class="text-muted">#${i} created in ${tasks[i].date}</div>
										<div class="" title="${tasks[i].description}">${tasks[i].description.substring(0,60)}...</div>
									</div>
									<div class="mt-2 text-start">
										<span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">${tasks[i].priority}</span>
										<span class="py-1 px-2 bg-muted rounded-pill fw-bold">${tasks[i].type}</span>
									</div>
								</div>
							</button>
                            `;
                            todo.innerHTML+=button1;
            }
            else if(tasks[i].status=='In Progress'){

                let button1 = `
                                <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1">
                            <div class="">
                                <i class="mr-3 fw-bold"><i class="fa-sharp fa-solid fa-circle-check text-green fs-25px"></i></i> 
                            </div>
                            <div class="d-flex flex-column align-items-start">
                                <div class="fw-bolder text-start">${tasks[i].title}</div>
                                <div class="text-start">
                                    <div class="text-muted">#${i} created in ${tasks[i].date}</div>
                                    <div class="" title="${tasks[i].description}">${tasks[i].description.substring(0,60)}...</div>
                                </div>
                                <div class="mt-2 text-start">
                                    <span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">${tasks[i].priority}</span>
                                    <span class="py-1 px-2 bg-muted rounded-pill fw-bold">${tasks[i].type}</span>
                                </div>
                            </div>
                        </button>
                        `;
                        progress.innerHTML+=button1;
        }
        else if(tasks[i].status=='Done'){

            let button1 = `
                            <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1">
                        <div class="">
                            <i class="mr-3 fw-bold"><i class="fa-sharp fa-solid fa-circle-check text-green fs-25px"></i></i> 
                        </div>
                        <div class="d-flex flex-column align-items-start">
                            <div class="fw-bolder text-start">${tasks[i].title}</div>
                            <div class="text-start">
                                <div class="text-muted">#${i} created in ${tasks[i].date}</div>
                                <div class="" title="${tasks[i].description}">${tasks[i].description.substring(0,60)}...</div>
                            </div>
                            <div class="mt-2 text-start">
                                <span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">${tasks[i].priority}</span>
                                <span class="py-1 px-2 bg-muted rounded-pill fw-bold">${tasks[i].type}</span>
                            </div>
                        </div>
                    </button>
                    `;
                    done.innerHTML+=button1;
    }
    else{
        console.log("error")
    }
    }


}
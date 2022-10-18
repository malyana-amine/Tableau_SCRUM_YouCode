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

    // Set Task count
}

var tasks = [
    {
        'title'         :   'Keep all the updated requirements in one place',
        'type'          :   'Feature',
        'priority'      :   'High',
        'status'        :   'To Do',
        'date'          :   '2022-10-08',
        'description'   :   `There is hardly anything more frustrating than having to look for current requirements in tens of comments under the actual description or having to decide which commenter is actually authorized to change the requirements. The goal here is to keep all the up-to-date requirements and details in the main/primary description of a task. Even though the information in comments may affect initial criteria, just update this primary description accordingly.`,
    },
];
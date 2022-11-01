// /**
//  * In this file app.js you will find all CRUD functions name.
//  * 
//  */
//  let x=18;
//  let tempid;
//  reloadTasks() ;

//  function createTask() {

    
// }

// function saveTask() {
//     // Recuperer task attributes a partir les champs input
//     let title = document.getElementById("title1");
//     let type_bug = document.getElementById("bug");
//     let type_feature = document.getElementById("feature");
//     let priority = document.getElementById("form_options_priority");
//     let p_value = priority.options[priority.selectedIndex].text;
//     let status = document.getElementById("form_options_status");
//     let s_value = status.options[status.selectedIndex].text;
//     let date = document.getElementById("date");
//     let description = document.getElementById("description");
    
//     //=====================

//     var checked;
//     if(type_bug.checked==true){
//         checked = "Bug";
//     }
//     else if(type_feature.checked==true){
//         checked = "Feature";
//     }
//     // Créez task object

   

//    const temp_task = {title : title.value,type : checked, priority : p_value, status : s_value, date : date.value , description : description.value ,taskid:x };
//     // Ajoutez object au Array 
//         tasks.push(temp_task);
       
//         console.log(tasks);
//         x++;
//     // refresh tasks
//        // tasks.reload();
//        reloadTasks();

//        title.value="";
//        type_bug.checked=false;
//        type_feature.checked=false;
//        date.value="";
//        priority.selectedIndex="0";
//        status.selectedIndex="0";
//        description.value="";

    
    
// }

// function editTask() {


//     let type_bug1 = document.getElementById("bug1");
//     let type_feature1 = document.getElementById("feature1");

//     // Initialisez task form
//     for(let j=0 ; j< tasks.length ;j++){
//         if(tasks[j].taskid==tempid){
//         if( type_bug1.checked==true ){
//             tasks[j].type = "Bug";
            
//         }
//         else if( type_feature1.checked==true  ){
//             tasks[j].type = "Feature";
//         }
//         tasks[j].title = title2.value;
//         tasks[j].priority = form_options_priority1.value;
//         tasks[j].status = form_options_status1.value;
//         tasks[j].date = date1.value;
//         tasks[j].description = description3.value;
//         console.log(tasks);
//         reloadTasks();

//     // Affichez updates

//     // Delete Button

//     // Définir l’index en entrée cachée pour l’utiliser en Update et Delete

//     // Definir FORM INPUTS

//     // Ouvrir Modal form
// }}}

// function updateTask(id) {
//     // GET TASK ATTRIBUTES FROM INPUTS

//     let type_bug1 = document.getElementById("bug1");
//     let type_feature1 = document.getElementById("feature1");



//     for(let j=0 ; j< tasks.length ;j++){
//         if(tasks[j].taskid==id){
//             if(tasks[j].type =="Bug"){
//                 type_bug1.checked=true;
                
//             }
//             else if(tasks[j].type == "Feature"){
//                 type_feature1.checked=true;
//             }
//             title2.value = tasks[j].title;
//             form_options_priority1.value = tasks[j].priority;
//             form_options_status1.value = tasks[j].status;
//             date1.value = tasks[j].date;
//             description3.value = tasks[j].description;
//             tempid=id;
//         }}

// }

// function deleteTask() {
    
//     // Get index of task in the array
//     for(let j=0 ; j< tasks.length ;j++){
//         if(tasks[j].taskid==tempid){

//             tasks.splice(j,1);
//             console.log(tasks);
//     // Remove task from array by index 

//     // close modal form

//     // refresh tasks
//     reloadTasks();

// }}}


// function initTaskForm() {
//     // Clear task form from data

//     // Hide all action buttons
// }

// function reloadTasks() {
//     // Remove tasks elements


//     let todo = document.getElementById("to-do-tasks");
//     let progress = document.getElementById("in-progress-tasks");
//     let done = document.getElementById("done-tasks");
//     let tdindex = document.getElementById("to-do-tasks-count");
//     let ipindex = document.getElementById("in-progress-tasks-count");
//     let dnindex = document.getElementById("done-tasks-count");


//     todo.innerHTML="";
//     progress.innerHTML="";
//     done.innerHTML="";
//     // Set Task count
//             let todoCount=0;
//             let ipCount=0;
//             let doneCount=0;
//     for(let i=0 ; i< tasks.length ;i++){
//             if(tasks[i].status=='To Do'){
                

//                 todo.innerHTML+= `
//                                     <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1"  onclick="updateTask(${tasks[i].taskid})" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
// 								<div class="">
//                                 <i class="mr-3 fw-bold"><i class="fa-regular fa-circle-question text-red fs-25px"></i></i>  
// 								</div>
// 								<div class="d-flex flex-column align-items-start">
// 									<div class="fw-bolder text-start">${tasks[i].title}</div>
// 									<div class="text-start">
// 										<div class="text-muted">#${tasks[i].taskid} created in ${tasks[i].date}</div>
// 										<div class="" title="${tasks[i].description}">${tasks[i].description.substring(0,60)}...</div>
// 									</div>
// 									<div class="mt-2 text-start">
// 										<span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">${tasks[i].priority}</span>
// 										<span class="py-1 px-2 bg-muted rounded-pill fw-bold">${tasks[i].type}</span>
// 									</div>
// 								</div>
// 							</button>
//                             `;
//                             // todo.innerHTML+=button1;

//                             ++todoCount;
                
//             }
//             else if(tasks[i].status=='In Progress'){
//                 ipCount++;
                

//                 let button1 = `
//                                 <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1" id="${tasks[i].taskid}" onclick="updateTask(${tasks[i].taskid})" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
//                             <div class="">
//                             <i class="mr-3 fw-bold"><i class="fa-solid fa-spinner text-orange fs-25px"></i></i>  
//                             </div>
//                             <div class="d-flex flex-column align-items-start">
//                                 <div class="fw-bolder text-start">${tasks[i].title}</div>
//                                 <div class="text-start">
//                                     <div class="text-muted">#${tasks[i].taskid} created in ${tasks[i].date}</div>
//                                     <div class="" title="${tasks[i].description}">${tasks[i].description.substring(0,60)}...</div>
//                                 </div>
//                                 <div class="mt-2 text-start">
//                                     <span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">${tasks[i].priority}</span>
//                                     <span class="py-1 px-2 bg-muted rounded-pill fw-bold">${tasks[i].type}</span>
//                                 </div>
//                             </div>
//                         </button>
//                         `;
//                         progress.innerHTML+=button1;
//         }
//         else if(tasks[i].status=='Done'){

//             doneCount++;
            
            

//             let button1 = `
//                             <button class="py-2 d-flex align-items-center gap-4 px-3 rounded border-1" id="${tasks[i].taskid}" onclick="updateTask(${tasks[i].taskid})" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
//                         <div class="">
//                             <i class="mr-3 fw-bold"><i class="fa-sharp fa-solid fa-circle-check text-green fs-25px"></i></i> 
//                         </div>
//                         <div class="d-flex flex-column align-items-start">
//                             <div class="fw-bolder text-start">${tasks[i].title}</div>
//                             <div class="text-start">
//                                 <div class="text-muted">#${tasks[i].taskid} created in ${tasks[i].date}</div>
//                                 <div class="" title="${tasks[i].description}">${tasks[i].description.substring(0,60)}...</div>
//                             </div>
//                             <div class="mt-2 text-start">
//                                 <span class="py-1 px-2 bg-primary rounded-pill mx-1 fw-bold">${tasks[i].priority}</span>
//                                 <span class="py-1 px-2 bg-muted rounded-pill fw-bold">${tasks[i].type}</span>
//                             </div>
//                         </div>
//                     </button>
//                     `;
//                     done.innerHTML+=button1;
//     }
//     else{
//         console.log("error")
//     }
//     }
//     tdindex.innerText=todoCount;
//     dnindex.innerText=doneCount;
//     ipindex.innerText=ipCount;
// }


function update(id) {
let btn_titleid = "title"+id;
let btn_dateid = "date" + id;
let btn_descriptionid = "description" + id;
let btn_priorityid = "priority" + id;
let btn_typeid = "type" + id;




let btn_title = document.getElementById(btn_titleid).textContent;
let btn_date = document.getElementById(btn_dateid).getAttribute("data");
let btn_description = document.getElementById(btn_descriptionid).textContent;
let btn_priority = document.getElementById(btn_priorityid).getAttribute("data");
let btn_type = document.getElementById(btn_typeid).getAttribute("data");
let btn_status = document.getElementById(btn_typeid).getAttribute("datastatus");






// remplire

if (btn_type == "feature") {
    document.getElementById("feature1").checked = true;
    document.getElementById("bug1").checked = false;
  } else {
    document.getElementById("feature1").checked = false;
    document.getElementById("bug1").checked = true;
  }
document.getElementById("title2").value = btn_title;

if (btn_priority === "high"){
    document.getElementById("form_options_priority1").value = 1;
}

if (btn_priority === "Medium"){
    document.getElementById("form_options_priority1").value = 2;
}

if (btn_priority === "Low"){
    document.getElementById("form_options_priority1").value = 3;
}



if (btn_status === "To Do"){
    document.getElementById("form_options_status1").value = 1;
}

if (btn_status === "In progress"){
    document.getElementById("form_options_status1").value = 2;
}

if (btn_status === "Done"){
    document.getElementById("form_options_status1").value = 3;
}

document.getElementById("hid").value = id ;

console.log("hdidhidjidid");
console.log("here "+document.getElementById("hid").value);
// let btn_id = document.getElementsByClassName("hid");

// console.log(id);
// document.getElementById("form_options_priority1").value = btn_priority;
// document.getElementById("form_options_status1").value = btn_status;
document.getElementById("date1").value = btn_date;
document.getElementById("description3").value = btn_description;

// btn_id.value = id;
// console.log(btn_id);

}
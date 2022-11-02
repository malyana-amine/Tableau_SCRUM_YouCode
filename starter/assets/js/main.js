
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

document.getElementById("date1").value = btn_date;
document.getElementById("description3").value = btn_description;

}
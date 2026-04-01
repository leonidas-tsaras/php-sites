
function validateLoginForm(form) {


    return true;
}

function validateRegisterForm(form) {


    return true;
}

function validatePostForm(form) {


    return true;
}

/*
function deleteMessage(id) {
    location.href = `files/delete_message.php?id=${id}`;
}

function publishMessage(id) {
    location.href = `files/publish_message.php?id=${id}`;
}

function draftMessage(id) {
    location.href = `files/draft_message.php?id=${id}`;
}
*/

function updateStatus(td, status) {
    let id = td.parentElement.id;
    location.href = `files/update_message_status.php?id=${id}&st=${status}`;
}

function updateTitle(td) {
    let title = td.textContent;
    let id = td.parentElement.id;
    //console.log(title);
    var new_title = prompt("Please enter new title", title);
    if(new_title  != null) {
        td.textContent = new_title;
        location.href = `files/update_message_title.php?id=${id}&title=${new_title}`;
    }
}




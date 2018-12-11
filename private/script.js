$(".edit-btn").on("click", (event) => {
    var id = event.target.id.split("-")[1];
    $.ajax({
        url: "../php/controller.php",
        method: "POST",
        data : { target : "category", id : id },
        success : (response) => {
            var data = JSON.parse(response);
            // show modal 
            var modalBody = "<input type='text' id='id' value='" + data.id + "'hidden> <ul id='edit-list'>";

            data.items.forEach((element) => {
                modalBody += "<li id='item-" + element.id + "'>" + element.name + " | " + element.price + " <button onclick='removeItem(" + element.id + ")' class='btn btn-danger delete-item' id='item-" + element.id + "'style='font-weight: bold'>X</button></li>";
            });
            
            modalBody += "</ul>";

            modalBody += "<input type='text' id='new-item-name' class='form-control' placeholder='product name'>";
            modalBody += "<input type='text' id='new-item-price' class='form-control' placeholder='product price'>";

            $("#edit-modal-body").html("").append(modalBody);
            $("#edit-modal-title").html(data.name + "(" + data.nameDK + ")");
            $("#edit-category-modal").modal("show");
        }
    })
});

$(".delete-btn").on("click", (event) => {
    var id = event.target.id.split("-")[1];
    $.ajax({
        url: "../php/controller.php",
        method: "POST",
        data : {
            target : "deleteCategory",
            id : id,
        },
        success : (response) => {
            var data = JSON.parse(response);

            if(data.message === "OK"){
                location.reload();
            } else if(data.message === "Error"){
                alert("Server error");
            } else if(data.message === "Bad Request"){
                alert("Bad request");
            }
        }
    })
});

$("#add-item").on("click", () => {
    var categoryID = $("#id").val();
    var name = $("#new-item-name").val();
    var price = $("#new-item-price").val();

    // make an ajax request to create a new item and then return it
    $.ajax({
        url : "../php/controller.php",
        method : "POST",
        data : {
            target : "addItem",
            name : name, 
            price : price,
            categoryID : categoryID,
        },
        success : (response) => {
            var data = JSON.parse(response);

            if(data.hasOwnProperty("message")){
                alert(data.message);
            } else {
                appendElement(data);
            }
        }
    })
});

$("#new-category-save-btn").on("click", () => {
    var name = $("#name-new-category").val();
    var nameDK = $("#nameDK-new-category").val();

    $.ajax({
        url : "../php/controller.php",
        method : "POST",
        data : {
            target : "addCategory",
            name : name,
            nameDK : nameDK,
        },
        success: (response) => {
            var data = JSON.parse(response);

            if(data.hasOwnProperty("message")){
                alert("message");
            } else {
                appendCategory(data);
            }
        }
    });
});

$(".delete-item").on("click", (event) => {
    console.log("h");
    $(event.target.id).remove();

});

function deleteItem(id){
    $.ajax({
        url : "../php/controller.php",
        method : "POST",
        data : {
            target : "deleteItem",
            id : id
        },
        success: (response) => {
            var data = JSON.parse(response);

            if(data.message === "OK"){
                removeElement(id)
            } else {
                alert(data.message);
            }
        }
    })
}

function appendElement(element){
    var output = "<li>" + element.name + " | " + element.price + " <button onclick='removeItem(" + element.id + ")' class='btn btn-success delete-item' id='item-" + element.id + "' style='font-weight: bold'>X</button></li>";

    $("#edit-list").append(output);
}

function appendCategory(element){
    var output = "<tr class='category-row' id='category-row-" + element.id + "'>";
    output += "<th scope='row'>" + element.id + "</th>";
    output += "<td>" + element.name + " (" + element.nameDK + ")</td>";
    output += "<td>" + element.items.length + "</td>";
    output += "<td> " + 
                    "<button class='btn btn-success edit-btn' id='edit-" + element.id + "'>Edit</button>" + 
                    "<button class='btn btn-danger delete-btn' id='delete-" + element.id + "'>Delete</button>" +
            "</td>";
    output += "</tr>";
    $("#table-body").append(output);
    location.reload();
}

function removeCategory(id){
    $("#category-row-" + id).remove();
}

function removeItem(id){
    $.ajax({
        url : "../php/controller.php",
        method : "POST",
        data : {
            target : "deleteItem",
            id : id,
        },
        success : (response) => {
            console.log(response);
            var data = JSON.parse(response);

            if(data.message === "OK"){
                $("#item-"+id).remove();
            } else {
                alert(data.message);
            }
        }
    });
}
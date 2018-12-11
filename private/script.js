$(".edit-btn").on("click", (event)=>{
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
                modalBody += "<li>" + element.name + " | " + element.price + " <span class='delete-item' id='item-" + element.id + "'style='font-weight: bold'>X</span></li>";
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

$(".delete-btn").on("click", (event)=>{
    var id = event.target.id.split("-")[1];
    $.ajax({
        url: "../php/controller.php",
        method: "POST",
        data : {
            target : "deleteCategory",
            id : id,
        },
        success : (response) => {
            console.log(response);
        }
    })
});

$("#add-item").on("click", ()=>{
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

function appendElement(element){
    var output = "<li>" + element.name + " | " + element.price + " <span class='delete-item' id='item-" + element.id + "' style='font-weight: bold'>X</span></li>";

    $("#edit-list").append(output);
}
/*Nahallah Champagne, April 19, 2024
IT 202-004, Project 05, nac88@njit.edu*/
  
$(document).ready(  () => {

    //////Feild validation with JavaScript/////
    console.log("JavaScript file is loaded.");

    $("#add_new_prod_form").submit( (event) => {
        const code = $("#code").val(); //find the html element with id
        const name = $("#name").val();
        const description = $("#description").val();
        const price = $("#price").val();
        const size = $("#size").val();
        const color = $("#color").val();
        let isValid = true;

        //Validate "Code"//
        if (code === "") { //checking the value and the data type
            $("#code").next().text("This field is requied");
            isValid = false;
        } else if (code.length < 4) {
            $("#code").next().text("Field length minimun is 4");
            isValid = false;
        } else if (code.length > 10) {
            $("#code").next().text("Field length maximun is 10");
            isValid = false;
        } else {
            $("#code").next().text("");
        }

        //Validate "Name"//
        if (name === "") { //checking the value and the data type
            $("#name").next().text("This field is requied");
            isValid = false;
        } else if (name.length < 10) {
            $("#name").next().text("Field length minimun is 10");
            isValid = false;
        } else if (name.length > 100) {
            $("#name").next().text("Field length maxiumum is 100");
            isValid = false;
        } else {
            $("#name").next().text("");
        }

        //Validate "Description"//
        if (description === "") { //checking the value and the data type
            $("#description").next().text("This field is requied");
            isValid = false;
        } else if (description.length < 10) {
            $("#description").next().text("Field length minimun is 10");
            isValid = false;
        } else if (description.length > 255) {
            $("#description").next().text("Field length maximun is 255");
            isValid = false;    
        } else {
            $("#description").next().text("");
        }

        //Validate "Price"//
        if (price === "") { //checking the value and the data type
            $("#price").next().text("This field is requied");
            isValid = false;
        } else {
            const numPrice = parseInt(price);
            if (numPrice <= 0 || numPrice > 100000) {
                $("#price").next().text("Invalid price");
                isValid = false;
            } else {
                $("#price").next().text("");
            }
        }

        //Validate "Size"//
        if (size === "") { //checking the value and the data type
            $("#size").next().text("This field is requied");
            isValid = false;
        } else if (size.length < 1 || size.length > 30) {
            $("#size").next().text("Invalid field length");
            isValid = false;
        } else {
            $("#size").next().text("");
        }

        //Validate "Color"//
        if (color === "") { //checking the value and the data type
            $("#color").next().text("This field is requied");
            isValid = false;
        } else if (color.length < 1 || color.length > 30) {
            $("#color").next().text("Invalid field length");
            isValid = false;
        } else {
            $("#color").next().text("");
        }

        //If isValid retruns true
        if (isValid) {
            $("#add_new_prod_form").submit();
        } else {
            event.preventDefault();
        }
    });

    //Reset Button with JavaScript
    $("#reset_button").click(() => {
        //clear text boxes
        $("#code").val("");
        //reset span element
        $("#code").next().text("*");
        $("#code").focus();

        //clear text boxes
        $("#name").val("");
        //reset span element
        $("#name").next().text("*");

        //clear text boxes
        $("#description").val("");
        //reset span element
        $("#description").next().text("*");

        //clear text boxes
        $("#price").val("");
        //reset span element
        $("#price").next().text("*");

        //clear text boxes
        $("#size").val("");
        //reset span element
        $("#size").next().text("*");

        //clear text boxes
        $("#color").val("");
        //reset span element
        $("#color").next().text("*");
    });
    $("#code").focus();
});
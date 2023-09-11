$(document).ready(function () {
    $("#nome").on("keyup", function() {
        console.log($(this).val());
    });
});
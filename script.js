$(document).ready(function(){
    $("form").submit(function(){
        alert("Your application has been submitted!");
    })
})


$(function(){
    $("#applyForm").submit(function(e){
        e.preventDefault();

        $.post("apply.php", $(this).serialize(), function(){
            alert("Application submitted successfully!");
            $("#applyForm")[0].reset();
        });
    });
});

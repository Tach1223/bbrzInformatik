

function submitForm(){

    var name = $("#name").val();
    var email =  $("#email").val();
    var age = $("#age").val();
    var story = $("#story").val();

    var str = $("#contactForm").serialize();
    console.info(str)

    /*console.info(name);
    console.info(email);
    console.info(age);
    console.info(story);*/

    $.ajax({
        type: "POST",
        url: "html5.html",
        data: str,
        success: function(){
            $("#contactForm").hide();
            $("#results").text("Thank you for your message!");
        },
        error: function(){
            alert('error alert');
        }
    });
}
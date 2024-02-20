

async function fetchUser(){
    var user = document.getElementById("username").value;

    console.log(user);
    try{
        const response = await fetch("https://api.github.com/users/"+user);
        const jresponse = await response.json();
        console.log(jresponse);
        var bildurl = jresponse.avatar_url;
        console.log(bildurl);
        $("#user").text(jresponse.login);
        document.getElementById("profilbild").src = bildurl;
        
    }
    catch(error){
        console.error(error);
    }


}
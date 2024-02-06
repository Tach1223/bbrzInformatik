async function fetchUser($user){
    try{
        const response = await fetch("https://api.github.com/users/".$user);
        const jresponse = await response.json();
        console.log(jresponse);
    }
    catch(error){
        console.error(error);
    }
}
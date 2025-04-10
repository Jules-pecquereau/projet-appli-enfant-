let x=0;
let message = document.getElementById("message_calc").innerHTML;
let audio =new Audio("son/parle.mp3");
message_dalay(x,message);
function message_dalay(x , message){
    if (x < message.length ){
        audio.play();
        document.getElementById("message").innerHTML=document.getElementById("message").innerHTML+message[x];
        if(x%2==0){
            document.getElementById("img_qui_change").src="image/calculette_qui_parle_pas.png";
        }
        else{
            document.getElementById("img_qui_change").src="image/calculette_qui_parle.png";
        }
        
        setTimeout("message_dalay(x++,message)", 50);
    }
    else{
        document.getElementById("img_qui_change").src="image/calculette_qui_parle_pas.png";
        audio.pause();
        return;

    }
}


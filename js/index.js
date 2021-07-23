var i = 0;
var txt = "Bienvenid@ a mi sitio web.";
var speed =100;



function typeWriter(){
    if(i<txt.length){
        $("#bienvenido-dinamico").append(txt.charAt(i));
        i++;
        setTimeout(typeWriter,speed);
    }
}

typeWriter();
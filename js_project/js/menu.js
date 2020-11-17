/*********************************
    DECLARACIÓN DE VARIABLES
**********************************/


/*********************************
    DECLARACIÓN DE FUNCIONES
**********************************/

function buildTopicItem(data){

}

function documentLoaded(event){
    console.log("DOM fully loaded and parsed");
    console.log(document.getElementById("topicsList"));

    //Obtener los datos del JSON

    //Iterar sobre los temas

    //Construir los elementos de los temas
    buildTopicItem();

    //Inyectar los elementos construidos en el DOM -> #topicsList

}



/*********************************
    LÓGICA DE LA APLICACIÓN
**********************************/

console.log(document.getElementById("topicsList"));

//Esperar a que cargue el documento para comenzar
document.addEventListener("DOMContentLoaded",documentLoaded);

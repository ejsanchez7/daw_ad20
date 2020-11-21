/*********************************
    DECLARACIÓN DE VARIABLES
**********************************/
var id;

/*********************************
    DECLARACIÓN DE FUNCIONES
**********************************/

//Se encarga de la construcción del tablero de juego
function buildGame(imgList,questionsList){

    //Seleccionar una imagen y colocarla en la interfaz
    var index = randomNumber(0,(imgList.length-1));
    var selectedImage = imgList[index];
    document.querySelector("#mainImage").style.backgroundImage = 'url("' + selectedImage.url + '")';

    //Armar las opciones de respuestas

    //Colocar una pregunta aleatoria en la interfaz


}

function documentLoaded(event){

    //Obtener los datos de los JSON
    var imagesPromise = getJsonFile("./data/topic_images.json");
    var questionsPromise = getJsonFile("./data/topic_questions.json");

    Promise.all([imagesPromise,questionsPromise]).then(function(data){

        id = getParameter("id");

        console.log("id",id);
        console.log("data",data[0][id]);
        console.log("data",data[1][id]);

        buildGame(data[0][id],data[1][id]);

    });


}



/*********************************
    LÓGICA DE LA APLICACIÓN
**********************************/

//Esperar a que cargue el documento para comenzar
document.addEventListener("DOMContentLoaded",documentLoaded);

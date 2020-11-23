/*********************************
    DECLARACIÓN DE VARIABLES
**********************************/
var id;
var answers = [];
//Valida si se puede destapar un cuadro
var enabled = true;

/*********************************
    DECLARACIÓN DE FUNCIONES
**********************************/

//Construye un arreglo de elementos LI con las opciones de respuesta para la imagen
function buildImageOptions(imgList,selectedIndex){

    //Generar copia de trabajo del arreglo para no alterar el original
    var images = imgList.slice();
    //Eliminar la opción que ya fue seleccionada
    answers.push({
        value: images[selectedIndex].name,
        correct: true
    });
    images.splice(selectedIndex,1);
    //Mezclar las imágenes que quedaron
    images = arrayShuffle(images);

    //Agregar N opciones extra al arreglo de respuestas tomándolas de images
    for(var i = 0; i < 2; i++){
        answers.push({
            value: images[i].name,
            correct: false
        });

    }

    //Mezclarlas para que no aparezcan en el mismo orden
    answers = arrayShuffle(answers);

    //Generar los elementos de html
    var liArray = [];

    for(var i = 0; i < answers.length; i++){

        var listItem = document.createElement("li");

        var input = document.createElement("input");
        input.type = "radio";
        input.name = "imgAnswers";
        input.id = "imgAnswers-" + i;
        input.value = answers[i].correct;

        //Agregar listener del click al input

        var label = document.createElement("label");
        label.setAttribute("for","imgAnswers-" + i);
        label.innerHTML = answers[i].value;

        listItem.appendChild(input);
        listItem.appendChild(label);

        liArray.push(listItem);

    }

    return liArray;

}

//Función que maneja el click en los cuadros que cubren la imagen
function coverClickHandler(event){
    if(enabled){
        var clickedDiv = event.target;
        clickedDiv.style.visibility = "hidden";
        //Desactivar el click
        //enabled = false;
    }
}

//Cubre la imagen con 9 cuadros de tamaño fijo
function coverImage(){
    //Tamaño 115x115
    var imageContainer = document.querySelector("#mainImage");

    for(var i = 1; i <= 9; i++){
        // <div class=coverItem>1</div>
        var div = document.createElement("div");
        div.className = "coverItem";
        div.innerHTML = i;

        //Agregar evento click
        div.addEventListener("click", coverClickHandler);

        imageContainer.appendChild(div);
    }

}

//Se encarga de la construcción del tablero de juego
function buildGame(imgList,questionsList){

    //Seleccionar una imagen y colocarla en la interfaz
    var index = randomNumber(0,(imgList.length-1));
    var selectedImage = imgList[index];
    document.querySelector("#mainImage").style.backgroundImage = 'url("' + selectedImage.url + '")';

    //Cubrir la imagen
    coverImage();

    //Armar las opciones de respuestas
    var options = buildImageOptions(imgList,index);//Devuelve un arreglo con los LIs a insertar

    //Insertarlos en el DOM
    var optionsContainer = document.querySelector("#imageOptions");//UL donde se insertarán

    for(var i = 0; i < options.length; i++){
        optionsContainer.appendChild(options[i]);
    }

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

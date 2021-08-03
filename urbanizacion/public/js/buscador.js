//Declarando variables

bars_search = document.getElementById("ctn-bars-search");
cover_ctn_search =




//funcion para mostrar el buscador

function mostrar_buscador(){
    bars_search.style.top ='80px';
    cover_ctn_search.style.display ="block";
    inputSearch.focus();
}

function ocultar_buscador(){
    bars_search.style.top ="-10px";
    cover_ctn_search.style.display ="none";
    inputSearch.value="";
}

//Creando filtrado de busqueda
function buscador_interno(){
    filter = inputSearch.value.toUpperCase();


}
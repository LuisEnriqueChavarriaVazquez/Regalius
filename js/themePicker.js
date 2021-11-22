$(document).ready(function () {

    var temaGuardado;
    var tema = $("#theme");
    var temaAutomatico;

    //Definicion de color por defecto para el primer uso
    if(localStorage.getItem("tema") === null){
        localStorage.setItem("tema", "css/a_styles.css"); 
        temaAutomatico = localStorage.getItem("tema");
        tema.attr("href", temaAutomatico);
    }

    //Craga automatica del tema anterior
    function automaticSetter(){
        temaAutomatico = localStorage.getItem("tema");
        tema.attr("href", temaAutomatico);
    }

    automaticSetter();

    //Definir los temas nuevos en el localStorage
    function normal(){
        localStorage.setItem("tema", "css/a_styles.css"); 
        temaGuardado = localStorage.getItem("tema");
    }

    function a_deuteranopia(){
        localStorage.setItem("tema", "css/a_deuteranopia.css"); 
        temaGuardado = localStorage.getItem("tema");
    }

    function a_protanopia(){
        localStorage.setItem("tema", "css/a_protanopia.css");
        temaGuardado = localStorage.getItem("tema"); 
    }

    function a_tritanopia(){
        localStorage.setItem("tema", "css/a_tritanopia.css");
        temaGuardado = localStorage.getItem("tema"); 
    }

    function a_oscuro(){
        localStorage.setItem("tema", "css/a_oscuro.css"); 
        temaGuardado = localStorage.getItem("tema");
    }

    function a_oscuro_verde(){
        localStorage.setItem("tema", "css/a_oscuro_verde.css"); 
        temaGuardado = localStorage.getItem("tema");
    }

    function a_oscuro_azul(){
        localStorage.setItem("tema", "css/a_oscuro_dark.css"); 
        temaGuardado = localStorage.getItem("tema");
    }

    function a_oscuro_rosa(){
        localStorage.setItem("tema", "css/a_oscuro_rosa.css"); 
        temaGuardado = localStorage.getItem("tema");
    }

    //Funciones de click en cada uno de los temas
    document.getElementById('a_styles').addEventListener('click', function () {
        normal();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('a_deuteranopia').addEventListener('click', function () {
        a_deuteranopia();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('a_protanopia').addEventListener('click', function () {
        a_protanopia();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('a_tritanopia').addEventListener('click', function () {
        a_tritanopia();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('a_oscuro').addEventListener('click', function () {
        a_oscuro();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('a_oscuro_verde').addEventListener('click', function () {
        a_oscuro_verde();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('a_oscuro_azul').addEventListener('click', function () {
        a_oscuro_azul();
        tema.attr("href", temaGuardado);
    })

    document.getElementById('a_oscuro_rosa').addEventListener('click', function () {
        a_oscuro_rosa();
        tema.attr("href", temaGuardado);
    })

});
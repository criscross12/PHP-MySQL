document.addEventListener("DOMContentLoaded", () =>{
 let form = document.getElementById('formsubir');

 form.addEventListener("submit", function(event) {
    event.preventDefault();
    subir_archivos(this);


 });

});
function subir(form){
    let barraestado = form.childre[1].children[0],
        span = barraestado.children[0],
        boton_cancelar = form.children[2].children[1];

barra_estado.classList.remove('barra_verde', 'barra_roja');
//peticion
let peticion = XMLHttpRequest();


//progeso
peticion.upload.addEventListener("progress", (event) => {
    let porcentaje = Math.round((event.loaded / event.total) * 100);
    console.log(porcentaje);
    barraestado.style.width = porcentaje + '%';
    span.innerHTML = porcentaje+'%';
});
//finalizado
peticion.addEventListener("load", () => {
    barraestado.classList.add('barraverde');
    span.innerHTML = "Proceso Completado";

});

//Enviar datos
peticion.open('post','subir.php');
peticion.send(new FormData(form));

//Cancelar
boton_cancelar.addEventListener("click", () => {
    peticion.abort();
    barraestado.classList.remove('barraverde');
    barraestado.classList.add('barraroja');
    span.innerHTML = "Proceso cancelado";
});

}
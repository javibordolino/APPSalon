function iniciarApp(){buscarPorFecha()}function buscarPorFecha(){document.querySelector("#fecha").addEventListener("input",(function(e){fechaSeleccionada=e.target.value,window.location="?fecha="+fechaSeleccionada}))}document.addEventListener("DOMContentLoaded",(function(){iniciarApp()}));
var elementosA = document.getElementsByTagName("a");
document.write("<b>Numero de enlaces de la página: "+elementosA.length+"</b>" + "<br></br>");

var parrafos = document.getElementsByTagName("p");
for(var i=0; i<parrafos.length; i++) {
    if(i == 2){
        document.write("<b>Número de enlaces en el tercer párrafo: "+parrafos[i].getElementsByTagName("a").length+"</b>");
    }
}
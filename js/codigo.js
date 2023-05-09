alert("Hola Mundo!");

var mensaje = alert("Soy el primer script");

var meses = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"]
for(i = 0; i<meses.length; i++){
    document.write(meses[i] + ", ")
}

var numero1 = 5;
var numero2 = 8;
if(numero1 <= numero2) {
console.log("numero1 no es mayor que numero2");
}
if(numero2 > 0) {
console.log("numero2 es positivo");
}
if(numero1 != 0) {
console.log("numero1 es distinto de cero");
}
if(numero1 + 1 <= numero2) {
console.log("Incrementar en 1 unidad el valor de numero1 no lo hace mayor o igual que numero2");
}

function parOimpar(numero){
    if(numero % 2 == 0){
        document.write("<br></br>");
        document.write("<b>El número ingresado es par</b>");
    }else{
        document.write("<br></br>");
        document.write("<b>El número ingresado es impar</b>");
    }
}

parOimpar(3);
const { endsWith } = require("lodash")

function alerta(){
    alert("Hola Mundo")
}

function sumar(){
    let num1=parseInt(document.getElementById("numero1").value)
    let num2=parseInt(document.getElementById("numero2").value)
    let resultado= num1+num2
    alert(`${resultado}`)
}
function verconsola(){
    console.log("Hola Mundo")
}


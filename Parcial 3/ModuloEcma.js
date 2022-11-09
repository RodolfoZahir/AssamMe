export function letras(palabra) {
    return palabra.replace('a','o');
}
export function lenghtpalabra(palabra) {
    return palabra.lenght; 
}

/*
Pruebas
let number = 42;
const hello = () => "Hello!";
const goodbye = () => "¡Adiós!";

export { number };                   // Se crea un módulo y se añade number
export { hello, goodbye as bye };    // Se añade saludar y despedir al módulo
export { hello as greet };           // Se añade otroNombre al módulo

export function numeromagico(num1) {
}
export function numerodesuerte(num1) {
    var num1 = 7;
    return num1();
}
*/
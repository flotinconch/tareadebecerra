function validateAprendiz(e) {
    e.preventDefault();
    formulario = document.getElementById('formuAprendiz');
    nombre = document.getElementById('inameAprendiz');
    fechaNacimiento = document.getElementById('naciAprendiz');
    sexo = document.getElementById('sexAprendiz');
    ciudad = document.getElementById('ciuAprendiz');

    lVali = true;

    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (fechaNacimiento.value == "") {
        fechaNacimiento.style.borderColor = "red";
        ohSnap('Ingrese su fecha de nacimiento...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (sexo.value == "") {
        sexo.style.borderColor = "red";
        ohSnap('Ingrese su sexo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (ciudad.value == "") {
        ciudad.style.borderColor = "red";
        ohSnap('Ingrese su ciudad de residencia...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }

    if (lVali == true) {
        formulario.submit();
    }

}


function validateAprendizMod(e) {
    e.preventDefault();
    formulario = document.getElementById('formAprendizm');
    nombre = document.getElementById('inameAprendizm');
    fechaNacimiento = document.getElementById('naciAprendizm');
    sexo = document.getElementById('sexAprendizm');
    ciudad = document.getElementById('ciuAprendizm');
    
    lVali = true;
    
    if (nombre.value == "") {
        nombre.style.borderColor = "red";
        ohSnap('Ingrese su nombre...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (fechaNacimiento.value == "") {
        fechaNacimiento.style.borderColor = "red";
        ohSnap('Ingrese su fecha de nacimiento...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (sexo.value == "") {
        sexo.style.borderColor = "red";
        ohSnap('Ingrese su sexo...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    if (ciudad.value == "") {
        ciudad.style.borderColor = "red";
        ohSnap('Ingrese su ciudad de residencia...', { color: 'red' }); // alert will have class 'alert-color'
        lVali = false;
    }
    
    if (lVali == true) {
        formulario.submit();
        if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
        }
    }
    
}

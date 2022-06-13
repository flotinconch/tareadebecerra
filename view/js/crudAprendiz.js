function eraseAprendiz(obj) {
    let codigoAprendiz = obj.children[0].innerHTML;

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Estas seguro?',
        text: "No podras revertir esto!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'No, cancelar!',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "index.php?ruta=eraseAprendiz&codigo=" + codigoAprendiz;

            /*swalWithBootstrapButtons.fire(
                'Eliminado!',
                'El registro ha sido eliminado.',
                'success'
            )*/
        } else if (
            /* Read more about handling dismissals below */
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Cancelado',
                'El registro esta a salvo :)',
                'error'
            )
        }
    })
}

function getDataAprendiz(obj) {
    let codigoAprendiz = obj.children[0].innerHTML;
    let nombreAprendiz = obj.children[1].innerHTML;
    let fechaNacimiento = obj.children[2].innerHTML;
    let sexoAprendiz = obj.children[3].innerHTML;
    let ciudadAprendiz = obj.children[4].innerHTML;


    document.getElementById('icodeAprendizm').value = codigoAprendiz;
    document.getElementById('inameAprendizm').value = nombreAprendiz;
    document.getElementById('naciAprendizm').value = fechaNacimiento;
    document.getElementById('sexAprendizm').value = sexoAprendiz;
    document.getElementById('ciuAprendizm').value = ciudadAprendiz;

}

function getGenerarReporteAprendiz(e) {
    e.preventDefault();
    window.open('view/module/allaprendiz.php', '_blank');
}
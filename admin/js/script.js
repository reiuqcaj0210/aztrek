$(function () {

    $("select").select2();
    tinymce.init({
        selector: 'textarea'
    });
    $('table').DataTable();

    let deleteButtons = document.querySelectorAll ('.btn.btn-danger');
    deleteButtons.forEach(function (button) {

        button.addEventListener('click', function (event){
            event.preventDefault();
            let response = confirm ("Etes-vous certai de vouloir supprimer?");
            if (!response) {
                event.preventDefault();
            }

        });

    });

    $('table .btn.btn-danger').click(function (event) {
        let response = confirm("Etes vous sur de vouloir supprimer?");
        if (!response) {
            event.preventDefault();
        }

    });
});

$(function () {
    funkcije();
});

function funkcije() {

    $(document).on('click', '#edit-btn', function () {
        $('#izmena-servisa-modal').modal('show');
    })

}
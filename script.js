$(function () {
    funkcije();
});

function funkcije() {

    $(document).on('click', '#edit-btn', function () {

        let id = $(this).attr('value');

        $.ajax({
            url: 'servisdata.php',
            method: 'post',
            data: { ID: id },
            dataType: 'json',

            success: function (servis) {
                $('#izmena-servisa-modal').modal('show');
                $('#servis_id').val(servis.id);
                $('#edit_datum').val(servis.datum);
                $('#edit_adresa').val(servis.adresa);
                $('#edit_grad').val(servis.grad);
                $('#edit_tip_servisa').val(servis.tip_id);
                $('#edit_majstor').val(servis.majstor_id);
            }
        });

    })

}
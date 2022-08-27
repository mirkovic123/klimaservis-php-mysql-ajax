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

    $(document).on('click', '#sacuvaj_izmene_button', function () {

        let servis_id = $('#servis_id').val();
        let datum = $('#edit_datum').val();
        let adresa = $('#edit_adresa').val();
        let grad = $('#edit_grad').val();
        let tip_servisa = $('#edit_tip_servisa').val();
        let majstor_id = $('#edit_majstor').val();


        $.ajax({
            url: 'updateservis.php',
            method: 'post',
            data: {
                SERVIS_ID: servis_id,
                DATUM: datum,
                ADRESA: adresa,
                GRAD: grad,
                TIP_SERVISA: tip_servisa,
                MAJSTOR_ID: majstor_id
            },
            dataType: 'json',

            success: function () {

            }
        });

    })


    $(document).on('click', '#delete-btn', function () {

        let servis_id = $(this).val();

        $.ajax({
            url: 'deleteservis.php',
            method: 'post',
            data: {
                SERVIS_ID: servis_id,
            },

            success: function () {
                alert('Servis je uspešno obrisan!');
                location.reload();
            }
        });

    })

}
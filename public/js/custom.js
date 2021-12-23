$(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#customer-form-creation').on('submit', function (e) {
        
        e.preventDefault();

        $.ajax({
            type : 'POST',
            dataTy : 'json',
            data : $(this).serialize(),
            encode : true,
            beforeSend : function () {
                $('#customer-form-creation .fa-spinner').css('display', 'block');
                $('#customer-form-creation .fa-save').hide();
            },
            complete : function () {
                $('#customer-form-creation .fa-spinner').hide();
                $('#customer-form-creation .fa-save ').show();
            },
            success : function (response) {
                console.log(response);
            }
        })
    });
})
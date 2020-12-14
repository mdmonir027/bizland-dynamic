$(document).ready(function () {
    $.noConflict();
    $('#dataTable').DataTable({
        "autoWidth": false,
        "responsive": true,
    });
    const baseURL = "http://bizland-dynamic.test/";

    $('#hero-form').on('submit', function (e) {

        e.preventDefault();

        let hero_title = $('#title');
        let sub_title = $('#sub_title');
        let hero_link1_text = $('#hero_link1_text');
        let hero_link1_url = $('#hero_link1_url');
        let hero_link2_text = $('#hero_link2_text');
        let hero_link2_url = $('#hero_link2_url');

        if (hero_title.val() == '') {
            hero_title.addClass('is-invalid');
        } else {
            hero_title.removeClass('is-invalid');
        }
        if (sub_title.val() == '') {
            sub_title.addClass('is-invalid');
        } else {
            sub_title.removeClass('is-invalid');
        }
        if (hero_link1_text.val() == '') {
            hero_link1_text.addClass('is-invalid');
        } else {
            hero_link1_text.removeClass('is-invalid');
        }
        if (hero_link1_url.val() == '') {
            hero_link1_url.addClass('is-invalid');
        } else {
            hero_link1_url.removeClass('is-invalid');
        }
        if (hero_link2_text.val() == '') {
            hero_link2_text.addClass('is-invalid');
        } else {
            hero_link2_text.removeClass('is-invalid');
        }
        if (hero_link2_url.val() == '') {
            hero_link2_url.addClass('is-invalid');
        } else {
            hero_link2_url.removeClass('is-invalid');
        }

        if (hero_title.val() != '' && sub_title.val() != '' && hero_link1_text.val() != '' && hero_link1_url.val() != '' && hero_link2_text.val() != '' && hero_link2_url.val() != '') {

            $('.loader').show();
            $.ajax({
                url: baseURL + "admin/action/admin_action.php",
                method: 'post',
                data: $(this).serialize() + "&action=about_us",
                success: function (response) {
                    $('.loader').hide();
                    if (!response.error) {
                        if (response.rdr) {
                            setTimeout(function () {
                                window.location = response.rdr_url;
                            }, 2000);
                        }
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: response.message
                        });

                    }

                },
                error: function (response) {
                    console.log('error')
                }

            });
        }

    });

    $('#image-form').on('submit', function (event) {
        event.preventDefault();

        $('.loader').show();
        let action = $(this).data('action-url');

        let formData = new FormData(this);
        formData.append('action', action);

        $.ajax({
            url: baseURL + "admin/action/admin_action.php",
            method: 'post',
            processData: false,
            contentType: false,
            dataType: 'json',
            data: formData,
            success: function (response) {
                $('.loader').hide();
                if (!response.error) {

                    if (response.rdr) {

                        Swal.fire({
                            title: 'Successful!',
                            text: response.message,
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Go Back'
                        }).then((result) => {

                            if (result.isConfirmed) {
                                window.location = response.r_url;
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: response.message
                        });

                    }
                }
                $('#about-us-form-btn').html('Save').attr('disabled', false);


            },
            error: function (response) {
                console.log('error')
            }

        });

    });

    $('#text-form').on('submit', function (event) {
        event.preventDefault();

        $('.loader').show();
        let action = $(this).data('action-url');


        $.ajax({
            url: baseURL + "admin/action/admin_action.php",
            method: 'post',
            data: $(this).serialize() + '&action=' + action,
            success: function (response) {
                $('.loader').hide();
                if (!response.error) {

                    if (response.rdr) {
                        Swal.fire({
                            title: 'Successful!',
                            text: response.message,
                            icon: 'success',
                            showCancelButton: false,
                            confirmButtonColor: '#3085d6',
                            confirmButtonText: 'Go Back'

                        }).then((result) => {

                            if (result.isConfirmed) {
                                window.location = response.rdr_url;
                            }

                        });
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'success',
                            text: response.message
                        });

                    }
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Failed',
                        text: response.message
                    });
                }
                $('#text-form button').html('Save').attr('disabled', false);


            },
            error: function (response) {
                console.log('error')
            }

        });

    });

    $('body').on('change', '.toggle-button', function (event) {
        $('.loader').show();
        let status = $(this).prop('checked') ? 1 : 0;
        let id = $(this).data('id');
        let action = $(this).data('action');

        $.ajax({
            url: baseURL + "admin/action/admin_action.php",
            method: 'post',
            data: {id, status, action},
            success: function (response) {
                $('.loader').hide();
                if (response.error) {

                    Swal.fire({
                        icon: 'error',
                        title: 'Failed',
                        text: response.message
                    });
                }
            }
        });
    })

});


function imagePreview(file, targetBlock) {

    if (file.files && file.files[0]) {

        const reader = new FileReader();
        reader.onload = function (event) {
            $(targetBlock).attr('src', event.target.result)
        }
        reader.readAsDataURL(file.files[0]);

    }

}

jQuery(document).ready(function(){
    var folderName = jQuery('#folder_id').val();
    var fileName = jQuery('#file_name_id').val();
    var description = jQuery('#description_id').val();
    var image = jQuery('#file_id').val();
    jQuery('#add_file_form').validate({ 
        rules: {
            // 'folder_name': {
            //     required: true,
            //     minlength: 3,   
            // },
            // 'file_name_name': {
            //     required: true,
            //     minlength: 3,   
            // },
            // 'file_name': {
            //     required: true,
            //     minlength: 3,   
            // },


        },
        submitHandler: function () {
            var formData = new FormData(document.getElementById("add_file_form"));
            jQuery.ajax({
                type: 'POST',
                url: 'insert file.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function (data) {
                    if (parseInt(data) === parseInt(1)) {
                        console.log("data inserted");
                        let timerInterval
                        Swal.fire({
                            title: 'your data successfully registered!',
                            html: 'milliseconds.',
                            position: 'top-end',
                            icon: 'success',
                            timer: 1000,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                        jQuery('#folder_id').val("");
                        jQuery('#file_name_id').val("");
                        jQuery('#description_id').val("");
                        jQuery('#file_id').val("");

                        // setInterval('location.reload()', 1000);
                    }
                    if (parseInt(data) !== parseInt(1)) {
                        let timerInterval
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops, error occurred!',
                            text: data,
                            // html: '<b></b>milliseconds.',
                            position: 'top-end',
                            timer: 3000,
                            showCancelButton: true,
                            timerProgressBar: true,
                            didOpen: () => {
                                Swal.showLoading()
                                const b = Swal.getHtmlContainer().querySelector('b')
                                timerInterval = setInterval(() => {
                                    b.textContent = Swal.getTimerLeft()
                                }, 100)
                            },
                            willClose: () => {
                                clearInterval(timerInterval)
                            }
                        }).then((result) => {
                            /* Read more about handling dismissals below */
                            if (result.dismiss === Swal.DismissReason.timer) {
                                console.log('I was closed by the timer')
                            }
                        })
                    }
                },
                error: function (err) {
                    let timerInterval
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops, error occurred!',
                        text: data,
                        // html: '<b></b>milliseconds.',
                        position: 'top-end',
                        timer: 3000,
                        showCancelButton: true,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                }
            });
        }
    });
});
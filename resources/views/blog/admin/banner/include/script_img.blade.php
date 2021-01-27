<script>

    function changeProfileBanner() {
        $('#file_banner').click();
    }
    $('#file_banner').change(function () {
        if ($(this).val() != '') {
            uploadBanner(this);

        }
    });
    function uploadBanner(img){
        var form_data = new FormData();
        form_data.append('file', img.files[0]);
        form_data.append('_token', '{{csrf_token()}}');
        $('#loading').css('display', 'block');
        $.ajax({
            url: "{{url('/admin/banners/ajax-image-upload')}}",
            data: form_data,
            type: 'POST',
            contentType: false,
            processData: false,
            success: function (data) {
                if (data.fail) {
                    $('#preview_image').attr('src', '{{asset('images/no_image.jpg')}}');
                    alert(data.errors['file']);
                }
                else {
                    console.log(data)
                    $('#file_name').val(data);
                    $('#preview_image').attr('src', '{{asset('uploads/banners_media')}}/' + data);

                }
                $('#loading').css('display', 'none');
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText);
                $('#preview_image').attr('src', '{{asset('images/no_image.jpg')}}');
            }
        });
    }

    function removeFileBanner() {
       if ($('#file_name').val() != '')
            if (confirm('Вы точно хотите удалить эту картинку?')) {
                $('#loading').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: '{{url('/admin/banners/ajax-remove-image')}}'+ '/' + $('#file_name').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image').attr('src', '{{asset('images/no_image.jpg')}}');
                        $('#file_name').val('');
                        $('#loading').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }

    function removeFileImgBanner() {
        if ($('a.myimg').data('name') != '')
            if (confirm('Вы точно хотите удалить эту картинку?')) {
                $('#loading').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: '{{url('/admin/banners/ajax-remove-image')}}'+ '/' + $('a.myimg').data('name'),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image').attr('src', '{{asset('images/no_image.jpg')}}');
                        $('#file_name').val('');
                        $('#loading').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }

    function removeFileGBanner() {
            if (confirm('Вы точно хотите удалить эту картинку?')) {
                $('#loading').css('display', 'block');
                var form_data = new FormData();
                form_data.append('_method', 'DELETE');
                form_data.append('_token', '{{csrf_token()}}');
                $.ajax({
                    url: '{{url('/admin/banners/ajax-remove-image')}}'+ '/' + $('#file_name').val(),
                    data: form_data,
                    type: 'POST',
                    contentType: false,
                    processData: false,
                    success: function (data) {
                        $('#preview_image').attr('src', '{{asset('images/no_image.jpg')}}');
                        $('#file_name').val('');
                        $('#loading').css('display', 'none');
                    },
                    error: function (xhr, status, error) {
                        alert(xhr.responseText);
                    }
                });
            }
    }


</script>

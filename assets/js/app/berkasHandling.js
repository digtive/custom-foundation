
    $(document).ready(function () {
        var baseUrl = window.location.origin+'/simrp/';
        var formUnggah = $('.form-berkas');
        var formBody = $('#berkas');
        var pathData = [];
        var pendaftarID = $('.user-detail').attr('id');

        /**
         * event
         * form upload on change, btn submit on click
         * */
        formUnggah.change(function () {
            var berkasName = $(this).attr('name');
            generate_path(berkasName);
        });
        $('#btn-unggah').click(function (e) {
            e.preventDefault();
            upload_files();
        });


        /**
         * functions
         * generate path, upload files to db
         * */
        function generate_path(path) {
            var url = baseUrl+'AjaxController/ajaxGeneratePath';
            var dataRequest = {
                'form' : path
            };
            $.ajax({
                url : url,
                data : dataRequest,
                dataType : 'json',
                method : 'post',
                type : 'ajax',
                async: true,
                success : function (data) {
                    if (data !== ''){
                        pathData.push(data);
                    } else {
                        pathData = [];
                    }
                },
                error : function (data) {
                    console.log(data);
                }
            });
        }

        function upload_files() {
            if (pathData.length > 0){
                for (let i=0; i<pathData.length; i++){
                    var formData = pathData[i].form;
                    var fileName = pathData[i].file_name;
                    var url = baseUrl+'AjaxController/ajaxUploadFiles/'+formData+'/'+fileName;
                    $('#berkas').ajaxSubmit({
                       url : url,
                        type : 'post'
                    });
                }
                save_files(pathData);
            }
        }

        function save_files(path) {
            var url = baseUrl+'AjaxController/ajaxSaveDocument';
            var dataRequest = {
              'dokumen': JSON.stringify(path),
              'pendaftar': pendaftarID
            };

            $.ajax({
               url : url,
                data: dataRequest,
                method : 'POST',
                dataType: 'json',
                async : true,
                success: function (data) {
                    if (data === 'success'){
                        window.location.href = baseUrl+'pendaftar/syarat?syarat='+pendaftarID;
                    }
                },
                error : function (data) {
                    console.log(data.responseText);
                }
            });
        }

    });


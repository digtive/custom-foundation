    $(document).ready(function () {

        $('.berkasForm input').blur(function () {
            if ($(this).val().trim() !== ''){
                $(this).css('border','0');
            } else {
                $(this).css('border-bottom','1px black dotted');
            }
        });

        $(document).on('change','#n1', function () {
           // console.log('bisa');
        });

        // animasi form kelengkapan berkas
        $('.form-kelengkapan').css('display','none');
        $('.form-kelengkapan.form-active').css('display','flex');
        $('.btn-kelengkapan').click(function (event) {
            event.preventDefault();
            animateForm($(this).attr('href'));
        });

        $('a.btn-kelengkapan:visited').parent('.list-group-item').addClass('bg-success');
        function animateForm(id) {
            $('.form-kelengkapan.form-active').fadeOut('slow');
            $('.form-kelengkapan.form-active').removeClass('form-active');
            $(".form-kelengkapan"+id+"").fadeIn('slow');
            $(".form-kelengkapan"+id+"").addClass('form-active');
        }


    });
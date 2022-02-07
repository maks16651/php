
jQuery(document).ready(function() {
    jQuery('#btn').click() (function(){
        let firstname = jQuery('.first_name').val();
        let lastname = jQuery('.last_name').val();
        let birthday = jQuery('.birthday').val();
        let country = jQuery('.country').val();
        let subject = jQuery('.subject').val();


            jQuery.ajax({
                url:"post.php",
                type:"POST",
                data:{ firstname:firstname, lastname:lastname, birthday:birthday, subject:subject, country:country }, // Отправка
                dataType: "json",

                })
        });


});


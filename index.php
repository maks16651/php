<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/jquerymaskedinput.js"></script>

    <script src="https://yastatic.net/share2/share.js"></script>
    <style type="text/css">
        .step_2,.step_3 {
            display: none;
        }
        .progress-bar{
            background-color: #3adb76;
        }
    </style>
</head>
<body>
<div><iframe height="450px" width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.856780407258!2d-118.34609181108223!3d34.10124768204052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2zNzA2MCBIb2xseXdvb2QgQmx2ZCwgTG9zIEFuZ2VsZXMsIENBIDkwMDI4LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1643907095520!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
<div mt="150px" class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <h1><center>To participate in the conference, please fill out the form</center></h1><br>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" id="progressbar" style="width: 30%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">33.33 %</div>
            </div><br>
            <form action="" role="form" id="ajax_form" method="post" >
                <div class="box-body">

                    <div class="step_1">
                        <div class="form-group">
                            <label for="First_name">Name :-</label>
                            <input type="text" class="form-control first_name " id="name" name="first_name" placeholder="Name" required>
                        </div><br>

                        <div class="form-group">
                            <label for="Second_name">Second name:-</label>
                            <input type="text" class="form-control second_name" id="second_name" name="Second_name"   required>
                        </div><br>

                        <div class="form-group">
                            <label for="birthday">Birthday:-</label>
                            <input  class="form-control birthday" id="birthday" required value="2000-01-01" type="date"   name="birthday"   >
                        </div><br>

                        <div class="form-group">
                            <label for="subject">Report subject:-</label>
                            <input  class="form-control subject" id="subject" required  type="text"   name="subject"   >
                        </div><br>

                        <div class="form-group">
                            <label for="country">Country:-</label>
                            <select class="form-control country" name="country" id="country"  >
                                <?php
                                $arr = array("Греция","ОАЭ","Украина", "Россия");
                                foreach ($arr as &$value) {
                                    echo "<option>".$value."</option>";
                                }?>
                            </select>
                        </div><br>

                        <div class="form-group">
                            <label for="phone">Phone:-</label>
                            <input  class="form-control phone" type="tel" id="phone" placeholder="+(099) 999 99 99)" name="phone"   >
                        </div><br>

                        <div class="form-group">
                            <label for="email">Email:-</label>
                            <input  class="form-control email" id="email" required  type="email"   name="email"   >
                        </div><br>

                        <div class="box-footer">
                            <button type="button" id="next_1" class="btn btn-danger">Next</button>
                        </div>
                    </div>

                    <div class="step_2">

                        <div class="form-group">
                            <label for="company"> Company :-</label>
                            <input type="text" class="form-control company" id="company" name="company" >
                        </div><br>

                        <div class="form-group">
                            <label for="position">Position :-</label>
                            <input type="text" class="form-control position" id="position" name="position" >
                        </div><br>

                        <div class="form-group">
                            <label for="about">About me :-</label>
                            <textarea  class="form-control about" name="about" id="about" ></textarea>
                        </div><br>

                        <div class="form-group">
                            <label for="photo">Photo :-</label>
                            <input  class="form-control photo" type="file" id="photo" name="photo"><br>
                        </div><br>

                        <div class="box-footer">
                            <button type="button" id="previous_2" class="btn btn-primary">Previous</button>
                            <button type="button" id="next_2" class="btn btn-warning">Next</button>
                        </div>
                    </div>

                    <div class="step_3">

                        <div  class="ya-share2"  data-curtain data-size="l" data-shape="round" data-lang="en" data-services="vkontakte,facebook,odnoklassniki,twitter"></div>
                        <div class="link" >
                            <a href="members.php" class="btn btn-primary stretched-link">All members</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>

<script type="text/javascript">
    jQuery(document).on('click','#next_1',function(){
        let firstname = jQuery('.first_name').val();
        let lastname = jQuery('.second_name').val();
        let birthday = jQuery('.birthday').val();
        let country = jQuery('.country').val();
        let subject = jQuery('.subject').val();
        let mail = jQuery('.email').val();
        let phone = jQuery('.phone').val();
        alert("hello")

                jQuery.ajax({
                    url:"post.php",
                    type:"POST",
                    data:{ firstname:firstname, lastname:lastname, birthday:birthday, subject:subject, country:country,mail:mail,phone:phone }, // Отправка
                    dataType: "json",
                    contentType: false, // нужно указать тип контента false для картинки(файла)
                    processData: false,

                })
        $('.step_2').show();
        $('.step_1').hide();
        $('#progressbar').css('width','65%');
        $('#progressbar').text('2nd step %');

    });
    $(document).on('click','#previous_2',function(){
        $('.step_1').show();
        $('.step_2').hide();
        $('#progressbar').css('width','30%');
        $('#progressbar').text('1st step %');
    });
    jQuery(document).on('click','#next_2',function(){
        let firstname = jQuery('.first_name').val();
        let company = jQuery('.company').val();
        let position = jQuery('.position').val();
        let about = jQuery('.about').val();
        let photo = jQuery('.photo').val();
        alert("hello")

        jQuery.ajax({
            url:"post.php",
            type:"POST",
            data:{ firstname:firstname, company:company, position:position, about:about , photo:photo }, // Отправка
            dataType: "json",
            cache:false,
            ContentType: false, // нужно указать тип контента false для картинки(файла)
            processData: false,



        })
        $('.step_3').show();
        $('.step_2').hide();
        $('#progressbar').css('width','100%');
        $('#progressbar').text('success');
    });
    $(document).on('click','#previous_3',function(){
        $('.step_3').hide();
        $('.step_2').show();
        $('#progressbar').css('width','65%');
        $('#progressbar').text('65%');
    });
    $(document).ready(function (){
        $("#phone").mask("+(099) 999 99 99");
    });

</script>


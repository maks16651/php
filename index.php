<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Form></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" ></script >
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="ajax.js"></script>
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
            <form action="" role="form" id="ajax_form" method="post">
                <div class="box-body">

                    <div class="step_1">
                        <div class="form-group">
                            <label for="First_name">Name :-</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                        </div><br>

                        <div class="form-group">
                            <label for="Second_name">Second name:-</label>
                            <input type="text" class="form-control" id="Second_name" name="Second_name"   required>
                        </div><br>

                        <div class="form-group">
                            <label for="birthday">Birthday:-</label>
                            <input  class="form-control" id="birthday" required value="2000-01-01" type="date"   name="birthday"   >
                        </div><br>

                        <div class="form-group">
                            <label for="subject">Report subject:-</label>
                            <input  class="form-control" id="subject" required  type="text"   name="subject"   >
                        </div><br>

                        <div class="form-group">
                            <label for="country">Country:-</label>
                            <select class="form-control" name="country"  >
                                <?php
                                $arr = array("Греция","ОАЭ","Украина", "Россия");
                                foreach ($arr as &$value) {
                                    echo "<option>".$value."</option>";
                                }?>
                            </select>
                        </div><br>

                        <div class="form-group">
                            <label for="phone">Phone:-</label>
                            <input  class="form-control" type="tel" id="phone" placeholder="+(099) 999 99 99)" name="phone"   >
                        </div><br>

                        <div class="form-group">
                            <label for="email">Email:-</label>
                            <input  class="form-control" id="email" required  type="email"   name="mail"   >
                        </div><br>

                        <div class="box-footer">
                            <button type="button" id="next_1" class="btn btn-danger">Next</button>
                        </div>
                    </div>

                    <div class="step_2">

                        <div class="form-group">
                            <label for="company"> Company :-</label>
                            <input type="text" class="form-control" id="company" name="company" >
                        </div><br>

                        <div class="form-group">
                            <label for="position">Position :-</label>
                            <input type="text" class="form-control" id="position" name="position" >
                        </div><br>

                        <div class="form-group">
                            <label for="about">About me :-</label>
                            <textarea  class="form-control" name="about" id="about" ></textarea>
                        </div><br>

                        <div class="form-group">
                            <label for="photo">Photo :-</label>
                            <input  class="form-control" type="file" id="photo" name="photo"><br>
                        </div><br>

                        <div class="box-footer">
                            <button type="button" id="previous_2" class="btn btn-primary">Previous</button>
                            <button type="button" id="next_2" class="btn btn-warning">Next</button>
                        </div>
                    </div>

                    <div class="step_3">

                        <div  class="ya-share2"  data-curtain data-size="l" data-shape="round" data-lang="en" data-services="vkontakte,facebook,odnoklassniki,twitter"></div>
                        <div class="link" >
                            <a href="#" class="btn btn-primary stretched-link">All members</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>

</div>
</body>
</html>

<script src="js/jquery.js"></script>
<script src="js/jquerymaskedinput.js"></script>
<script type="text/javascript">
    $(document).on('click','#next_1',function(){
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
    $(document).on('click','#next_2',function(){
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


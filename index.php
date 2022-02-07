<html>

<head>
    <title>  registration form </title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquerymaskedinput.js"></script>
    <script type="text/javascript" src="jsmodule.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

</head>
<h2>To participate in the conference, please fill out the form</h2>
<form id="myForm" action="post.php" method="post" >

    First name: <input required  type="text" class="first_name" name="first_name"><br>
    Last name: <input required type="text" class="last_name" name="last_name"><br>
    Birthdate: <input required value="2000-01-01" type="date"  class="birthday" name="birthday"><br>
    Report subject: <input required type="text" id="subject" class="subject"><br>
    Country: <select class="country" name="country"  >
        <?php
        $arr = array("Греция","ОАЭ", 3, 4);
        foreach ($arr as $value) {
            echo "<option>".$value."</option>";
        }?>
    </select>
    <input type="button"  value="Next" id="btn" ><br>
    Email: <input required type="email" class="email"   name="email"><br>
    Phone: <input required type="tel" class="phone" id="phone"  placeholder="+(099) 999 99 99)" name="phone"><br>


</form>
<div id="result"></div>

<script>
    $(document).ready(function (){
        $("#phone").mask("+(099) 999 99 99");
    });

</script>


</html>

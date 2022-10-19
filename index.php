<html>
    <head>
        <title>TEST FORM</title>
    </head>
    <body bgcolor="	#000000">
        <font color="#00ff00"><h1  align="center" style="margin-top:200px;">TEST FORM</h1></font>
        <font color="#00ff00"><h6  align="center">form con metodo [post]</h6></font>
        <form  align="center" action="index.php" method="POST">

            <font color="#00ff00" ><label color="#00ff00" for="user">USERNAME</label><br></font>
            <input type="text" id="user" name="user" value=""><br>

            <font color="#00ff00" ><label color="#00ff00" for="pwd">PASSWORD</lbel><br></font>
            <input type="password" id="pwd" name="pwd" value=""><br><br>

            <input type="submit"  value="login">
        </form>
    </body>
</html>

<?php

$usr = $_POST['user'];
$pwd = $_POST['pwd'];

if(isset($usr) && isset($pwd) )
{
    if($usr == 'stefano' && $pwd == '2004')
    {
        header("Location:https://www.itcserasmo.it/");
        
    }
    if( $usr != '' && $pwd != '') 
    {
        echo "<h4>Password o Username errate</h4>";
    }

}
?>

<style>
body{
    background-color:#000000;
}
h2{
    color:#00ff00;
    margin-left:40%;
    margin-top:15%;
}
a{
    margin-left:47%;
}
h3{
    color:#00ff00;
    margin-top:20%;
    margin-left:40%;
}
h4{
    color:#00ff00;
    margin-top:0;
    margin-left:43%;
}
</style>

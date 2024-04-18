<?php
    include("setting.inc")
?>
<meta charset="utf8">
<?php

    $id1="chair";
    $psw1="123";

    $id2="reviewer";
    $psw2="234";

    $id3="author";
    $psw3="345";

    $charater=$_GET["charater"];
    $accont=$_GET["accont"];
    $psw=$_GET["psw"];
    
    $date=strtotime("+7 days",time());

    if($id1==$accont && $psw1==$psw && $charater=="Chair" ) {
        $_SESSION["check"]="chair";
        setcookie("userName",$accont,$date);
        header("Location:chair.php");

    }elseif($id2==$accont && $psw2==$psw && $charater=="Reviewer"){
        $_SESSION["check"]="reviewer";
        setcookie("userName",$accont,$date);
        header("Location:reviewer.php");

    }elseif ($id3==$accont && $psw3==$psw && $charater=="Author"){
        $_SESSION["check"]="author";
        setcookie("userName",$accont,$date);
        header("Location:author.php");
    }
    else{header("Location:fail.php");
    }



?>
<?php
    include("footer.inc")
?>
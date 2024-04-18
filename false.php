<?php
ob_start();
?>
<meta charset="utf8">

<?php

header("Refresh:3,url=index.php");
echo "非法進入<br>3秒後回登入頁面";
ob_end_flush();
?>
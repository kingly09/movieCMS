<?php
$seach="http://mp34.butterfly.mopaasapp.com/live.php";
$rurl=file_get_contents($seach);
$rurl= str_replace("document.write('<a target=\"_blank\" href=\"https://weibo.com/1797430134/I61QPgQ1Q\"><img src=\"https://gitee.com/atool/mp34/raw/master/2019090822213072.gif\" width=\"100%\"></a>');",'', "$rurl");
$rurl= str_replace("https://js.users.51.la/18968191.js",'', "$rurl");
$rurl= str_replace("<a href=\'https://h5.weidian.com/show/201711355982_12.html\' target=\'_blank\'>网络直播</a>",'网络直播', "$rurl");
echo $rurl;
?>
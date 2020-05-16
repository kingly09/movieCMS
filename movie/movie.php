<?php 
include('system/inc.php');
if(!file_exists('./install/install.lock')){
header('location:/install/');
}
$page=$_GET['page'];
$seach='https://movie.youku.com';
$rurl = fileget($seach,5);
$szz1='#class="swiper-slide"><div></div><a data-scm="(.*?)" data-spm="(.*?)" data-name="a_pos" href="(.*?)" target="_blank" title="(.*?)">#';
$szz2='#class="focusswiper_focus_item" style="position:relative;background-image:url\((.*?)\);background-color:(.*?)">#';
$szz3='#<span class="focusswiper_common_title focusswiper_focus_subtitle">(.*?)</span>#';
preg_match_all($szz1,$rurl,$sarr1);
preg_match_all($szz2,$rurl,$sarr2);
preg_match_all($szz3,$rurl,$sarr3);
$one=$sarr1[4];//链接
$two=$sarr2[1];//图片
$three=$sarr3[1];//简介
include('template/'.$mkcms_bdyun.'/movie.php');?>
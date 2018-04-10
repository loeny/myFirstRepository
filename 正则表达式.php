<?php
$subject='钱运来PHP博客网址：http://blog.snsgou.com/，你yun-lai了吗？';
 
echo preg_replace('/.+(http\:[\w\-\/\.]+\/)[^\w\-\!]+([\w\-\!]+).+/', '$1', $subject);
echo preg_replace('/.+(http\:[\w\-\/\.]+\/)[^\w\-\!]+([\w\-\!]+).+/', '\1', $subject);
echo preg_replace('/.+(http\:[\w\-\/\.]+\/)[^\w\-\!]+([\w\-\!]+).+/', '\\1', $subject); // 通常用这个
echo '<br />';
// 上面三个都是输出 【http://blog.snsgou.com/】
 
echo preg_replace('/^(.+)网址：(http\:[\w\-\/\.]+\/)[^\w\-\!]+([\w\-\!]+).+$/', '栏目：$1<br>网址：$2<br>商标：$3', $subject);
/*
栏目：钱运来PHP博客
网址：http://blog.snsgou.com/
商标：yun-lai
*/
echo '<br />';
 
// 括号中括号，外面括号先计数
echo preg_replace('/^((.+)网址：(http\:[\w\-\/\.]+\/)[^\w\-\!]+([\w\-\!]+).+)$/', '原文：$1<br>栏目：$2<br>网址：$3<br>商标：$4', $subject);
/*
原文：钱运来PHP博客网址：http://blog.snsgou.com/，你yun-lai了吗？
栏目：钱运来PHP博客
网址：http://blog.snsgou.com/
商标：yun-lai
*/
?>

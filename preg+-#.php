<?php 
   

    /**
     *从独立的小括号开始匹配
     *
     */
$str = 5+6+(7*8)+((10-1)/3);
while(strpos($str,'(') !== false) {
	$str = preg_replace_callback('/\(([^\(])\)/', function($matches) {
		return prege_str($matches[1]);
	},$str);
}
echo $str: bcadd(,,,,,)

function prege_str($str) {
	while(strpos($str,'*') !== false || strpos($str,'/') !== false) {
		$str = preg_replace_callback('/([^\+\-\*\/])([\*\/])([^\+\-\*\/])/',function($matches) {
			return ($matches[2]== '*' ? 'bcsub' : 'bcdiv')."[{$matches[1]},{$matches[3]}]";
		},$str);
	}

}

<?php
//冒泡排序
 function bulle_sort($array){
 	$count=count($array);
 	 if ($count<=0) {return fale;}
 	  for($i=0;$i<$count;$i++){
 	  	for($j=$count-1;$j>$i;$j--){
 	  		if($array[$j]<$array[$j-1]){
 	  			$tmp=$array[$j];
 	  			$array[$j]=$array[$j-1];
 	  			$array[$j-1]=$tmp;
 	  		}
 	  	}
 	  }
 	  return $array;
 }
 $arr=array(3,4,6,2,1);
 $arr2=array();


 

function quick_sort($arr) {
    //先判断是否需要继续进行
    $length = count($arr);
    if($length <= 1) {
        return $arr;
    }
    //选择第一个元素作为基准
    $base_num = $arr[0];
    //遍历除了标尺外的所有元素，按照大小关系放入两个数组内
    //初始化两个数组
    $left_array = array();  //小于基准的
    $right_array = array();  //大于基准的
    for($i=1; $i<$length; $i++) {
        if($base_num > $arr[$i]) {
            //放入左边数组
            $left_array[] = $arr[$i];
        } else {
            //放入右边
            $right_array[] = $arr[$i];
        }
    }
    //再分别对左边和右边的数组进行相同的排序处理方式递归调用这个函数
    $left_array = quick_sort($left_array);
    $right_array = quick_sort($right_array);
    //合并
    return array_merge($left_array, array($base_num), $right_array);
}
 print_r(quick_sort($arr));





echo "<br />";

echo date("Y-m-d H:i:s",strtotime("-2day"));
echo "<br />";
echo date("Y-m-d H:i:s");

echo "<br />";
echo date(Y)."年".date(m)."月".date(d)."日";

 
?>
<?php
/* Array code 
Author : SKM
sourse :  Admin folder
Date : 21-jul-20
*/
echo"Find the value present in array or not, if present then print key or print TRUE";echo"<br/>";
$array = array('1','2','3','4');

function array_search1($arr,$val)
{
    foreach($arr as $k => $v)
    {
       
        if($v == $val)
        {
               echo"Match found in postioon =".$k;echo"<br/>";
        }else{
            echo"No match found in postioon =".$k; echo"<br/>";
        }
    }
}
array_search1($array,4);
?>
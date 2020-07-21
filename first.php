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

<?php
echo"<br/><br/>";echo "Find how many times values of array repeating";echo"<br/>";
$array = array('0','2','1','2','0','3');
$counter = count($array);

$element_array = array();

for($i=0; $i<$counter; $i++)
{
    echo $key = $array[$i];
   

    if($element_array[$key]>=1)
    {
        $element_array[$key]++;
    }else{
        $element_array[$key]=1;
    }
}
echo"<pre>";print_r($element_array);
?>
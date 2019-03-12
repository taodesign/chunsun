<?php

$queryCaseAll = mysqli_query($con, "select * from cases");
$sum=mysqli_num_rows($queryCaseAll);

if($sum % $perCount==0){
    $total=(int)($sum/$perCount);
}else{
    $total=(int)($sum/$perCount)+1;
}

echo "<div class='pager'> 分页：";
for ($i=1;$i<=$total;$i++) {
    if ($i==$p) {
        echo "$i ";
    }else{
        echo "<a href='caselist.php?page=$i'>$i</a> ";
    }
}
echo "</div>";

?>
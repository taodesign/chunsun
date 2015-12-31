<?php


$sum=mysql_num_rows($queryCaseAll);

if($sum % $perCount==0){
    $total=(int)($sum/$perCount);
}else{
    $total=(int)($sum/$perCount)+1;
}

echo "<div class='pager'>页码：";
if($p>1){
    $prev=$p-1;
    echo "<a href='?page=$prev' class='prevp'>上一页</a>";
}

if ($p>=1 && $p <= $total) {
    echo "$p/$total";
}

if($p<$total){
    $next=$p+1;
    echo "<a href='?page=$next' class='nextp'>下一页</a>";
}
echo "</div>";

?>
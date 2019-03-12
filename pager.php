<?php


$sum=$countAll;

if($sum % $perCount==0){
    $total=(int)($sum/$perCount);
}else{
    $total=(int)($sum/$perCount)+1;
}

echo "<div class='pager'>";
if($p>1){
    $prev=$p-1;
    if(isset($_GET['tag'])){
        echo "<a href='?tag=$selectTag&page=$prev' class='prevp'>上一页</a>";
    }else{
        echo "<a href='?page=$prev' class='prevp'>上一页</a>";
    }
}

if ($p>=1 && $p <= $total) {
    echo "$p/$total";
}

if($p<$total){
    $next=$p+1;
    if(isset($_GET['tag'])){
        echo "<a href='?tag=$selectTag&page=$next' class='nextp'>下一页</a>";
    }else{
        echo "<a href='?page=$next' class='nextp'>下一页</a>";
    }
}
echo "</div>";

?>
<?php
    include 'header.php';
    require 'config.php';

    //mysql_select_db('anybodypost',$con);
    //$queryStr = $_SERVER['QUERY_STRING']; // url?(p=1&cat=2)

    $perCount=5; //item per page
    if(isset($_GET['page'])){
        $p=(int)$_GET['page'];
    }else{
        $p=1;
    }
    $startCount = ($p-1)*$perCount;

    if(isset($_GET['tag'])){
        $getTag = $_GET['tag'];
        $queryCase = mysqli_query($con, "select * from posts WHERE tag='$getTag' order by createTime DESC limit $startCount, $perCount");
        //count for pager
        $queryCount = mysqli_query($con, "select count(*) from posts WHERE tag='$getTag'");
        $countAllrow = mysqli_fetch_row($queryCount);
        $countAll = $countAllrow[0];
    }else{
        $queryCase = mysqli_query($con, "select * from posts order by createTime DESC limit $startCount, $perCount");
        //count for pager
        $queryCount = mysqli_query($con, "select count(*) from posts");
        $countAllrow = mysqli_fetch_row($queryCount);
        $countAll = $countAllrow[0];
    }


    //echo $countAll;

    if ($countAll){
        while($row=mysqli_fetch_array($queryCase)){
            //query for label Chinese name
            $theTag = "${row["tag"]}";
            $queryTag = mysqli_query($con, "select * from tags WHERE tag='$theTag'");
            $row2=mysqli_fetch_array($queryTag);

            //echo json_encode($row2);

            echo "<main><section id='tag-ad'><div class='item'>";
            echo "<h2><a href='post.php?id=${row["id"]}'>${row["ptitle"]}</a></h2>";
            echo "<p>${row["article"]}</p>";
            echo "<div class='postlink'><a href='post.php?id=${row["id"]}'>发布于 ${row["createTime"]}</a> / <a href='index.php?tag=$theTag'>${row2["tag_local"]}</a></div>";
            echo "</div></section></main>";
        }
    }else{
        echo '<p class="msg">没有案例录入。</p>';
    }

include 'pager.php';

mysqli_free_result($queryCase);
mysqli_close($con);

require 'footer.php';

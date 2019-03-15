<?php
    require_once 'config.php';
    include 'header-post.php';

    $caseId =  $_GET['id'];
    $queryCase = mysqli_query($con, "SELECT * FROM posts WHERE id='$caseId'");
    while($row=mysqli_fetch_array($queryCase)){
        //query for tag local name
        $theTag = "${row["tag"]}";
        $queryTag = mysqli_query($con, "SELECT * FROM tags WHERE tag='$theTag'");
        $row2=mysqli_fetch_array($queryTag);

        //main
        echo "<main><div class='item'><h1>${row["ptitle"]}</h1>";
        echo "<div class='desc'>${row["article"]}</div>";
        echo "<ul class='ainfo'><li>更新于：${row["updateTime"]}</li><li>创建于：${row["createTime"]}</li></ul></div></main>";
    }

    mysqli_free_result($queryCase);
    mysqli_close($con);

    include 'footer.php';

?>
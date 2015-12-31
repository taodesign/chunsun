<?php
    require_once 'config.php';
    include 'header-case.php';

    //mysql_select_db('thepaper_caseshow',$con);

    //get case ID
    $caseId =  $_GET['case'];

    $queryCase = mysql_query("select * from cases WHERE id='$caseId'");
    while($row=mysql_fetch_array($queryCase)){
        //$imglist = explode(",","${row["imgsrc"]}");
        //$imgtitlelist = explode(",","${row["imgtitle"]}");

        //query for label Chinese name
        $category = "${row["label"]}";
        $queryCategory = mysql_query("select * from category WHERE label='$category'");
        $row2=mysql_fetch_array($queryCategory);

        //nav
        echo "<nav class='case'><a href='index.php?cat=$category'>&laquo; ${row2["category"]}</a></nav>";
        //main
        echo "<main><div class='item'>";
        echo "<dl><dt>${row["pname"]}</dt>";
        echo "<dd><img src='${row["cover"]}' alt='' /><dd>";
        //echo "<dd>项目简述：${row["pinfo"]}<dd>";
        echo "<dd class='goto'>点击访问：<a href='${row["purl"]}'>在线地址</a><dd>";
        //echo "<dd id='pv'>总访问量：${row["pv"]}</dd>"
        echo "</dl>";
        echo "</div><div class='desc'>${row["pdesc"]}</div></div></main>";
    }


    mysql_free_result($queryCase);
    mysql_close($con);

    include 'footer.php';

?>
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

    if(isset($_GET['cat'])){
        //$rowArr = explode("=",$rowStr);
        //$category =  $rowArr[1];
        $getCategory = $_GET['cat'];
        $queryCase = mysql_query("select * from cases WHERE label='$getCategory' order by id limit $startCount,$perCount",$con);
        //query all for pager
        $queryCaseAll = mysql_query("select * from cases WHERE label='$getCategory' order by id",$con);
    }else{
        $queryCase = mysql_query("select * from cases order by id limit $startCount,$perCount",$con);
        //query all for pager
        $queryCaseAll = mysql_query("select * from cases order by id",$con);
    }

    $queryCount = mysql_query("select count(*) from cases");
    //method 1
    //list($countAll) = mysql_fetch_row($queryCount);
    //print_r($countAll);

    //method 2
    $countAllrow = mysql_fetch_row($queryCount);
    $countAll = $countAllrow[0];
    //print_r($countAll);

    if ($countAll){
        while($row=mysql_fetch_array($queryCase)){
            //query for label Chinese name
            $category = "${row["label"]}";
            $queryCategory = mysql_query("select * from category WHERE label='$category' limit $startCount,$perCount");
            $row2=mysql_fetch_array($queryCategory);

            echo "<main><section id='tag-ad'><div class='item'>";
            echo "<img src='${row["cover"]}' alt='' />";
            echo "<h1>${row["id"]} . ${row["pname"]} / <a href='index.php?cat=$category'>${row2["category"]}</a></h1>";
            echo "<p>${row["pinfo"]}</p>";
            echo "<div class='postlink'><a href='case.php?case=${row["id"]}'> &raquo; 查看详细</a></div>";
            echo "</div></section>";
            echo "</main>";
        }
    }else{
        echo '<p class="msg">没有案例录入。</p>';
    }

include 'pager.php';

mysql_free_result($queryCase);
mysql_close($con);

require 'footer.php';
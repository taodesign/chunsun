<?php

/* tags count */
$tags = mysqli_query($con, "SELECT * FROM tags");
while($row = mysqli_fetch_array($tags)){
    $tag = $row['tag'];
    $queryTag = mysqli_query($con,"SELECT count(*) FROM posts WHERE tag='$tag'");
    $countTagRow = mysqli_fetch_row($queryTag);
    $countTag = $countTagRow[0];

    $updateCatCount=mysqli_query($con, "UPDATE tags set tagcounter='$countTag' WHERE tag='$tag'");
}

exit();
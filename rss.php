<?php
header("Content-type:text/xml;charset=utf-8");
$con = mysql_connect("localhost","root","111111") or die(mysql_error());
mysql_select_db('thepaper_caseshow',$con);
$query = "select pname, purl, pdesc from `cases` limit 15";

$result = mysql_query($query, $con);
while ($line = mysql_fetch_assoc($result)){
    $return[] = $line;
}

$now = date("D, d M Y H:i:s T");

$output = "<?xml version=\"1.0\"?>
            <rss version=\"2.0\">
                <channel>
                    <title>Our Demo RSS</title>
                    <link>http://localhost/thepaper-case/rss.php</link>
                    <description>A Test RSS</description>
                    <language>zh-cn</language>
                    <pubDate>$now</pubDate>
                    <lastBuildDate>$now</lastBuildDate>
                    <docs>http://localhost/</docs>
                    <managingEditor>you@youremail.com</managingEditor>
                    <webMaster>you@youremail.com</webMaster>
            ";

foreach ($return as $line){
    $output .= "<item><title>".htmlentities($line['pname'])."</title>
                    <link>".htmlentities($line['purl'])."</link>
                    <description><![CDATA[".htmlentities(strip_tags($line['pdesc']))."]]></description>
                </item>";
}
$output .= "</channel></rss>";
echo $output;
?>
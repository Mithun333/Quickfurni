<?php
    mysql_connect();
    mysql_select_db("QuickFurni");
    echo $_GET["parent"];
    $result = mysql_query("SELECT * FROM `sub_cat` WHERE `cat_id` = " . mysql_real_escape_string($_GET["parent"]));
    while(($data = mysql_fetch_array($result)) !== false)
        echo '<option value="', $data['sub_cat_name'],'">', $data['name'],'</option>'
?>
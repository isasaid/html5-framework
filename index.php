<p>Generated HTML Page</p>
<p>click then view source then copy and paste to notepad then save as html</p>
<p>&nbsp;</p>
<?php
listDirs("output/");
function listDirs($where){
echo "<table border=\"1\"><tr><td><b>Name</b></td><td><b>Type</b></td>";
echo "<td><b>Invisible (Hidden)?</b></td></tr>";
    $itemHandler=opendir($where);
    $i=0;
    while(($item=readdir($itemHandler)) !== false){
        if(substr($item, 0, 1)!="."){
            if(is_dir($item)){
                echo "<tr><td>$item</td><td>Directory</td><td>No</td></tr>";
            }else{
                echo "<tr><td>$item</td><td><li><a href=".$where.$item." target='new'>File</a></li></td><td>No</td></tr>";
            }
            $i++;
        }else{
            if(is_dir($item)){
                echo "<tr><td>$item</td><td>Directory</td><td>Yes</td></tr>";
            }else{
                echo "<tr><td>$item</td><td>File</td><td>Yes</td></tr>";
            }
            $i++;
        }
       }
echo "</table>";
}
?>

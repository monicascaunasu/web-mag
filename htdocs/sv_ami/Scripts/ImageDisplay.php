  <table>
<?php
$dbc = new mysqli("localhost", "root", "toor", "demo");
$sql="Select * from timages";
$result=mysqli_query($dbc,$sql) or die("error");
$i=0;
while($row=mysqli_fetch_assoc($result)){
    
    if ($i%4==0) {
        echo "<tr>";
    }
    echo "<br><br>";
    echo "<td><img src='../uploads/{$row['img']}' alt='{$row['title']}' class='gallery'></td>";
    
    if ($i%4==2) {
        
        echo"</tr>";
    }
    $i++;
    
}
?>
</table>
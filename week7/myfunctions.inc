<?php

function save_monster()
{
    $db = mysqli_connect("localhost", "22133230", "mysqluser", "db3_22133230");

    // Obtain the file sent to the server within the response.
    $image = $_FILES['monsterimage']['tmp_name']; 
    $audio = $_FILES['monsteraudio']['tmp_name'];

    // Get the file binary data
    $imagedata = addslashes(fread(fopen($image, "r"), filesize($image)));
    $audiodata = addslashes(fread(fopen($audio, "r"), filesize($audio)));
    
    $sql = "INSERT INTO monster (name, image, audio) VALUES ('$_POST[txtname]', '$imagedata','$audiodata');";

    mysqli_query($db, $sql);
}

function display_Table()
{
    $conn = mysqli_connect("localhost", "22133230", "mysqluser", "db3_22133230");

    $sql = "select id,name from monster;";

    $result = mysqli_query($conn, $sql);


    echo "<table align='center' border='1'>";
    echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

    while($row = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td><a href='getwav.php?id=" . $row['id']. "'>Click to play</a></td>";
    echo "<td><img src='getjpg.php?id=" . $row['id']. "' height='100' width='100'</td>";
    echo "</tr>";
    }

    echo "</table>";

    mysqli_close();


}

?
<?php


if(isset($_POST['ASC']))
{
    $asc_query = "SELECT * FROM students ORDER BY age ASC";
    $result = executeQuery($asc_query);
}


elseif (isset ($_POST['DESC'])) 
    {
          $desc_query = "SELECT * FROM students ORDER BY age DESC";
          $result = executeQuery($desc_query);
    }
    
 else {
        $default_query = "SELECT * FROM students";
        $result = executeQuery($default_query);
}


function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "project");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

<!DOCTYPE html>
<html>
    <head>
       <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
     
        <form action="#" method="post">
         <input type="submit" name="ASC" value="Ascending"><br><br>
            <input type="submit" name="DESC" value="Descending"><br><br>
         
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Emali</th>
                </tr>
                <!-- populate table from mysql database -->
                <?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
     
    </body>
</html>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `mov` WHERE CONCAT(`mov_id`, `mov_title`, `mov_year`, `mov_lang`, `dir_id`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `account`";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "mov");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="movser.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>MOV_ID</th>
                    <th>MOV_TITLE</th>
                    <th>MOV_YEAR</th>
                    <th>MOV_LANG</th>
                     <th>DIR_ID</th>            
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['mov_id'];?></td>
                    <td><?php echo $row['mov_title'];?></td>
                    <td><?php echo $row['mov_year'];?></td>
                    <td><?php echo $row['mov_lang'];?></td>
                    <td><?php echo $row['dir_id'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        <a href="ser.php"> back</a>
    </body>
</html>

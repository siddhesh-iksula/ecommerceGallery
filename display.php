<?php
    include('dbconnection.php');
    error_reporting(0);
?>
<html>
<head>
<link rel="stylesheet" href="../ecommercegallery/main.css">
</head>
<body>
<?php

    $sql_display="SELECT * FROM patanjali";
    $data=mysqli_query($conn,$sql_display);
    $count=mysqli_num_rows($data);
?>
<?php 
        include('header.php');
?>

<table>
    <tr>
        <th>Product</th>
        <th>Image</th>
        <th>Price (in rupees)</th>
    </tr>

    <?php
        while($result1=mysqli_fetch_assoc($data)){
            echo "<tr>
                    <td >".$result1['product']."</td>
                    <td ><img src='".$result1['image']."' height='200' width='200'</td>
                    <td >".$result1['price']."</td>
                </tr>";
        }
    
    ?>
   
    </table>
<?php 
    include('footer.php');
?>
   
</body>
</html>
<?php
        include 'connection.php';
        $sql='SELECT * FROM flori';
        $query=  mysqli_query($con, $sql)or die(mysqli_error($con));
        ?>
        <table width="60%" cellpadding="10" cellspace="10">
            <tr>
                <td><strong>Nume</strong></td>
                <td><strong>Culoare</strong></td>
                <td><strong>Marime</strong></td>
                <td><strong>Pret</strong></td>
       </tr>
            <?php while($row=mysqli_fetch_array($query)){ ?>
            <tr>
            <td><?php echo "<a href=\"view.php?id=".$row['id']."\">".$row["nume"]."</a>";?></td>
            <td><?php echo $row["culoare"];?></td>
            <td><?php echo $row["marime"];?></td>
            <td><?php echo $row["pret"];?></td>
</tr>
           <?php } ?>
        </table>

<br/><br/>
<a href="insert.php">insert a record</a>
<br/><br/>
<a href="index.php">back</a>
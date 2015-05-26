<?php

include('configure.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>said vhi test</title>
    <script>

        function confirm_delete()
        {
            return confirm('Hi Admin Are You Sure')
        }

    </script>

</head>
<style>

    table {padding: 21px; margin: 0 auto;}
    table th {padding: 10px}
    table td {padding: 10px}

    h2 {
        text-align: center;
    }

</style>
<body>
        <h2>Here is you desire information</h2>
        <table border="1px sold gray">

            <th>Serial No:</th>
            <th>Name Of the Participent</th>
            <th>Email Of the Participent</th>
            <th>Age Of the Participent</th>
            <th>Mobile Of the Participent</th>
            <th>Edit</th>
            <th>Delete</th>

            <?php
            $i=0;
            $result=mysql_query("SELECT * FROM `ino`");
            while($repo= mysql_fetch_array($result))
            {

                $i++;


                ?>



            <tr>



                <td>
                       <?php echo $i; ?>
                </td>

                <td>
                     <?php echo $repo ['username'];?>
                </td>

                <td>
                    <?php echo $repo ['email'];?>
                </td>

                <td>
                    <?php echo $repo ['password'];?>
                </td>

                <td>
                    <?php echo $repo ['number'];?>
                </td>

                <td>
                    <a href="update.php?id=<?php echo $repo['id']; ?>">Edit Data</a>
                </td>

                <td>
                    <a onclick="return confirm_delete()" href="delete.php?id=<?php echo $repo['id']; ?>">Delete Data</a>
                </td>




            </tr>

            <?php
			} 
			
			
			
			?>



        </table>

  <div style="text-align: center; margin: 50px">

      <a style="text-align: center" href="Index1.php">Back to Home Page</a>

  </div>


</body>
</html>
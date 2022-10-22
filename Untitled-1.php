<form action="<?php $_SERVER['PHP_SELF'];?>" method="get">
<input type="number" name="name" id="name" >
<input type="submit" name="submit" value="submit" >
            <br><br>

        <?php
        if(isset($_GET['submit'])){
            $m=$_GET['name'];
            $sum=$m*3.7;
            echo "<h1>$sum ريال سعودي</h1>";
        }

        ?>
</form>
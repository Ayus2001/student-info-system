<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        .button-box {
            border: 1px solid #ccc;
            padding: 10px;
            display: inline-block;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<form method="post" action="pform.php">
   <!-- // <label for="dropdown">FEE PAYMENT:</label> -->
    <div class="button-box">
    <a class="nav-link" input type="submit" value="submit"  href="payment.php">FEE PAYMENT</a>

    <!-- <select name="dropdown" id="dropdown">
        <?php
            // Generate options dynamically using a loop or from a database
            $options = array("SELECT","COURSE FEE PAYMENT", "LIBRARY FEE PAYMENT", "BUS FEE PAYMENT");
            foreach ($options as $option) {
                echo "<option value='$option'>$option</option>";
            }
        ?>
    </select> -->
   
        <!-- <a class="nav-link" input type="submit" value="submit"  href="payment.php">FEE PAYMENT</a> -->


    </div>
</form>

</body>
</html>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selected_option = $_POST['dropdown'];
        echo "You selected: $selected_option";
    }
?>

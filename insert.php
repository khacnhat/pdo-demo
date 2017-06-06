<?php
    require 'functions.php';
    $message = null;
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $dob = $_POST['dob'];
        if(isset($name) && isset($address) && isset($dob)){
            $db = createDBConnection();
            $query = "INSERT INTO customers(name, address, dob) VALUES('$name', '$address', '$dob')";
            $row_count = $db->exec($query);
            if($row_count  > 0){
                $message = 'Customer was inserted!';
            }
        }
    }
?>

<html>
    <head></head>
    <body>
    <a href="index.php">View list of customers</a>
        <?php if(isset($message)): ?>
            <h3><?=$message?></h3>
        <?php endif;?>
        <form method="post">
            <fieldset>
                <legend>Insert new customer</legend>
                Name: <input type="text" name="name"/><br/>
                Address: <input type="text" name="address"/><br/>
                DOB: <input type="date" name="dob"/><br/>
                <input type="submit" value="Add"/>
            </fieldset>
        </form>
    </body>
</html>
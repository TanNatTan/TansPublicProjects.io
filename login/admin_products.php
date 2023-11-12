<?php
$con = new PDO("mysql:host=localhost;dbname=login_sample_db",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `products` WHERE Name = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if ($row = $sth->fetch()) {
        ?>
        <script>
            var name = "<?php echo $row->Name; ?>";
            var price = "<?php echo $row->Price; ?>";
    
            var alertMessage = "Name: " + name + "\nPrice: " + price;
            alert(alertMessage);
        </script>
        <?php
	}
		else{
			echo "Name Does not exist";
		}
}
?>

<!DOCTYPE html>
<html>
    <head>
	    <title>Search Bar using PHP</title>
    </head>
    <body>  
        <form method="post">
            <label>Search</label>
            <input type="text" name="search">
            <input type="submit" name="submit">
        </form>
    </body>
</html>
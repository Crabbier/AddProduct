<?php
	require_once('database.php');
	$res = $database->read();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>4Revolution | Read</title>
	<link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/Logo4R.png" type="image/x-icon" />	
</head>
<body id="view">
    <header>
        <img src="images/LogoWhite.png" height="50" alt="4Revolution Logo">
        <nav>
            <ul>
                <li><a href="index.php" title="Promotion details">Add products</a></li>
                <li><a href="veiw.php" title="Learn more about us">See products</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <table class="table">
                    <tr>
                        <th>#</th>
                        <th>Watch Name</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Description</th>
                        <th>Registration Date</th>
                    </tr>
                    <?php

                        while($r = mysqli_fetch_assoc($res)){
                    ?>
                            <tr>
                                <td><?php echo $r['id']; ?></td>
                                <td><?php echo $r['name'], " ", $r['color']; ?></td>
                                <td><?php echo $r['category'] ?></td>
                                <td><?php echo $r['brand'] ?></td>
                                <td><?php echo $r['description'] ?></td>
                                <td><?php echo $r['date'] ?></td>
                            </tr>
                        <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </main>
    <footer>
        <p>Copyright © 2023 4Revolution store – 4Revolution Store.</p>
    </footer>
</body>
</html>

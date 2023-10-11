<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4Revolution | Add Our Data</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/Logo4R.png" type="image/x-icon" />
  </head>
  <body id="add">
    <header>
        <img src="images/LogoWhite.png" height="50" alt="4Revolution Logo">
        <nav>
            <ul>
                <li><a href="index.php" title="Promotion details">Add products</a></li>
                <li><a href="view.php" title="Learn more about us">See products</a></li>
            </ul>
        </nav>
    </header>
    <main>
    <?php
      // start by including our classes
      require_once('validate.php');
      require_once('database.php');

      // create our class objects
      $valid = new validate();

      if($_SERVER["REQUEST_METHOD"] == "POST"){
        // using our escape_string function
        $date = $_POST['date'];
        $name = $_POST['name'];
        $color = $_POST['color'];
        $category = $_POST['category'];
        $brand = $_POST['brand'];
        $description = $_POST['description'];
        // using our functions found in our validate class 
        // (checkEmpty validAge validEmail)
        $msg = $valid->checkEmpty($_POST, array('date', 'name', 'color', 'category', 'brand', 'description'));
        $checkDate = $valid->validDate($_POST['date']);
        $checkColor = $valid->validColor($_POST['color']);
        $checkCategory = $valid->validCategory($_POST['category']);
        // now handle any empty fields
        if($msg != null){
          echo $msg;
          //link to the previous page
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkDate){
          echo '<p>The date must not be changed.</p>';
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkColor){
          echo '<p>Please choose a valid color.</p>';
          echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }elseif(!$checkCategory){
            echo '<p>Please choose a valid category.</p>';
            echo "<a href='javascript:self.history.back();'>Go Back</a>";
        }else{
          // if all the fields are valid
          $res = $database->create($date, $name, $color, $category, $brand, $description);
          // let the user know that the record has been added
          if($res){
            echo "<p>Data added successfully.</p>";
            echo "<a href='view.php'>VIEW TABLE</a>";
          }else{
            echo "<p>Failed to insert data</p>";
          }
        }
      }

    ?>
    </main>
    <footer>
        <p>Copyright © 2023 4Revolution store – 4Revolution Store.</p>
    </footer>
  </body>
</html>

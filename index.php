<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4Revolution | Form</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" href="images/Logo4R.png" type="image/x-icon" />
</head>
<body>
    <header>
        <img src="images/LogoWhite.png" height="50" alt="4Revolution Logo">
        <nav>
            <ul>
                <li><a href="index.php" title="Promotion details">Add products</a></li>
                <li><a href="view.php" title="Learn more about us">See products</a></li>
            </ul>
        </nav>
    </header>
        <section class="mainHead">
            <div>
                <h1>Products Form</h1>
            </div>
        </section>
    <main>
        <section class="form-register">
            <form method="post" action="add.php" class="myForm">
                <h2>ADD NEW PRODUCT </h2>
                    <div class="form-group">
                        <label for="input1" class="col-sm-2 control-label">REGISTER DATE</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" class="form-control" id="input1" value="<?php echo date('Y-m-d'); ?>" >
                        </div>
                    </div>
					 <div class="form-group">
						 <label for="input2" class="col-sm-2 control-label">WATCH NAME</label>
						 <div class="col-sm-10">
							 <input type="text" name="name" class="form-control" id="input2" placeholder="Wrtite watch name">
						 </div>
					 </div>
                     <div class="form-group">
                        <label for="input3" class="col-sm-2 control-label">COLOR</label>
                        <div class="col-sm-10">
                        <select name="color" class="form-control">
                                <option>Product Color</option>
                                <option value="Silver">Silver</option>
                                <option value="Gold">Gold</option>
                                <option value="Black">Black</option>
                                <option value="White">White</option>
                                <option value="Copper">Copper</option>
                                <option value="Blue">Blue</option>
                                <option value="Red">Red</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group">
                        <label for="input4" class="col-sm-2 control-label">CATEGORY</label>
                        <div class="col-sm-10">
                            <select name="category" class="form-control">
                                <option>Product Category</option>
                                <option value="Quartz Watch">Quartz Watch</option>
                                <option value="Mechanic Watch">Mechanic Watch</option>
                                <option value="Automatic Watch">Automatic Watch</option>
                                <option value="Necklace">Necklace</option>
                                <option value="Bracelet">Bracelet</option>
                                <option value="Ring">Ring</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input5" class="col-sm-2 control-label">BRAND</label>
                        <div class="col-sm-10">
                            <input type="text" name="brand" class="form-control" id="input5" placeholder="Onola, Pagani, Lige, etc.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input6" class="col-sm-2 control-label">PRODUCT DESCRIPTION</label>
                        <div class="col-sm-10">
                            <textarea name="description" id="description" cols="50" rows="5" placeholder="Write the product description"></textarea>
                        </div>
                    </div>
					<div class="form-group">
						 <input type="submit" name="Submit "class="addButton" value="Add">
                         <input type="reset" class="resetButton" value="Clear">
					</div>
            </form>
            <div class="form-group submit-message">
            </div>
        </section>
    </main>
    <footer>
        <p>Copyright © 2023 4Revolution store – 4Revolution Store.</p>
    </footer>
</body>
</html>
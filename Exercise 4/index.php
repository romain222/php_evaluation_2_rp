<?php

// include Cat class because we want to use it in this file
include 'Cat.php';

session_start();

// create example Cat
$cat = new Cat('Kitty', 3, 'Grey', 'Female', 'American Shorthair');
$catInfo = $cat->getInfo();
if(empty($_SESSION)){
    array_push($_SESSION, $catInfo);
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    // create Cat using form
    $newCat = new Cat($_POST['firstName'], $_POST['age'], $_POST['color'], $_POST['sex'], $_POST['race']);
    $newCatInfo = $newCat->getInfo();
    
    array_push($_SESSION, $newCatInfo);
}

// HTML that displays information in a table and a form to create a new cat
?>

<!DOCTYPE html>
<html>
    <head>
    	<title>Exercice 4</title>
    	<meta charset="utf-8">
    </head>
    <body>
    	<h1>Cat Information Display</h1>
    	
    	<table border>
    		<thead>
    			<tr>
        			<?php foreach ($catInfo as $key => $value) :?>
        			
    				<td><?php echo $key; ?></td>
        			<?php endforeach;?>
        		</tr>
    		</thead>
    		<tbody>
    			<?php 
    			foreach ($_SESSION as $currentCat) :?>
    			<tr>
    			 <?php foreach ($currentCat as $key => $value) :?>
					<td><?php echo $value; ?></td>
    			<?php endforeach;?>
    			</tr>
    			<?php endforeach;?>
    		</tbody>
    	</table>
    	
    	<hr>
    	
    	<form method="POST">
    		<input name="firstName" type="text" placeholder="firstName" />
    		<br>
    		<input name="age" type="number" placeholder="1" />
    		<br>
    		<input name="color" type="text" placeholder="color" />
    		<br>
    		<input name="sex" type="text" placeholder="Male/Female" />
    		<br>
    		<input name="race" type="text" placeholder="Race" />
    		<br>
    		<input type="submit" />
    	</form>
    </body>
</html>
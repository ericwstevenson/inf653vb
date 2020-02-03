<?php
    if(isset($_GET['firstName'])){
		$firstName = htmlentities($_GET['firstName']);
	}
	if(isset($_GET['lastName'])){
		$lastName = htmlentities($_GET['lastName']);
	}
	if(isset($_GET['age'])){
		$age = htmlentities($_GET['age']);
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My Website</title>
    </head>
<body>
    <form action="get_stevenson.php" method="get">
        <div>
            <label>First Name</label><br>
            <input type="text" name="firstName"> 
        </div>
        <div>
            <label>Last Name</label><br>
            <input type="text" name="lastName">
        </div>
        <div>
            <label>Age</label><br>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Submit">
    </form>
    <h2>
	    <?php echo "Hello, My name is {$firstName} {$lastName}. I am {$age} years old and I am "; 
	          if($age < 18){
				  echo 'not ';
			  } 
              echo 'old enough to vote in the United States.';
		?>
	</h2>
</body>
</html>
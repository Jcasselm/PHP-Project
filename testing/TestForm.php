
<?php
	
	include('databaseTest.php');
	
	$fullName = "";
	$username = "";
	$password = "";
	

	
	if(isset($_POST['submit'])){
		$fullName= $_POST['fullName'];
		$username= $_POST['username'];
		$password= $_POST['password'];
	}
	else {
		$fullName = "";
		$username = "";
		$password = "";
	}
	
	
	//kind of works
	/*
	if(isset($_POST['submit'])){
	try{

		$results=$db->prepare("INSERT INTO persons(fullName, Username, Userpassword)
							VALUES(?, ?, ?)");
		$results->bindParam(1, $fullName);
		$results->bindParam(2, $username);
		$results->bindParam(3, $password);
		$results->execute();
		
		
		
		
	}catch(Exception $e){
		
	}
	}
	*/
	
	
	
	
	
	
	
	
	//this works below
	/*
	try{
		$result=$db->query("INSERT INTO persons (fullName, Username, Userpassword)
							VALUES('bob jones', 'abc123', 'root')");
		
	}catch(Exception $e){
		
	}
	*/

	
	//This works below
	/*
	try{
		
		$results=$db->prepare("select username, userpassword
								from persons
								where username = ? and userpassword = ?"
								);
								
		$results->bindParam(1, $username);
		$results->bindParam(2, $password);
		$results->execute();
		$product=$results->fetchColumn(0);
		var_dump($product);
		
		
	}catch(Exception $e){
		
	}
	*/
	
	//This works below
	/*
	try{
		
		$result=$db->query("SELECT *
							FROM Persons");
		$product=$result->fetchAll(PDO::FETCH_ASSOC);	
	
		var_dump($product);		
	}catch(Exception $e){
		echo "no sir";
	}
	*/
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	  
	  <form name='form1' method='POST' action='testForm.php'>
    <div class="row">
		<div class="col-sm-4">
			<label class="col-sm-12">
				Full Name
			</label>
			<div class="col-sm-12">
				<input type='text' class='form-control' value="<?php echo $fullName ?>" name='fullName'>
			</div>	
		</div>
		<div class="col-sm-4">
			<label class="col-sm-12">
				Input
			</label>
			<div class="col-sm-12">
				<input type='text' class='form-control' value="<?php echo $username ?>" name='username'>
			</div>	
		</div>
		<div class="col-sm-4">
			<label class="col-sm-12">
				Password
			</label>
			<div class="col-sm-12">
				<input type='text' class='form-control' value="<?php echo $password ?>" name='password'>
			</div>	
		</div>	
	</div>	
	<button type="submit" name="submit" class="btn btn-default">Submit</button>


<div class="row">
	<div class="col-sm-4">

		<h1><?php echo $fullName ?></h1>
	</div>
	<div class="col-sm-4">

		<h1><?php echo $username ?></h1>
	</div>
	<div class="col-sm-4">	

		<h1><?php echo $password ?></h1>
	</div>	
</div>

</form>

	
	

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
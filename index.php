


<!--<?php include "connect.php"; 
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="container-fluid bg-primary text-white justify-content-center d-flex">
	<p>Create, Read, Update, Delete</p>
</div>
</br>
<div class="container">
	<form method="POST" action="" accept-charset="utf-8" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<div class="col-sm-10">
			<input class="form-control" type="text" name="fname" placeholder="Fisrt name" value="<?php echo $fname ?>" required/></br>
		</div>
		<div  class="col-sm-10">
			<input class="form-control" type="text" name="mname" placeholder="Middle name" value="<?php echo $mname ?>" required/></br>
		</div>
		<div  class="col-sm-10">
			<input class="form-control" type="text" name="lname" placeholder="Last name" value="<?php echo $lname ?>" required/></br>
		</div>
		<div  class="col-sm-10">
			<input class="form-control" type="number" name="age" min="10" max="100" placeholder="Age"value="<?php echo $age ?>" required></br>
		</div>
		<div  class="col-sm-10">
			<input  type="radio" name="gender" value="Male" value="<?php echo $gender ?>" required/>Male
		</div>
		<div  class="col-sm-10">
			<input  type="radio" name="gender" value="Female" value="<?php echo $gender ?>" required/>Female
		</div>
		<div  class="col-sm-10">
			<input  type="radio" name="gender" value="Others" value="<?php echo $gender ?>" required/>Others</br>
		</div></br>
		<div  class="col-sm-10">
			<input class="form-control" type="text" name="motto" placeholder="Motto" value="<?php echo $motto ?>" required/></br>
		</div>
		<div  class="col-sm-10">
			<?php if($update == false): ?>
			<input class="btn btn-info" type="submit" value="Insert" name="Insert" value="<?php echo $fname ?>" /><br/>
			<?php else: ?>
			<input class="btn btn-success" type="submit" value="Update" name="Update" value="<?php echo $fname ?>" /><br/>
			<?php endif; ?>
		</div>
		<?php
	if(isset($_POST["Insert"])){
		mysqli_query($conn, "INSERT INTO members VALUES(NULL, '$_POST[fname]', '$_POST[mname]', '$_POST[lname]', '$_POST[age]', '$_POST[gender]', '$_POST[motto]')");
		header('Refresh: 1; URL = index.php');
	}
	?>
	</form>
</div>
<table class="table">
    <thead>
  		<tr>
  			<th>ID</th>
  			<th>Name</th>
  			<th>Age</th>
  			<th>Gender</th>
  			<th>Motto</th>
  			<th></th>
  			<th></th>
  		</tr>
  	</thead>
  	<tbody>
<?php
$sql = "SELECT * FROM members";
$result = $conn->query($sql);
  while($row = $result->fetch_assoc()) { ?>
    	<tr>
	    		<td><?php echo $row['id']?></td>
	    		<td><?php echo $row['fname']?>  <?php echo $row['mname']?>  <?php echo $row['lname']?></td>
	    		<td><?php echo $row['age']?></td>
	    		<td><?php echo $row['gender']?></td>
	    		<td><?php echo $row['motto']?></td>
				<td><a class="btn btn-primary" href="index.php?edit=<?php echo $row['id']?>">Update</a></td>
				<td><a class="btn btn-danger" href="index.php?delete=<?php echo $row['id']?>">Delete</a></td>
    	</tr>
    <?php }  ?>
    </tbody>
</table>
<?php
if(isset($_GET["delete"])){
	$id = $_GET["delete"];
	mysqli_query($conn, "DELETE FROM members WHERE id=$id");
	header('Refresh: 1; URL = index.php');
}
?>-->


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<div class="container-fluid bg-primary text-white justify-content-center d-flex">
	<p>Create, Read, Update, Delete</p>
</div>
</br>
<div class="container">
	<form method="POST" action="" accept-charset="utf-8" class="form-horizontal">
		<input type="hidden" name="id" value="<?php echo $id ?>">
		<div class="col-sm-10">
			<input class="form-control" type="text" name="fname" placeholder="Fisrt name" value="<?php echo $fname ?>" required/></br>
		</div>
		<div  class="col-sm-10">
			<input class="form-control" type="text" name="mname" placeholder="Middle name" value="<?php echo $mname ?>" required/></br>
		</div>
		<div  class="col-sm-10">
			<input class="form-control" type="text" name="lname" placeholder="Last name" value="<?php echo $lname ?>" required/></br>
		</div>
		<div  class="col-sm-10">
			<input class="form-control" type="number" name="age" min="10" max="100" placeholder="Age"value="<?php echo $age ?>" required></br>
		</div>
		<div  class="col-sm-10">
			<input  type="radio" name="gender" value="Male" value="<?php echo $gender ?>" required/>Male
		</div>
		<div  class="col-sm-10">
			<input  type="radio" name="gender" value="Female" value="<?php echo $gender ?>" required/>Female
		</div>
		<div  class="col-sm-10">
			<input  type="radio" name="gender" value="Others" value="<?php echo $gender ?>" required/>Others</br>
		</div></br>
		<div  class="col-sm-10">
			<input class="form-control" type="text" name="motto" placeholder="Motto" value="" required/></br>
		</div>
		<div  class="col-sm-10">
			<input class="btn btn-info" type="submit" value="Insert" name="Insert" value="" /><br/>
		</div>
	
	</form>
</div>
<table class="table">
    <thead>
  		<tr>
  			<th>ID</th>
  			<th>Name</th>
  			<th>Age</th>
  			<th>Gender</th>
  			<th>Motto</th>
  			<th></th>
  			<th></th>
  		</tr>
  	</thead>

</table>



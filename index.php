<!DOCTYPE html>
<html>
	<head>
		<style>
		input[type='text'],[type='password'] 
		{ 	display:block;
			margin:20px auto;
			padding:10px; 
			border-color:#ccc;
			boder-radius:5px;
		}
			
		input[type='reset'],[type='submit'] 
		{ 
			width:130px;
			margin:20px 20px 0px 20px ;
			padding:10px; border-color:#ccc;
			boder-radius:5px;background-color: #cfcfcf
		}
		
		div {
			width:30%;
			margin:30px auto;
			padding:auto;
			}
		</style>
	</head>
<body>
	<div>
		<form action="authenticate.php" method="post">
			<fieldset>

			<legend>Enter Login Details- Try username=admin & password=admin</legend>
				<input type="text" name="u" placeholder="Username" pattern="[a-z]{1,20}"/>
				<input type="password" name="p" placeholder="Password"/>
				<input type="submit" value="Login">
				<input type="reset" value="reset">
			</fieldset>

		</form>
	</div>
</body>


</html>
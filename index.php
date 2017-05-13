<html>
	<head>
		<style>
body {
    background-color: lightblue;
}

input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
	</head>
<body>

Welcome  <?php echo $_POST["name"]; ?> <br>
	<hr>
	<p>Please fill the details below</p>
	<form action="info.php" method="post" enctype="multipart/form-data">
		<label for="fullname">Full Name</label>
        <input type="text" name="fullname" placeholder="Full name..">
         <br />
        <br />
		<label for="mail">Email ID</label>
        <input type="email" name="mail" placeholder="Mail Id..">
        <br />
		<br />
		<label for="quali">Qualification</label>
        <input type="text" name="quali" placeholder="Qualification..">
        <br />
		<br />
		<label for="hobby">Hobby</label>
        <input type="text" name="hobby" placeholder="Hobby..">
        <br />
		<br />
		<label for="phno">Phone No</label>
        <input type="number" name="phno" placeholder="Phone No..">
        <br />
		<br />
		 Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="save" name="submit">
        </form>
	

</body>
</html>
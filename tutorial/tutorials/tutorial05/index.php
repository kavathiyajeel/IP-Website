<html>
<head>
	<title>Tutorial 5</title>
	<link  href="css/bootstrap.min.css" rel="stylesheet" >
	<link href="css/style.css" rel="stylesheet" >
	<script src="bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form action="result.php" method="post">
            <div class="mt-5">
                <h3>Select Month</h3>
            </div>

            <div class="form-group">  
                    <select  name="Month" class="form-control mt-5">
                        <option value="January"> 1 </option>
                        <option value="February"> 2 </option>
                        <option value="March"> 3 </option>
                        <option value="April"> 4 </option>
                        <option value="May"> 5 </option>
                        <option value="June"> 6 </option>
                        <option value="July"> 7 </option>
                        <option value="August"> 8 </option>
                        <option value="September"> 9 </option>
                        <option value="October"> 10 </option>
                        <option value="November"> 11 </option>
                        <option value="December"> 12 </option>
                    </select>
            </div>


            <input type="submit" value="submit" class="btn btn-primary mt-5">
        </form>
    </div>

</body>
</html>
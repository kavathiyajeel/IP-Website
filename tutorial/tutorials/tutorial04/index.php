<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest</title>
    <link  href="css/bootstrap.min.css" rel="stylesheet">
    <link  href="css/style.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <form action="result.php">
            <div class="mt-5">
                <h3>Simple Interest</h3>
            </div>

            <div class="form-group mt-5">
                <label for="principle">Principle</label>
                <input type="number" name="principle" id="principle" class="form-control">
            </div>
            <div class="form-group mt-5">
                <label for="rate">Rate of Interest</label>
                <input type="number" name="rate" id="rate" class="form-control">
            </div>
            <div class="form-group mt-5">
                <label for="year">Number of Years</label>
                <input type="number" name="year" id="year" class="form-control">
            </div>
            <input type="submit" value="Calculate" class="btn btn-primary">
            <input type="reset" value="Reset" class="btn btn-primary">
        </form>
    </div>

</body>
</html>
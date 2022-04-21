<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP_Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php
include 'functions.php';

?>

<body>
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <h1 class="navbar-brand" href="#">PHP Simple Calculator</h1>
    </div>
  </div>


  <div class="container mt-4 card text-white bg-dark col-4">
    <div class="card-body">
      <form action="" method="get">
        <input class="form-control mb-3" type="text" name="num1" placeholder="Number 1">
        <select name="oper" class="form-select mb-3 btn-warning">
          <label>Choose Operation!</label>
          <option value="add">Add</option>
          <option value="subtract">Subtract</option>
          <option value="multiply">Multiply</option>
          <option value="division">Division</option>
        </select>
        <input class="form-control mb-3"type="text" name="num2" placeholder="Number 2">
        <button class="btn btn-info mb-3" type="submit">Calculate</button>
        <input class="form-control mb-3" readonly="readonly" placeholder= "Total" name="result" value="<?php echo myCalculator($num1, $oper, $num2); ?>"></input>
      </form>

    </div>
  </div>

</body>

</html>
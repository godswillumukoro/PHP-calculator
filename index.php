<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <title>Calculator</title>
</head>
<body>
  <h1>Calculator World</h1>
  <form action="index.php" method="GET">
    <input type="text" placeholder="operand 1" name="one">
      <select name="operator">
          <option selected>None</option>
          <option>Add</option>
          <option>Subtract</option>
          <option>Multiply</option>
          <option>Divide</option>
      </select>
    <input type="text" placeholder="operand 2" name="two">
    <button name="equals">=</button>
  <div>
      <?php
      if(isset($_GET['equals'])){
            $operandOne = $_GET['one'];
            $operandTwo = $_GET['two'];
            switch ($_GET['operator']){
                case 'None':
                    echo 'Select and operator';
                break;
                case 'Add':
                     echo $operandOne + $operandTwo;
                break;
                case 'Subtract':
                      echo $operandOne - $operandTwo;
                break;
                case 'Multiply':
                      echo $operandOne * $operandTwo;
                break;
                case 'Divide':
                     echo $operandOne / $operandTwo;
                break;
                default:
                    echo 'Nothing was supplied';
                break;
            }
        }else {
            echo '0';
        }
      ?>
  </div>
  </form>
</body>
</html>
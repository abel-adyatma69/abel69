<?php
// Calculator logic
if (isset($_POST['submit'])) {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  $operator = $_POST['operator'];

  switch ($operator) {
    case '+':
      $result = $num1 + $num2;
      break;
    case '-':
      $result = $num1 - $num2;
      break;
    case '*':
      $result = $num1 * $num2;
      break;
    case '/':
      if ($num2 != 0) {
        $result = $num1 / $num2;
      } else {
        $result = 'Error: Division by zero!';
      }
      break;
    default:
      $result = 'Error: Invalid operator!';
  }
}
?>

<!-- HTML and CSS -->
<!DOCTYPE html>
<html>
<head>
  <title>Kalkulator</title>
  <style>
    body {
      font-family: Garamond, sans-serif;
      background-color: #6495ED;
    }
    .calculator {
      width: 400px;
      margin: 40px auto;
      padding: 50px;
      background-color: #fff;
      border: 10px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .calculator input[type="number"] {
      width: 100%;
      height: 30px;
      margin-bottom: 10px;
      padding: 10px;
      font-size: 18px;
      border: 1px solid #ccc;
    }
    .calculator select {
      width: 100%;
      height: 30px;
      margin-bottom: 10px;
      padding: 10px;
      font-size: 18px;
      border: 1px solid #ccc;
    }
    .calculator button[type="submit"] {
      width: 100%;
      height: 30px;
      margin-bottom: 10px;
      padding: 10px;
      font-size: 18px;
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .calculator button[type="submit"]:hover {
      background-color: #CCCCFF1;
    }
    .result {
      font-size: 24px;
      font-weight: bold;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="calculator">
    <form method="post">
      <input type="number" name="num1" placeholder="Number 1" required>
      <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
      </select>
      <input type="number" name="num2" placeholder="Number 2" required>
      <button type="submit" name="submit">Calculate</button>
    </form>
    <?php if (isset($result)) { ?>
      <div class="result"><?= $result ?></div>
    <?php } ?>
  </div>
</body>
</html>
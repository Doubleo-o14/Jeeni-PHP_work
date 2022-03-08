<body>

<form>
<input type="text" name= "num1" placeholder="number 1">
<input type="text" name= "num2" placeholder="number 2">
<select name="operator">
    <option value="Add">Add</option>
    <option value="Subtract">Subtract</option>
    <option value="Multiply">Multiply</option>
    <option value="Divide">Divide</option>
</select>
<br>
<button type="submit" name="submit" value="submit">Calculate</button> 
</form>
<p>The answer is:</p>
<?php
  if (isset($_GET['submit'])) {
    $results1 = $_GET['num1'];
    $results2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
      case Add:
        echo $results1 + $results2;
        break;
      case Subtract:
        echo $results1 - $results2;
        break;
      case Divide:
        echo $results1 / $results2;
        break;
      case Multiply:
        echo $results1 * $results2;
        break;

    }
  }

?>


</body>

<body>

<form>
<input type="text" name= "num1" placeholder="number 1">
<input type="text" name= "num2" placeholder="number 2">
<select name="operator" id="calc.php">
    <option value="">Add</option>
    <option value="">Subtract</option>
    <option value="">Multiply</option>
    <option value="">Divide</option>
</select>
<br>
<button type="submit" name="submit">Calculate</button> 
</form>

<?php
  if (isset($_GET['submit'])) {
    $results1 = $_GET['num1'];
    $results2 = $_GET['num2'];
    $operator = $_GET['operator'];
    
        

    }

?>


</body>

<body>
  <p> this is in html </p>
  <form action="tutorial.php" method="GET">
    <input type="text" name="person">
    <button>Enter</button>
  </form>
  
  <?php
    $name = $_GET['person'];
    echo $name. " is happy so, hello world.";
  ?>

</body>

<body>
  <p> this is in html </p>
  <form action="GET">
    <input type="text" name="person">
    <button>Enter</button>
  </form>
  
  <?php
    $name = $_GET['person'];
    echo $name. ' i\'m happy so, hello world.';
  ?>
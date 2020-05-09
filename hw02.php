<?php

  $color = "";

  if(isset($_GET['submit']))
  {
    if($_GET['color'] != "" && $_GET['dColor'] != "null")
    {
      echo "Please only select one value";
    }
    elseif($_GET['color'] != "")
    {
      $color = $_GET['color'];
    }
    elseif($_GET['dColor'] != "null")
    {
      $color = $_GET['dColor'];
    }

  }
 ?>
<html>
  <head>
    <title>Thing</title>
  </head>
  <body>
    <h3 align="center">Color Picker</h3>
    <form method="GET" align="center">
      Select OR enter a color:
      <input type="text" name="color" value="<?php echo $color; ?>">

      <select id="colors" name="dColor">
        <option value="null">Select a color</option>
        <option value="Red">Red</option>
        <option value="Green">Green</option>
        <option value="Blue">Blue</option>
      </select>
      <br><br>
      <input type="submit" name="submit">
      <hr>

      <table style="height: 200px; width: 200px; background-color: <?php echo $color; ?>;">
        <tr>
          <td></td>
        </tr>
      </table>

    </form>
  </body>
</html>

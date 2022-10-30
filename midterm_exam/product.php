<?php
include 'db_connect.php';

          $sql = 'select * from categories';
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search product by category</title>
</head>
<body>
  <header>
    <form action="product.php" method="get">
      <label for="category">
        <select name="category" id="category">
          <!-- add options hear ex.
          <option value="1">Beverages</option>
          -->
          


    <?php while($row = $result->fetch_assoc()) {?>
    <option value="<?php echo $row["CategoryID"];?>">
      <?php echo $row["CategoryName"]; ?>
      </option>
    <?php } ?>
        </select>
      </label>
      <input type="submit" value="Search" name="submit">
    </form>
  </header>
</body>
</html>
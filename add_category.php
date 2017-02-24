<?php

$category_name = filter_input(INPUT_POST, 'categoryName');

if($category_name == null) {
  $error = "Please enter a valid category name";
  echo $error;
  } else {
    require_once('database.php');
    
    $query = 'INSERT INTO categories_guitar1 (categoryName) VALUES (:categoryName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryName', $category_name);
    $statement->execute();
    $statement->closeCursor();
    
    include('category_list.php');
    }

?>

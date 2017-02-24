<?php

require_once('database.php');

$category_name = filter_input(INPUT_POST, 'categoryName');

if($category_name != false){
    $query = 'DELETE FROM categories_guitar1 WHERE categoryName = :categoryName';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryName', $category_name);
    $statement->execute();
    $statement->closeCursor();
   }

   include('category_list.php');
?>

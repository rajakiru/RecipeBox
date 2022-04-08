<?php
function get_cuisines() {
    global $db;
    $query = 'SELECT * FROM cuisines
              ORDER BY cuisineID';
    $statement = $db->prepare($query);
    $statement->execute();
    $cuisines = $statement->fetchAll();
    $statement->closeCursor();
    return $cuisines;
}

function get_cuisine_name($cuisine_id) {
    global $db;
    $query = 'SELECT * FROM cuisines
              WHERE cuisineID = :cuisine_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':cuisine_id', $cuisine_id);
    $statement->execute();
    $cuisine = $statement->fetch();
    $statement->closeCursor();
    $cuisine_name = $cuisine['cuisineName'];
    return $cuisine_name;
}
?>

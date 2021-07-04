<?

try {
    $db = new PDO("mysql:host=localhost;dbname=flamingoyu_admin", "flamingoyu_admin", "Qwerty123#");
} catch (PDOException $e) {
    print $e->getMessage(); die();
}

?>
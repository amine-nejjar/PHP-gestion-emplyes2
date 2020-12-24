$db = new PDO('mysql:host=localhost;dbname=base', user,pass);
$select_clients = $db->prepare('SELECT numero, nom FROM clients');
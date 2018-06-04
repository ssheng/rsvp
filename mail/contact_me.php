<?php
require __DIR__ . './../vendor/autoload.php';
use Rsvp\DataModel\Datastore;

// Fails the call by default
http_response_code(500);

// Check for empty fields
// if(empty($_POST['id']) ||
//    empty($_POST['wedding']) ||
//    empty($_POST['party']) ||
//    empty($_POST['sail']) ||
//    empty($_POST['misc']))
// {
//   echo "No arguments Provided!";
//   return false;
// }

$id = $_POST['id'];
$wedding = $_POST['wedding'];
$party = (int)$_POST['party'];
$sail = $_POST['sail'];
$misc = strip_tags(htmlspecialchars($_POST['misc']));

// $id = 'mZDMEMxx';
// $wedding = true;
// $party = 3;
// $sail = true;
// $misc = 'Hello World!';

$datastore = new Datastore('wedding-rsvp-201609');
$rsvp = $datastore->read($id);
$rsvp['name'] = $id;
$rsvp['wedding'] = $wedding;
$rsvp['party'] = $party;
$rsvp['sail'] = $sail;
$rsvp['misc'] = $misc;

$result = $datastore->update($rsvp);
if ($result == 1) {
  http_response_code(200);  
}

return $result;
?>
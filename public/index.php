<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exceptions</title>
</head>
<body>
<?php

use App\Exceptions\BadJsonException;
use App\Exceptions\FileNotFoundException;
use App\Utility\JsonFileReader;

require_once 'autoload.php';

$jsonFilereader = new JsonFileReader();

$filename = './../files/inventory.json';

try {

    //.....

    $inventory = $jsonFilereader->readFileAsAssociativeArray($filename);
    print_r($inventory);

    // ....

} catch(FileNotFoundException | BadJsonException $exception) {

    print_r('The file ' . $filename . ' could not be processed. Please check the filepath and content.');

} catch (Exception $exception) {

    print_r($exception->getMessage() . ' in file ' . $exception->getFile() . ' on line ' . $exception->getLine());

} finally {

    print_r(PHP_EOL . 'Some final processing');
}


?>
</body>
</html>





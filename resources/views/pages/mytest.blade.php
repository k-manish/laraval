<?php

ini_set('display_errors', 1);
echo phpversion();
$fm = new FileMaker('demodb', '172.16.8.1', 'admin', 'mindfire');
$findAllCommand = $fm->newFindAllCommand('user_add_self');
$result = $findAllCommand->execute();
if (FileMaker::isError($result)) {
    echo $result->getMessage();
}
echo '<pre>';
print_r($result->getRecords());
<?php
$title = 'Item overview';

require 'Controller/ItemController.php';
$itemController = new ItemController();

if(isset($_POST['codes']))
{
    //Show result of the specific code if selected
    $itemTables = $itemController->CreateItemTables($_POST['codes']);
}
else
{
    //Shows All tables by default
    $itemTables = $itemController->CreateItemTables('%');
}

//Content displayed in the page. Show the drop down + the If statement
$content = $itemController->CreateItemDropdownList() . $itemTables;

include 'template.php';


?>
<?php
require("Entities/ItemEntity.php");


class ItemModel
{

    function getItemCodes()
    {

        require 'Credentials.php';


        $con = mysqli_connect($host, $user, $passwd) or die(mysqli_error($con));//connection to the database
        mysqli_select_db($con,$database);
        $result = mysqli_query($con,"SELECT DISTINCT code FROM item") or die(mysqli_error($con));
        $codes = array();


        while($row = mysqli_fetch_array($result))
        {
            array_push($codes, $row[0]);
        }

        mysqli_close($con);//end connection
        return $codes;//and return the result
    }


    function GetItemByCode($code)
    {

        require 'Credentials.php';

        $con = mysqli_connect($host, $user, $passwd) or die(mysqli_error($con));
        mysqli_select_db($con, $database);

        $query = "SELECT * FROM item WHERE code LIKE 'code'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $itemArray = array();

        while($row = mysqli_fetch_array($result))
        {
            //row 0 is ID
            $name = $row[1];
            $code = $row[2];
            $image = $row[3];
            $quantity = $row[4];

            $item = new ItemEntity(-1,$name,$code,$image,$quantity);
            array_push($itemArray, $item);
        }

        mysqli_close($con);
        return $itemArray;


    }

}

<?php
require 'Model/ItemModel.php';

class ItemController
{
//Create the drop down list
    function CreateItemDropdownList()
    {
        $itemModel = new ItemModel();
        $result = "<form action = '' method = 'post'>
                        please select a code:
                        <select name = 'codes' >
                        <option value = '%' >All</option>
                        ".$this->CreateOptionValues($itemModel->GetItemCodes()).
            "</select>
                        <input type = 'submit' value ='Search'/>
                        </form>";

        return $result;
    }

    function CreateOptionValues(array $valueArray)
    {
        $result = "";

        foreach($valueArray as $value)
        {
            $result = $result."<option value = '$value'>$value</option>";
        }

        return $result;
    }

    function CreateItemTables($codes)
    {
        $itemModel = new ItemModel();
        $itemArray = $itemModel->GetItemByCode($codes);
        $result="";



        //Make a separate table for each item
        foreach($itemArray as $key => $item)
        {

            $result = $result . "<table class= 'itemTable'><tr>
                            <th rowspan='6' width = '150px' ><img src = '$item->image' /></th>
                            <th width = '75px' >Name: </th>
                            <td>$item->name</td>
                        </tr>
                    <tr>
                     <th>Code:</th>
                     <td>$item->code</td>
                    </tr>
                    
                    <tr>
                     <th>Quantity:</th>
                     <td>$item->quantity</td>
                    </tr>
                    </table>";
        }
        return $result;//return the tables after they are created.
    }
}
?>
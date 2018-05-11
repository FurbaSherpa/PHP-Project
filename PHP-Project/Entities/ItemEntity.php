<?php
/**
 * Created by PhpStorm.
 * User: SherpaShark
 * Date: 12/19/2017
 * Time: 2:12 PM
 */

class ItemEntity
{

    public $id;
    public $name;
    public $code;
    public $image;
    public $quantity;

    public function __construct($id, $name, $code, $image, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->image = $image;
        $this->quantity = $quantity;
    }


}
<?php
class MethodTest
{
    public function __call($name, $arguments)
    {
        // Note: value of $name is case sensitive.
        echo "Calling object method '$name' "
             . implode(', ', $arguments). "\n";
    }

    /**  As of PHP 5.3.0  */
    public static function __callStatic($name, $arguments)
    {
        $arguments = $arguments[0];
        switch ($name) {
            case 'price':
                return "$".$arguments['price'];
                break;
            case 'quantity':
                return $arguments['quantity'];
                break;
            case 'total':
                return $arguments['quantity'] * $arguments['price'];
                break;
            
            default:
                # code...
                break;
        }
    }
}

$obj = new MethodTest;


//echo MethodTest::price(array("price"=>200));

echo MethodTest::total(array("price"=>200,'quantity'=>2));

?>
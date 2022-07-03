<?php
class Product  {
    private $description ;
    private $price ;
    private $inventory ;
    private $onsale ;

    public function __set($name, $value)
    {  
        if ($name == 'price' || $name == 'inventory'|| $name == 'onsale') {
            if ($name == "price" && $value < 0 )
            {
                echo "Invalid price set <br>\n Price is now 0." ;
                $this->price = 0 ;
            } 
            elseif ($name == 'inventory' && $value < 0)
            {
                echo "Invalid inventory set <br>\n" ;
            } 
            elseif ($name == 'onsale' && !is_bool($value)) {
                return false ;
            }
            else
            {
                $this->$name = $value ;
            }
        } 
        else 
        {
            return false ;
        }
    }
    public function __get($name) 
    {
        return $this->$name ;
    }
    public function buyProduct($amount)
    {
        if ($this->inventory >= $amount) 
        {
            $this->inventory -= $amount ;
        } 
        else 
        {
            echo "Sorry the number requested: $amount <br> exceeds the number available ($this->inventory)." ;
        }
    }
}

$prod = new Product() ;
$auto = new Product();
$auto->price = 25000 ;
$auto->inventory = 5 ;

$prod->price = -3 ; # wat gebeurt er hier?
$prod->inventory = 10 ;
$prod->buyProduct(15) ;
$prod->waarheid = true ;
$prod->onsale = true ;
echo $prod->description ;
var_dump($prod) ;
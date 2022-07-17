<?php
class Fruit {
  // Properties
  public $name;
  public $color;
  public $price;

  // Methods
  function __construct($name, $color, $price) {
    $this->name = $name;
    $this->color = $color;
    $this->price = $price;
  }
  function get_name() {
    return $this->name;
  }
  function get_price() {
   return $this->price;
  }
  function get_color() {
   return $this->color;
  }
}

/****** en nu een PDO om met de DB te connecten **********************/
class connect2db {
  public $dbname;
  public $inlogname;
  public $pw;

  public function __construct($dbname, $inlogname, $pw) {
    $this->dbname = $dbname;
    $this->inlogname = $inlogname;
    $this->pw = $pw;
   
   function tellme() {
      echo "Connection gemaakt met database " . $dbname . " voor gebruiker " . $inlogname . ".";
    }

  }
}
/******* WAAAROMMM GEEFT DIT FOUTEN???? ****/
$dbconnection = new connect2db("paarden", "Ankie", "bles90214" );
$dbconnection->tellme();


/*********** volgende gaat over de eerste pdo met de fruitmand ******/
$apple = new Fruit('Appel', 'geel&#047;rood', 0.75);
$banana = new Fruit('Banaan', 'groen&#047;geel', 0.81);

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
$s_apprice = 0.00;
$s_apprice = $apple->get_price();
echo "<br>Een " . $apple->get_name() . " kost " . $s_apprice;

echo '<br><br><br>
      <table style="border: solid 2px #222222; text-align: center;">
        <tr>
          <td><strong>Product</strong></td><td>&nbsp;</td><td><strong>Kleur</strong></td><td>&nbsp;</td><td><strong>€</strong></td>
        </tr>
        <tr>
          <td>' . $apple->get_name() . '</td><td>&nbsp;</td>
          <td>' . $apple->get_color() . '</td><td>&nbsp;</td>
          <td>' . $s_apprice . '</td><td>&nbsp;</td>
        </tr>
        <tr>
          <td>' . $banana->get_name() . '</td><td>&nbsp;</td>
          <td>' . $banana->get_color() . '</td><td>&nbsp;</td>
          <td>' . $banana->get_price() . '</td><td>&nbsp;</td>
        </tr>

        </table>';
?>

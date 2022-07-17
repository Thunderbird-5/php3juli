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

$apple = new Fruit('Appel', 'geel/rood', 0.75);
$banana = new Fruit('Banaan', 'groen/geel', 0.81);

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
$s_apprice = 0.00;
$s_apprice = $apple->get_price();
echo "<br>Een " . $apple->get_name() . " kost " . $s_apprice;

echo '<br><br><br>
      <table style="border: solid 2px #222222;">
        <tr>
          <td><strong>Product</strong></td><td>&nbsp;</td><td><strong>Kleur</strong></td><td>&nbsp;</td><td><strong>€</strong></td>
        </tr>
        <tr>
          <td>' . $apple->get_name() . '</td><td>&nbsp;</td>
          <td>' . $apple->get_color() . '</td><td>&nbsp;</td>
          <td>' . $apple->get_price() . '</td><td>&nbsp;</td>
        </tr>
        <tr>
          <td>' . $banana->get_name() . '</td><td>&nbsp;</td>
          <td>' . $banana->get_color() . '</td><td>&nbsp;</td>
          <td>' . $banana->get_price() . '</td><td>&nbsp;</td>
        </tr>

        </table>';
?>

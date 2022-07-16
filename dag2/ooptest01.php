<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }


   $physics = new Books;
   $maths = new Books;
   $chemistry = new Books;

   $physics->setTitle( "Physics for High School" );
   $chemistry->setTitle( "Advanced Chemistry" );
   $maths->setTitle( "Algebra" );
   
   $physics->setPrice( 10 );
   $chemistry->setPrice( 15 );
   $maths->setPrice( 7 );
/*
   $physics->getTitle();
   $chemistry->getTitle();
   $maths->getTitle();
   $physics->getPrice();
   $chemistry->getPrice();
   $maths->getPrice();
*/
/************** DIT werkt NIET *****************************

echo '<table style="width: 30%;">
        <tr>
          <td>Category</td><td>Title</td><td>&nbsp;&#0128;</td>
        </tr>
        <tr>
          <td>Physics</td><td>' . $physics->getTitle() . '</td><td>' . $physics->getPrice() . '</td>
        </tr>
      </table>';

***********************************************************/

/* En het volgende zet ook niet de waarden in de tabel... WAAROM niet????? ****/

$ptitle = $physics->getTitle();
$pprice = $physics->getPrice();



print '<table style="width: 30%;">
        <tr>
          <td>Category</td><td>Title</td><td>&nbsp;&#0128;</td>
        </tr>
        <tr>
          <td>Physics</td><td>' . $ptitle . '</td><td>' . $pprice . '</td>
        </tr>
      </table>';
?>

<?php
// let op! onderstaande moet ik straks lezen uit mijn Init object!
$i_laagste = 1 ;
$i_hoogste = 10 ;
// form template html in een variabele laden
// mag ook URL zijn. BV: https://restcountries.com/v2/all
$html_form_string = file_get_contents(APPLICATIE."/templates/"."form.template.html") ;
// zoeken en vervangen (maakt het hele formulier aan)
$html_form_content = '' ; // lege string, zou ook null mogen zijn
for($teller = $i_laagste ; $teller <= $i_hoogste ; $teller++){
    $html_form_content .= '<input type="submit" value="'.$teller.'" name="getal">' ;
}
$html_form_string = str_replace("{{FORM_CONTENT}}",$html_form_content,$html_form_string);
// Nu moet het formulier in de hele pagina komen
$html_page_string = file_get_contents(APPLICATIE."/templates/"."page.template.html") ;
$html_page_string = str_replace("{{FORMULIER}}",$html_form_string, $html_page_string);
// $html_page_string kan nu voor output gebruikt worden
echo $html_page_string ;
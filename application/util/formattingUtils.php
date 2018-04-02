<?php
// expect 2 dim array and retunr as a formatted table
function buildHTMLTable($dataSet){

 $tblHTML = "<table  class='cleanTbl'>";

 foreach ($dataSet as $row) {

   $tblHTML = $tblHTML."<tr class='cleanTbl'>";

   foreach($row as $col){

     $tblHTML = $tblHTML."<td class='cleanTbl'>$col</td>";

   }
   $tblHTML = $tblHTML."</tr>";

 }
 $tblHTML = $tblHTML."</table>";

 return $tblHTML;
}

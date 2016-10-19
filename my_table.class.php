<?php
class MyTable{
	function display($myarray, $head = False){
		if ($head == True){
      $len = count($myarray[0]);
      $akeys = array_keys($myarray);
      echo '<tr><thead>';
      foreach($akeys as $head){
        echo '<th>'.$head.'</th>';
      }
      echo '</thead></tr>';
      $cur = "0";
      foreach($myarray as $element){
        $tmparray = array();
        foreach($myarray as $innerarray){
          array_push($tmparray, $innerarray[$cur]);
        }
        echo '<tr>';
        foreach($tmparray as $key){
          echo '<td>'.$key.'</td>';
        }
        echo '</tr>';
        $cur+="1";
      }
    }
    else{
      foreach($myarray as $element){
        echo '<tr>';
        foreach($element as $key){
          echo '<td>'.$key.'</td>';
        }
        echo '</tr>';
      }
    }
	}
}
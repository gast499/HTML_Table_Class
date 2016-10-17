<?php
class MyTable{
	function display($myarray, $head = False){
		foreach( $myarray as $element ){
			echo '<tr>';
      if($head==True){
        echo '<thead>';
        foreach( $element as $key){
          echo '<th>'.$key.'</th>';
        }
        $head = False;
        echo '</thead>';
        echo '</tr>';
        continue;
      }
			foreach( $element as $key ){
				echo '<td>'.$key.'</td>';
			}
			echo '</tr>';
		}
	}
}
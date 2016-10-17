<?php
class MyTable{
	function display($myarray){
		foreach( $myarray as $element ){
			echo '<tr>';
			foreach( $element as $key ){
				echo '<td>'.$key.'</td>';
			}
			echo '</tr>';
		}
	}
}
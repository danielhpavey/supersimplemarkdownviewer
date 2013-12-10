<?php

namespace mymd\views;

class MyFooter{

	public function showFooter(){
		
		$r = array();

		$r[] = '<footer>';
		$r[] = '</footer>';
		$r[] = '</body>';
		$r[] = '</html>';

		$return = '';
		foreach ( $r as $rr){
			$return .= $rr . "\n";
			}

		echo $return;

	}







}

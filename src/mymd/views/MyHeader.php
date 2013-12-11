<?php

namespace mymd\views;

class MyHeader{

	public function header(){

			$r = array();
			$r[] = '<!DOCTYPE html>';
			$r[] = '<html lang="en">';
			$r[] = '<head>';
			$r[] = '<meta charset="utf-8">';
			$r[] = '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
			$r[] = '<title>';
			$r[] = (isset($this->title) ? $this->title : 'Untitled');
			$r[] = '</title>';
			$r[] = '<meta name="description" content="">';
			$r[] = '<meta name="keywords" content="" />';
			$r[] = '<meta name="author" content="">';
			$r[] = '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
			$r[] = '<link rel="icon" href="favicon.ico" type="image/x-icon" />';
			$r[] = '<link rel="stylesheet" href="css/styles.css">';
			$r[] = "<link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>";
			$r[] = '<!--[if lt IE 9]>';
			$r[] = '<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>';
			$r[] = '<![endif]-->';
			$r[] = '</head>';
			$r[] = '<body>';
			$r[] = '<header>';
			$r[] = '<h1>';
			$r[] = (isset($this->title) ? $this->title : 'Untitled');
			$r[] = '</h1>';
			$r[] = '</header>';

			$return = '';
				foreach ( $r as $rr){
					$return .= $rr . "\n";
				}

			echo $return;

		}
}

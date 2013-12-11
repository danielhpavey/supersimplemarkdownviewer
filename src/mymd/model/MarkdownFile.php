<?php

namespace mymd\model;

class MarkdownFile{


	function getFileContents(){

		$f = file_get_contents( __DIR__ . '/../../../source.md' );
		return $f;


	}








}

<?php

class Article {

	public $id;
	public $publication_date;
	public $title;
	public $summary;
	public $content;

	public function __construct(array $attributes){
		$this->id = $attributes['id'];
		$this->publication_date = $attributes['publication_date'];
		$this->title = $attributes['title'];
		$this->summary = $attributes['summary'];
		$this->content = $attributes['content'];
	}

}
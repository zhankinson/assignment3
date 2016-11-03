<?php
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $name;
		private $alias;
		private $age;
		private $album;
		private $song;

		public function __construct($name, $alias, $age, $album, $song) {
			$this->name = $name;
			$this->alias = $alias;
			$this->age = $age;
			$this->album = $album;
			$this->song = $song;
		}

		public function getAlbum() {
			return $this->album;
		}

		public function setAlbum($newAlbum) {
			$this->album = $newAlbum;
		}

		public function getSong() {
			retrn $this->song;
		}

		public function setSong($newSong) {
			$this->song = $newSong;
		}

		public function __toString() {
			$artinfo = $this->getName() . " is a musician known as " . $this->getAlias() . " and is " . $this->getAge() . "years old. <br>";
			$musinfo = $this->getAlias() . " wrote a song called " . $this->getSong() . " which is on his/her album " . $this->getAlbum() . ". <br>";
		}
	}

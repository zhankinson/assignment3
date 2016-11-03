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

		public function getName() {
			return $this->name;
		}

		public function setName($newName) {
			$this->name = $newName;
		}

		public function getAlias() {
			return $this->alias;
		}

		public function setAlias($newAlias) {
			$this->alias = $newAlias;
		}

		public function getAge() {
			return $this->age;
		}

		public function setAge($newAge) {
			$this->age = $newAge;
		}

		public function getAlbum() {
			return $this->album;
		}

		public function setAlbum($newAlbum) {
			$this->album = $newAlbum;
		}

		public function getSong() {
			return $this->song;
		}

		public function setSong($newSong) {
			$this->song = $newSong;
		}

		public function __toString() {
			$artinfo = $this->getName() . " is a musician known as " . $this->getAlias() . " and is " . $this->getAge() . "years old. <br>";
			$musinfo = $this->getAlias() . " wrote a song called " . $this->getSong() . " which is on the album " . $this->getAlbum() . ". <br>";
			return $artinfo . $musinfo;
		}
	}

<!-- Zachary Hankinson
zah15@pitt.edu -->

<?php

	class ChildClass extends ParentClass {
		private $alias;
		private $album;
		private $song;

		public function __construct($name, $style, $age, $alias, $album, $song) {
			parent::__construct($name, $style, $age);
			$this->alias = $alias;
			$this->album = $album;
			$this->song = $song;
		}

		public function getAlias() {
			return $this->alias;
		}

		public function getAlbum() {
			return $this->album;
		}

		public function getSong() {
			return $this->song;
		}

		public function __toString() {
			$artinfo = parent::getName() . " is also a musician known as " . $this->getAlias() . "who likes to " . parent::getStyle() . " and is " . parent::getAge() . " years old. <br>";
			$musinfo = $this->getAlias() . " wrote a song called " . $this->getSong() . " which is on the album " . $this->getAlbum() . ". <br>";
			return $artinfo . $musinfo;
		}
	}

<?php
	// This is the file for the parent class

	class ParentClass {
		private $name;
		private $style;
		private $alias;

		public function __construct($name, $style, $alias) {
			$this->name = $name;
			$this->style = $style;
			$this->alias = $alias;
		}

		public function getName(){
			return $this->name;
		}

		public function getStyle(){
			return $this->style;
		}

		public function getAlias(){
			return $this->alias;
		}

		public function __toString() {
			$artinfo = $this->getName() . " is an artist known as " . $this->getAlias() . " who likes to " . $this->getStyle() . "<br>";
			return $artinfo;
		}
	}

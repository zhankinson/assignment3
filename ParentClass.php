<?php

	class ParentClass {
		private $name;
		private $style;
		private $age;

		public function __construct($name, $style, $age) {
			$this->name = $name;
			$this->style = $style;
			$this->age = $age;
		}

		public function getName() {
			return $this->name;
		}

		public function getStyle() {
			return $this->style;
		}

		public function getAge() {
			return $this->age;
		}

		public function __toString() {
			$artinfo = $this->getName() . " is an artist who likes to " . $this->getStyle() . "and is " . $this.getAge() . " years old.<br>";
			return $artinfo;
		}
	}

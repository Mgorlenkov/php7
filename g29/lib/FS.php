<?php ## Пример определения итератора
	/**
	* Коталог. При итерации возвращает свое седержимое.
	*/
	class FSDirectory implements IteratorAggregate
	{
		public $path;
		public function __construct($path)
		{
			$this->path = $path;
		}
		public function getIterator()
		{
			return new FSDirectoryIterator($this);
		}
	}

	/**
	* Класс-итератор. Является представителем для объектов FSDirectory
	* при переборе содержимого каталога.
	*/
	class FSDirectoryIterator implements Iterator
	{
		private $owner;
		private $d = null;
		private $cur = false;
		function __construct($owner)
		{
			$this->owner = $owner;
			$this->d = opendir($owner->path);
			$this->rewind();
		}

		public function rewind()
		{
			rewinddir($this->d);
			$this->cur = readdir($this->d);
		}
		public function valid()
		{
			return $this->cur !== false;
		}
		public function key()
		{
			return $this->cur;
		}
		public function current()
		{
			$path = $this->owner->path."/".$this->cur;
			return is_dir($path) ? new FSDirectory($path) : new FSFile($path);
		}
		public function next()
		{
			$this->cur = readdir($this->d);
		}
	}

	class FSFile
	{
		public $path;
		public function __construct($path)
		{
			$this->path = $path;
		}
		public function getSize()
		{
			return filesize($this->path);
		}
	}
?>

<?php ## Наследование исключений
class FilesystemException extends Exception 
{
	private $name;
	public function __construct($name)
	{
		parent::__construct($name);
		$this->name = $name;
	}
	public function getName() {return $this->name; }
}
class FileNotFoundException extends FilesystemException {}
class FileWriteException extends FilesystemException {}
try {
	if (!file_exists("spoon"))
		throw new FileNotFoundException("spoon");
} catch (FilesystemException $e) {
	echo "Ошибка при работе с файлом '{$e->getName()}'.<br />";
} catch (Exception $e) {
	echo "Другое исключение: {$e->getDirName()}. <br />";
}
?>

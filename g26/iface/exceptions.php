<?php ## Классы-исключения
	require_once "interfaces.php";
	class FileNotFoundException extends Exception 
		implements IFileException {}
	class SocketException extends Exception {}
	class WrongPassException extends Exception 
		implements IUserException {}
	class NetPrinterWriteException extends Exception 
		implements IFileException, INetException {}
	class SqlConnectExeption extends Exception 
		implements IInternalException, IUserException {}
?>					
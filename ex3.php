<?php 

interface CanBeFiltered {
	public function filter();

}

class Favorite implements CanBeFiltered{
	public function filter()
	{
		
	}
}

class ClassName extends AnotherClass
{
	
	function __construct(argument)
	{
		# code...
	}
}

exit(0);

interface Logger {
	public function execute($message);
}

class LogToFile implements Logger{
	public function execute($message)
	{
		var_dump('log the message to a file '.$message);
	}
}

class LogToDatabase implements Logger{
	public function execute($message)
	{
		var_dump('log the message to a database');
	}
}

//...

class UsersController{
	
	protected $logger;

	public function __construct(Logger $logger)
	{
		$this->logger = $logger;
	}

	public function show()
	{
		$user = 'John Doe';

		$this->logger->execute($user);
	}
}

$controller = new UsersController(new LogToDatabase);

$controller->show();
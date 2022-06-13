<?php 

class BaseModel
{
	public function __construct(
		private int $id,
		private string $name,
		private bool $isAdmin,
	){}

	public function getInfo()
	{
		$isAdmin = $this->isAdmin ? 'Admin' : 'General User';
		return "$this->id, $this->name, {$isAdmin}";
	}
}

class User extends BaseModel
{

}

$u = new User(1, "one", false);
echo $u->getInfo();
<?php 

abstract class Account
{
	private string $uuid = '';
	private int $userId = 0;
	private string $accountName = '';

	public abstract function setAccount(string $uuid, int $userId, string $accountName): void;
	public function getAccount(): string
	{
		return "{$this->uuid} - {$this->userId} - {$this->accountName}";
	}

	public function printAccount(): void
	{
		echo $this->getAccount();
	}

}

class Employee extends Account
{
	public function setAccount(string $uuid, int $userId, string $accountName): void
	{
		$this->uuid = $uuid;
		$this->userId = $userId;
		$this->accountName = $accountName;
	}
}

$e = new Employee;
$e->setAccount('daf2-23423-sdf2-32432', 1, 'John Doe');
$e->printAccount();
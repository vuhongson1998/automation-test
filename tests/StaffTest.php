<?php
use PHPUnit\Framework\TestCase;
class StaffTest extends TestCase
{
	public function testReturnsFullName()
	{
		require('Staff.php');
		$staff = new Staff;
		$staff->first_name = "Nguyen";
		$staff->last_name = "Bao";
		$this->assertEquals('Nguyen Bao', $staff->getFullName());
	}
	
	public function testFullNameIsEmptyByDefault()
	{
		$staff = new Staff;
		$this->assertEquals('', $staff->getFullName());
	}
	
	public function testOnlyFirstName()
	{
		$staff = new Staff;
		$staff->first_name = "Doanh";
		$this->assertEquals('Nguyen', $staff->getFullName());
	}
}
?>

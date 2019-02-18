<?php 

class UserTest extends \PHPUnit\Framework\TestCase
{
	
	public function testThatWeCanGetTheLatitude()
		{
			$user = new \App\Models\User;
			$user->setLatitude('48.665160474531');
			$this->assertEquals($user->getLatitude(), '48.665160474531');
			
		}
	
	public function testThatWeCanGetTheLongitude()
		{
			$user = new \App\Models\User;
			$user->setLongitude('3.0785024669041');
			$this->assertEquals($user->getLongitude(), '3.0785024669041');
			
		}
	
	public function testCurrentAddressCanBeSet()
		{
			$user = new \App\Models\User;
			$user->setAddress('Unnamed Road, 77970 Pécy, France');
			$this->assertEquals($user->getAddress(), 'Unnamed Road, 77970 Pécy, France');
			
		}
	
	public function testAddressVariablesContainCorrectValues()
		{
			$user = new \App\Models\User; 
			$user->setLatitude('48.665160474531');
			$user->setLongitude('3.0785024669041');
			$user->setAddress('Unnamed Road, 77970 Pécy, France');
			
			$addressVariables = $user->getAddressVariables();
			
			$this->assertArrayHasKey('lat_long', $addressVariables);
			$this->assertArrayHasKey('address', $addressVariables);
			
			
			$this->assertEquals($addressVariables['lat_long'],'48.665160474531 3.0785024669041');
			$this->assertEquals($addressVariables['address'], 'Unnamed Road, 77970 Pécy, France');
		}	
	
}
<?php 
namespace App\Models;

class User{
	

	public $lat;
	public $long;
	public $address;

	public function setLatitude($latitude)
	{
		$this->lat = $latitude;
	}
	
	public function getLatitude()
	{
		return $this->lat;
	}
	
	public function setLongitude($longitude)
	{
		$this->long = $longitude;
	}
	
	public function getLongitude()
	{
		return $this->long;
	}
	
	public function getLatLong()
	{
		return $this->lat .' '. $this->long;
	}
	
	
	public function setAddress($address)
	{
		$this->address = $address;
	}
	
	public function getAddress()
	{
		return $this->address;
	}
	
	public function getAddressVariables()
	{
	
		return 
		[
			'lat_long' => $this->getLatLong(),
			'address' => $this->getAddress(),
		];
	}
	
	
	
} 
<?php
 
namespace pocketmine\event\player;
use pocketmine\event\Cancellable;

use pocketmine\Player;
 
class PlayerTransferEvent extends PlayerEvent implements Cancellable{
  
  public static $handlerList = null;
	protected $address;
	protected $port = 19132;
	
  public function __construct(Player $player, string $address, int $port){
		$this->player = $player;
		$this->address = $address;
		$this->port = $port;
	}
  	
    public function getPort() : int{
 		return $this->port;
 	}
 
	public function setPort(int $port){
 		$this->port = $port;
  }
  
  public function getAddress() : string{
 		return $this->address;
 	}
	public function setAddress(string $address){
		$this->address = $address;
 	}
}

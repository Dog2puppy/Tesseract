<?php



namespace pocketmine\network\protocol;

class RequestChunkRadiusPacket extends DataPacket{

	const NETWORK_ID = Info::REQUEST_CHUNK_RADIUS_PACKET;

	public $radius;

	public function decode(){
		$this->radius = $this->getVarInt();
	}

	public function encode(){

	}

	/**
	 * @return PacketName
	 */
	public function getName(){
		return "RequestChunkRadiusPacket";
	}

}
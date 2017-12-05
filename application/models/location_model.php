<?php
class Location_model extends CI_Model{
	function __construct(){
		parent::__construct();

    $this->load->database();
	}

	//컨트롤러에서 좌표를 받아 그 좌표에서 3km안에 있는 역을 찾아냅니다.
	//limit의 숫자 조정으로 반환하는 역의 개수를 조절할 수 있습니다.
	//지금은 가장 가까운 역만 반환합니다.
	public function subwayLocation($centerX, $centerY){
		$this->centerX = $centerX;
		$this->centerY = $centerY;
		$sql = 'SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians('.$centerX.') ) * cos( radians(XPOINT_WGS) )
* cos( radians(YPOINT_WGS) - radians('.$centerY.') ) + sin( radians('.$centerX.') ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 3
  ORDER BY distance
  LIMIT 0 , 1';

		return $this->db->query($sql)->result_array();
	}

	public function subwayCircle($subwayX, $subwayY) {
		$this->subwayX = $subwayX;
		$this->subwayY = $subwayY;
		$sql = 'SELECT STATION_CD, STATION_NM, XPOINT_WGS, YPOINT_WGS, ( 6371 * acos( cos( radians('.$subwayX.') ) * cos( radians(XPOINT_WGS) )
* cos( radians( YPOINT_WGS ) - radians('.$subwayY.') ) + sin( radians('.$subwayX.') ) * sin(radians(XPOINT_WGS)) ) ) AS distance
  FROM ci_subway
  HAVING distance < 2
  ORDER BY distance
  LIMIT 0 , 20';
		return $this->db->query($sql)->result_array();
	}

}
?>

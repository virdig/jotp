<?php
class Jotp
{
    const API_URL = "https://jotp.me/api/json.php";
    
    public function getAkun()
    {
        $payload       = '{"action":"akun"}';
        $running = $this->Request(SELF::API_URL, $payload);
        return $running;
    }
	
	 public function postOrder($GetId, $GetOperator)
    {
        $payload       = '{"action":"order","service_id":"'. $GetId .'","operator":"'. $GetOperator .'"}';
        $running = $this->Request(SELF::API_URL, $payload);
        return $running;
    }
	
	 public function getAllOrder()
    {
        $payload       = '{"action":"getallorder"}';
        $running = $this->Request(SELF::API_URL, $payload);
        return $running;
    }
	
	public function getOrder($GetId)
    {
        $payload       = '{"action":"get_order","id":"'. $GetId .'"}';
        $running = $this->Request(SELF::API_URL, $payload);
        return $running;
    }
	
	public function getServices()
    {
        $payload       = '{"action":"services"}';
        $running = $this->Request(SELF::API_URL, $payload);
        return $running;
    }
	
	public function postChangeStatus($GetId, $GetStatus)
    {
        $payload       = '{"action":"change_status", "id":"'. $GetId .'", "status":"'. $GetStatus .'"}';
        $running = $this->Request(SELF::API_URL, $payload);
        return $running;
    }

    protected function Request($url, $post)
    {

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

		$headers = array(
			"admin: true",
			"apikey:" . Jotp_Apikey,
			"pinkey:" . Jotp_Pinkey,
			"Content-Type: application/json",
		);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
		$resp = curl_exec($curl);
		curl_close($curl);
		return json_decode($resp);

    }
}
?>

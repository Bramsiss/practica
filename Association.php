<? php class Association extends current_season
{
	private $_identity;
	private $_href;
    private $_title;
 	private $_logo;
    private $_state;
    private $_city;
    private $_sport_id;
    private $_type_id;


   

    public function getIdentity()
    {
        return $this->_identity;
    }
    public function getHref()
    {
        return $this->_href;
    }
    public function getTitle()
    {
        return $this->_title;
    }
    public function getLogo()
    {
        return $this->_logo;
    }    
    public function getState()
    {
        return $this->_state;
    }
    public function getCity()
    {
        return $this->_city;
    }
    public function getSportId()
    {
        return $this->_sport_id;
    }
    public function getTypeId()
    {
        return $this->_type_id;
    }        


    public function setIndetity($indetity)
    {
        $this->_identity = $indetity;
    }
    public function setHref($href)
    {
        $this->_href = $href;
    }    
    public function setTitle($title)
    {
        $this->_title = $title;
    }
    public function setLogo($logo)
    {
        $this->_logo = $logo;
    }
    public function setState($state)
    {
        $this->_state = $state;
    }
    public function setCity($city)
    {
        $this->_city = $city;
    }
    public function getSportId($sport_id)
    {
        $this->_sport_id = $sport_id;
    }
    public function getTypeId($type_id)
    {
        $this->_type_id = $type_id;
    }

}
?>

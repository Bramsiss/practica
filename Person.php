    class Club
{
    private $_logo = NULL;
    
    
    public function getLogo()
    {
        return $this->_logo;
    }
    public function setLogo($logo)
    {
        $this->_logo = $logo;
    }
}


   class Person
{
    private $_foto_url = NULL;
    private $_name = NULL;
    private $_year = NULL;
    private $_month = NULL;
    private $_day = NULL;
    private $_alias = NULL;
    private $_current_career_clubs = NULL;

    public function getFoto()
    {
        return $this->_foto_url;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function getYear()
    {
        return $this->_year;
    }
    public function getMonth()
    {
        return $this->_month;
    }
    public function getDay()
    {
        return $this->_day;
    }
    public function getAlias()
    {
        return $this->_alias;
    }    
    public function getCurrentCareerClubs()
    {
        return $this->_current_career_clubs;
    }
    
        "foto_url":"/public/user/13/78/0a/a63a5_7dec.jpg",
        "name":"Иванов Иван",
        "born":{
            "year":1982,
            "month":2,
            "day":7,
        },
        "alias":171410544,
        "current_career_clubs":[2065290689,4193333717]
    },

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
    

    public function setFoto($foto)
    {
        $this->_foto = $foto;
    }
    public function setName($name)
    {
        $this->_name = $name;
    }
    public function setYear($year)
    {
        $this->_year = $year;
    }
    public function setMonth($month)
    {
        $this->_month = $month;
    }
    public function setDay($day)
    {
        $this->_day = $day;
    }
    public function setAlias($alias)
    {
        $this->_alias = $alias;
    }    
    public function setCurrentCareerClubs()
    {
       $this->_current_career_clubs = $current_career_clubs;
    }
    
}
<? php class Championship
{
    //Запрос данных турнира по идентификатору чемпионата

	private $_champ;
	private $_season;
   

    public function getChamp()
    {
        return $this->_champ;
    }
    public function getSeason()
    {
        return $this->_season;
    }


    public function getChamp($champ)
    {
        $this->_champ = $champ;
    }
    public function getSeason($season)
    {
        $this->_season = $season;
    } 

}
?>
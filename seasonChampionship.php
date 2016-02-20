<? php class seasonChampionship
{
    //Запрос данных турнира по идентификатору сезона

	private $_champ;
	private $_season;
    private $_current_season;
   

    public function getChamp()
    {
        return $this->_champ;
    }
    public function getSeason()
    {
        return $this->_season;
    }
    public function getCurrentSeason()
    {
        return $this->_current_season;
    }


    public function getChamp($champ)
    {
        $this->_champ = $champ;
    }
    public function getSeason($season)
    {
        $this->_season = $season;
    }    
    public function getCurrentSeason($current_season)
    {
        $this->_current_season = $current_season;
    }

}
?>
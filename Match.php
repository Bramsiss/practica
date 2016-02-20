<? php class Match
{

    //Запрос данных о матче
    
	championship
	seasons
	tour
	home_club
	away_club
	score


   	private $_length;
   	private $_datetime;
   	private $_likes_count;
   	private $_comments_count;
   	private $_played;
   	building

   	public function getLength()
    {
        return $this->_length;
    }
    public function getDateTime()
    {
        return $this->_datetime;
    }
    public function getLikesCount()
    {
        return $this->_likes_count;
    }
    public function getCommentsCount()
    {
        return $this->_comments_count;
    }
    public function getPlayed()
    {
        return $this->_played;
    }

    public function setLength($_length)
    {
        $this->_length = $_length;
    }
    public function setDateTime($datetime)
    {
        $this->_datetime = $datetime;
    }
    public function setLikesCount($likes_count)
    {
        $this->_likes_count = $likes_count;
    }
    public function setCommentsCount($comments_count)
    {
        $this->_comments_count = $comments_count;
    }
    public function setPlayed($played)
    {
        $this->_played = $played;
    }


}
?>
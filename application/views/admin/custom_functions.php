<?php  

class Database
{
	private $host;  
    private $username;  
    private $password;    
    private $db; 
      
    protected function connect()  
    {  
    	/*---- db credentials for local server ---*/
	    $this->host = "localhost";
		$this->username = "root";
		$this->password = "";
		$this->db = "cdc";
	    
	    $con = new mysqli($this->host, $this->username, $this->password,$this->db);
        return $con; 
    } 

    //get speciality name by id
	public function getCategoryName($id)
	{	
		$sql = "SELECT cat_name FROM category where id = '$id' ";
		$results = $this->connect()->query($sql);   
		$count = $results->num_rows;
		if($count > 0)
		{
			$row = $results->fetch_assoc();
			return $row['cat_name'];
		}
		else
		{
			return '';
		}
	}

    //get speciality name by slug
	public function getSpecialityName($slug)
	{	
		$sql = "SELECT * FROM speciality where speciality_slug = '$slug' ";
		$results = $this->connect()->query($sql);   
		$count = $results->num_rows;
		if($count > 0)
		{
			$row = $results->fetch_assoc();
			return $row['speciality_name'];
		}
		else
		{
			return '';
		}
	}

}

?>





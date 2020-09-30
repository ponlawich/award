<?

	class Cl_award
	{		
	
		function conn()
		{
			date_default_timezone_set("Asia/Bangkok");	
			try
			{
				$con = mysqli_connect("localhost","root","password","party2","3306") or die("Error: " . mysqli_error());
				$con->query("set names utf8");
				return $con;
			}
			catch (Exception $e)
			{
				return false;
			}
		}
		
		function SQL_Select($Tquery)
		{
			try
			{			
				$con = $this->conn();
					//mysqli_set_charset('utf8');
					$QVal = mysqli_query($con,$Tquery);
				//mysqli_close($con);
				return($QVal);
			}
			catch (Exception $e)
			{
				return false;
			}			
		}
		
		function SQL_Query($Tquery)
		{
			try
			{	
				$con = $this->conn();
					//mysqli_set_charset('utf8');
					$QVal = mysqli_query($con,$Tquery);
				mysqli_close($con);
				return($QVal);
			}
			catch (Exception $e)
			{
				return false;
			}
		}
		
		function testconnect()
		{
			echo "OK<br>";
		}
		
	}	

?>
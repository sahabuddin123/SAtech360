
<?php
	if(isset($_POST["submit"]))
{
	$con=mysql_connect("localhost","root","");
	if(!$con)
		{
			$msg="Server is not connect";
		}
		else
		{
			$db=mysql_select_db("user");
		if(!$db)
				{
					$msg="Data is not Found";
				}
				else
				{
					$n=$_POST["name"];
					$e=$_POST["email"];
					$p=$_POST["phone"];
					$m=$_POST["message"];
					$q="insert into `data` (`Name`,`E-mail`,`Phone`,`Massege`) values('$n','$e','$p','$m')";
					$sq=mysql_query($q);
					if(mysql_affected_rows())
						{
							$msg="Data add Sucess";
						}
						else
						{
							$msg="Data can't added";
						}
				}
		}	
		echo $msg;
}
?>

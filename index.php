<?php

   $obj = new main();



   class main {
	  	  
    public function __construct() {
       
	   $date = date("Y-m-d");
	 echo 'The value of $date:'.$date."<br>";
	 
	  $tar = date("Y/m/d");
	 echo 'The value of $tar:'.$tar."<br>";
	 
	 $year = array("2012","396","300","2000","1100","1089");
	 echo 'the value of $year:';
	 print_r($year);
	 echo"<br>";
	 echo"<hr>";
	 
	 $repl = str_replace("-","/","$day");
	 echo 'After replacing - with / $date is'.$repl."<br>";
	 echo"<hr>";

    
       echo'<h3>comparing $date and $tar<h3>';
      if (strcmp($date, $tar) > 0)
	echo " <h4>The future<h4><br>";
       elseif  (strcmp($date, $tar) < 0)
	echo "<br><h4> The past<h4>";
        else  echo " Oops";
    echo"<hr>";


for($i=0; $i <strlen($tar);$i++)
        {
           if($tar[$i]=='/')
           {
              echo " ".$i; 
           }
        }

    echo"<hr>";

   echo"number of words in $date is:";
    $temp1 = str_word_count($tar);
    echo "$temp1";
    echo"<br>";
    echo"<hr>";


   echo"the length of $date is:";
    $temp2 = strlen($date);
    echo "$temp2";
    echo"<br>";
    echo"<hr>"; 

    echo"ASCII valu of the first character of string is:";
    $temp3 = ord($date);
    echo"$temp3";
    echo"<br>";
    echo"<hr>";


    echo'Last two character in the $date  are:';
    $temp4 = substr("$date",-2);
    echo"$temp4";
    echo"<br>";
    echo"<hr>";


    $temp4=explode("-",$date);
    for($i=0;$i<count($temp4);$i++)
     {
     echo $temp4[$i]." ";
    }
     echo "<br>";
    echo"<hr>";
    



  echo"using foreach to check leap year" ;
foreach($year as $value)
				{
					if(((int)$value)%4==0  )
						echo "<br>True";
					else
						echo "<br>False";
						
				}


echo "<hr>";
 
 echo "using do-while to check leap year";
              $i=0;
				do
				{
					if(((int)$year[$i])%4==0)
					{
						echo "True";
						echo"<br>";
					}
					else
					{
						echo "False";
					}
					++$i;
				} while($i<count($year));	

					echo "<br>";

     echo"<hr>";
     echo"usig switch to check leap year";
     for ($i=0;$i<count($year);$i++)
				{
					
						switch ($year{$i})
						{
								case "2012": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "396": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "300": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "2000": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "1089": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								case "1100": 
								if(((int)$year[$i])%4==0)
								{
									echo "<br>True";
								}
								else
								{
									echo "<br>False";
								}
								break;
								
								default:
								break;

                        }
                }       
      echo"<hr>";



    echo 'using delimit :';
    echo'<br>';

    foreach($year as $value)
				{
					if(((int)$value)%4==0)
						echo " True";
					else
						echo " False";
				}






    

       
      



    }
	}
	?>

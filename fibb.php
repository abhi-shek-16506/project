<html>
<head><title>Random</title></head>
<body style="background-color: black;color: yellow;">
<center>
    <form method="post">        
Enter a Number: <input type="text" name="num1"/><br>  <br>
<button type="submit">Check</button>  
</form> 

 
<?php   
    if($_POST)  
    {   
        $num = $_POST['num1'];
        $i = 3; 
        $num1 = 0;
        $num2 = 1;
       
        $last = $num2;
         echo $num1.''.$num2.'';
        while($i <= $num)
        {
            $num3 = $num1 + $num2 ;
            echo $num3.'';
            $num1 = $num2;
            $num2 = $num3;
            $i = $i + 1 ;
            $last = $num2;
        }
    

    $count = 0; 
    $num4 = $_POST['num1']; 
    $nu = 2;   
    $n1 = 1;
    $n2 = 1;  
    $n3 = 2;    
    echo "<h3>Prime Numbers in the given fibonnaci series: </h3>";  
    echo "\n"; 
while ($count < $last )  
{  
$div_count=0;  
while($nu == $n3)
{
if($last > 2){
for ( $i=1; $i<=$nu; $i++)  
{  
if (($nu%$i)==0)  
{  
$div_count++;  
}  
} 
if ($div_count<3)  
{  
echo $nu." , ";
} 
}
$n1=$n2;
$n2=$n3;
$n3 = $n1 + $n2;
} 
$nu=$nu+1;
$count =$count+1;
} 
    } 
    ?>
    <button type="submit"><a href="head.html"> go to home</a></button> 
    </body>
</html>
<html>
    <head>

    </head>
    <body style="background-color:black;color:red;">
    <center>
     <form method="post">enter the number_format
         <input type="text" name="num"><br> <br>
         <button type="submit">submit</button>   
     </form> </center>
     <?php
     if($_POST)  
    {   
        $num = $_POST['num']; 
        $ori_num = $num;
        $rev_num = 0;
        $sum = 0;
        $rem = 0;
        while($num > 1)
        {
            $rem = $num % 10;
            $sum += $rem;
            $rev_num = $rev_num * 10 + $rem;
            $num = (int)$num / 10;
        }
        echo "The sum of the digits of $ori_num is $sum"; 
        echo "</br>";
        if($ori_num == $rev_num){  
            echo "The number $ori_num is Palindrome";     
        }else{  
            echo "The number $ori_num is not a Palindrome";   
        }  echo "</br>";
}     
     ?>  
     <button type="submit"><a href="head.html"> go to home</a></button> 
    </body>
</html>
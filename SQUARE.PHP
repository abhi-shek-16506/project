<html>
<head><title>Random</title></head>
<body style="background-color: black;color: red;">
<h2><p>Number generated randomly is = <?php
    $NUM = rand(1, 100);
    echo $NUM;
?>.</p><p> And its square root is= <?php
    echo round(sqrt($NUM),3);
?>.</p></h2>
<button>
    <a href="head.html">go back</a>
</button>
</body>
</html>
<!DOCTYPE html>
<html>
<head><title>Soal IT Palindrom</title></head>
<body>
    <div>
        <form method="POST" action="<?php print $_SERVER['PHP_SELF']?>">
            <p>Check Palindrom or Not</p>
            <hr>
                <p>Input number/word : <input type="text" name="input" /></p>
                <input type="Submit" name="submit" value="check" />
        </form>
<?php
if(!empty ($_POST['input']))
    {   
        $varinput = $_POST['input'];
            if($varinput == strrev($varinput))
                {
                    echo "$varinput is PALINDROM";
                }
                    elseif($varinput !== strrev($varinput))
                    {
                        echo "$varinput is NOT PALINDROM";
                    }
            echo "<br>";
            echo "Reverse input = ".strrev($varinput);
    }
?>
</div>
<!-- <h2>Palindrome Test</h2>
<br><br>
<form action="" method="post">
Ketikkan Kata/Kalimat <input type="text" name="testword" >
<input type="submit" name="submit" value="Test">
</form>
</body>
</html>
<?php
if(isset($_POST['testword'])){
$testword = strtolower( $_POST['testword'] );
$testword = preg_replace( '/[^\sa-z0-9]/', '', $testword );
if($testword == strrev($testword)){
echo '<i>'.$testword. '</i> merupakan <strong>palindrome</strong>';
}
else{
echo 'Maaf, '.$testword.' bukan Palindrome <br>';
echo "Reverse input =".strrev($testword);
}
}
?> -->
</body>
</html>

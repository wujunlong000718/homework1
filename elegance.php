<?php
    function countGracePoint($r)
    { 
        $num = 0;
        $a = 0;
        $b = 0;
        for($x = 1;$x*$x < $r*$r;$x++)
        {
            $y = (int)sqrt($r*$r - $x*$x);
            if($x*$x + $y*$y == $r*$r)
            {
                $a++;
            }
        }
        $a = $a*4;
        $x = (int)sqrt($r*$r);
        if($x * $x == $r*$r) $b =$b+4;
        $num = $a + $b;
        return $num;
    }
     echo countGracePoint(5); 
?>  
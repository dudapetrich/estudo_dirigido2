
<?php

//20. Faça um algoritmo que imprima as seguintes figuras geométricas:

//Triângulo 1
    for ($h=0; $h<8; $h++) 
    { for($l=-1; $l<$h; $l++)
        {print "* ";}
    print "\n";}

print "\n";

//Triângulo 2
 for ($h=0; $h<=8; $h++)
    { for ($l=0; $l<=8-$h; $l++)
        {print "  ";}

    for($l=0; $l<$h; $l++)
    { print "* ";}
    print "\n";
    }

print "\n";

//Quadrado

 for ($h=0; $h<8; $h++) 
 { for($l=1; $l<8; $l++)
     {print "* ";}
 print "\n";}

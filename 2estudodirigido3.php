<?php 

//3. Faça um algoritmo que verifique se uma letra digitada é "F" ou "M". Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido.

print"Digite m para masculino ou f para Feminino: ";
$sexo=  fgetc (STDIN);


    if($sexo=="f" or $sexo=="m" ){
        if($sexo=="f")

            print "O sexo é Feminino \n";
        

        if ($sexo=="m") 
            print "O sexo é Masculino \n";    
    }
   

else{
    print "Sexo inválido \n";
}

<?php

//. Faça um algoritmo para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar:
//A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
//A mensagem "Reprovado", se a média for menor do que sete;
//A mensagem "Aprovado com Distinção", se a média for igual a dez.

    print "Digite a primeira nota: ";
    $primeira= fgets (STDIN);

    print "Digite a segunda nota: ";
    $segunda= fgets (STDIN);

    $media= ($primeira + $segunda)/2;

    if ($media >=7){
        if ($media >=7 and $media<10)
        print "Aprovado \n";
         
        elseif($media==10)
        print "Aprovado com DISTINÇÃO \n";
    }

    else
        print "Reprovado \n";
    
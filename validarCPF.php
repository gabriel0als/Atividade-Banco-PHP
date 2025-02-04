<?php

    $cpf = readline("Digite o seu CPF: ");

    validarCPF($cpf);

    function validarCPF($cpf = null): bool{

        $valor = 0;

        for ($i=0; $i < 9; $i++) { 
            $multiplicador = 10;
            $valor += $cpf[$i] * $multiplicador;
        
            $multiplicador--;
        }
        print $valor;
        $resto = $valor % 11;
        print $resto;

        if ($resto < 2) {

            $digito1 = 11 - $resto;
        } elseif($resto >= 2) {

            $digito1 = 0;
        }

        if($digito1 != $cpf[10]) {
            print "Seu CPF não é válido";
            return false;
        }
        
        print $digito1;
        for ($i=0; $i < 9; $i++) { 
            $multiplicador = 11;
            $valor += $cpf[$i] * $multiplicador;
            
            $multiplicador--;
            }
            $resto = $valor % 11;
            
            if ($resto > 2) {

                $digito2 = 11 - $resto;
            } elseif($resto >= 2) {
    
                $digito2 = 0;
            }
            
            if($digito2 != $cpf[11]) {
                return "CPF INVÁLIDO";
            }

        print "$digito1, $digito2";
        return true;
    }
<?php

class codes{
    private static $errorCodes = array(
        "0000" => "Sucesso",
        "1001" => "Credenciais Inválidas",
        "1002" => "Conta Não Ativada",
        "1003" => "Falha na Autenticação de 2F",
        "1004" => "Token Inválido ou Expirado",
        "1005" => "Conta Temporariamente Bloqueada",
        "1006" => "Token de Redefinição Inválido (tempo expirado)",
        "1007" => "Violação da Política de Senha (fraca e passou do front)",
        "1008" => "Usuário Não Encontrado",
        "1009" => "E-mail Não Verificado",
        "1010" => "Verifique o seu email para continuar",
        "2001" => "Aviso - Dados já existem no sistema.",
        "2002" => "Erro - Dados não encontrados para atualização.",
        "2003" => "Erro - Dados não encontrados para obtenção.",
        "2004" => "Erro - Formato de dados inválido.",
        "2005" => "Erro - Campos obrigatórios ausentes.",
        "2006" => "Erro - Acesso não autorizado.",
        "2007" => "Erro - Violou limites de quota do serviço.",
        "2100" => "Erro Interno - Falha ao registrar dados.",
        "2101" => "Erro Interno - Falha ao atualizar dados.",
        "2102" => "Erro Interno - Falha ao obter dados.",
        "2103" => "Erro Interno - Falha ao remover dados.",
        "2104" => "Erro Interno - Serviço temporariamente indisponível.",
        "2105" => "Erro - Método requisitado indisponível.",

    );

    public static function message($code){
        return isset(self::$errorCodes[$code]) ? self::$errorCodes[$code] : "Código não encontrado";
    }

    public static function all_codes(){
        return array_keys(self::$errorCodes);
    }

    public static function all_messages(){
        $result = array();
        foreach (self::$errorCodes as $code => $message) {
            $result[] = "$code: $message";
        }
        return implode("\n", $result);
    }
}
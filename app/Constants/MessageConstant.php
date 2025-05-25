<?php

namespace App\Constants;


class MessageConstant
{
    const ARRAY_MESSAGE_NOT_FOUND = ['code_message' => 'error', 'message' => 'Registro não encontrado!'];
    const ARRAY_MESSAGE_DEFAULT_ERROR = ['code_message' => 'error', 'message' => 'Falha ao tentar executar a solicitação!!'];
    const ARRAY_MESSAGE_DEFAULT_SUCCESS = ['code_message' => 'success', 'message' => 'Transação realizada com sucesso!'];
    const ERROR = -1;
    const SUCCESS = 1;
    const ARRAY_MESSAGE_PASSWORD_NOT_EQUAL = ['code_message' => 'error', 'message' => 'Senhas não conferem!!'];
}

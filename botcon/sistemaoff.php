<?php

 if($type == 'private') {
 
    apiRequest("editMessageText", array('chat_id' => $chat_id, 'message_id' => $message_id, "parse_mode" => "Markdown", "text" => "*⚠️ Retorno: SISTEMA FORA DE EXECUÇÃO POR TEMPO INDETERMINADO ( ATUALIZAÇÃO )*", "reply_to_message_id" => $message_id,
'reply_markup' => array('inline_keyboard' => array(                                                                                                                                                                                                          
                                                      //linha 1
                                                     array(
                                                         array('text'=>'💂‍♀️ SUPORTE 💂‍♀️','url'=>'https://t.me/suleiman171')
                                                      )                                                          
                                            )
                                    )));

}else{
                
    apiRequest("editMessageText", array('chat_id' => $chat_id, 'message_id' => $message_id, "parse_mode" => "Markdown", "text" => "*⚠️ Retorno: SISTEMA FORA DE EXECUÇÃO POR TEMPO INDETERMINADO ( ATUALIZAÇÃO )*", "reply_to_message_id" => $message_id,
'reply_markup' => array('inline_keyboard' => array(                                                                                                                                                                                                          
                                                      //linha 1
                                                     array(
                                                         array('text'=>'💂‍♀️ SUPORTE 💂‍♀️','url'=>'https://t.me/suleiman171')
                                                      )                                                          
                                            )
                                    )));

} 

?>
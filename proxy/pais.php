<?php

if($type == 'private') {

apiRequest("editMessageText", array('chat_id' => $chat_id, 'message_id' => $message_id, "parse_mode" => "Markdown", "text" => "*Escolha a localidade:*",
'reply_markup' => array('inline_keyboard' => array(                                                                                                                                                    
                                                      //linha 1
                                                     array(
                                                         array('text'=>'ð§ð·  Brasil  ð§ð·',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'proxybrasil']))//botÃ£o com callback                                                                                                            
                                                      ),
                                                      //linha 2
                                                     array(
                                                         array('text'=>'ðºð¸  Estados Unidos  ðºð¸',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'estadosunidos']))//botÃ£o com callback                                                                                                                                                              
                                                      ),
                                                     //linha 3
                                                     array(
                                                         array('text'=>'ð  Voltar  ð',"callback_data"=>'menu') //botÃ£o 4                                                      
                                                      ),
                                                      //linha 4
                                                     array(
                                                         array('text'=>'ð  Apagar  ð',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'apagar']))//botÃ£o com callback                                                   
                                                      )
                                                          
                                            )
                                    )));

}else{

apiRequest("editMessageText", array('chat_id' => $chat_id, 'message_id' => $message_id, "parse_mode" => "Markdown", "text" => "*Escolha a localidade:*", "reply_to_message_id" => $message_id,
'reply_markup' => array('inline_keyboard' => array(                                                                                                                                                    
                                                      //linha 1
                                                     array(
                                                         array('text'=>'ð§ð·  Brasil  ð§ð·',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'proxybrasil']))//botÃ£o com callback                                                                                                            
                                                      ),
                                                      //linha 2
                                                     array(
                                                         array('text'=>'ðºð¸  Estados Unidos  ðºð¸',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'estadosunidos']))//botÃ£o com callback                                                                                                                                                                                       
                                                      ),
                                                     //linha 3
                                                     array(
                                                         array('text'=>'ð  Voltar  ð',"callback_data"=>'menu') //botÃ£o 4                                                      
                                                      ),
                                                      //linha 4
                                                     array(
                                                         array('text'=>'ð  Apagar  ð',"callback_data"=>serialize(['id'=>$user_id, 'data'=>'apagar']))//botÃ£o com callback                                                   
                                                      )
                                                          
                                            )
                                    )));

}

?>
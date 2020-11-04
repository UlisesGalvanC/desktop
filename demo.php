public function onMessage(IWebSocketConnection $user, IWebSocketMessage $msg){
$msg=trim($msg->getData());
switch($msg){
  case 'hola':
    $msgback=webSocketMessage::create("Hola humano");
    $user->sehdMessage($msgback);
    break;
  case 'nombre':
    $msgback=webSocketMessage::create("No tengo nombre");
    $user->sehdMessage($msgback);
    break;
  case 'edad':
    $msgback=webSocketMessage::create("Soy viejo");
    $user->sehdMessage($msgback);
    break;
  case 'fecha':
    $msgback=webSocketMessage::create("Hoy es: " .date("F j, Y"));
    $user->sehdMessage($msgback);
    break;
  case 'Hora':
    $msgback=webSocketMessage::create("La hora es: ".date("H:iA"));
    $user->sehdMessage($msgback);
    break;
  case 'gracias':
    $msgback=webSocketMessage::create("No hay problema");
    $user->sehdMessage($msgback);
    break;
  case 'adios':
    $msgback=webSocketMessage::create("Que tengas un buen día");
    $user->sehdMessage($msgback);
    break;
  default:
    $msgback=webSocketMessage::create("No entiendo");
    $user->sehdMessage($msgback);
    break;
 }

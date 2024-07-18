<?php
global $dbPath;
include __DIR__."/../../".$dbPath."config/dashboard.php";
// main
$string["homeNavbar"] = "Inicio";
$string["welcome"] = "¡Bienvenido a la dashboard de ".$gdps.'!';
$string["didntInstall"] = "<div style='color:#47a0ff'><b>¡Cuidado, no has terminado de instalar el panel!</b> Haz clic en el texto para hacerlo.</div>";
$string["levelsWeek"] = "Niveles subidos en una semana"; // unused string
$string["levels3Months"] = "Niveles subidos en 3 meses"; // unused string
$string["footer"] = "✨〃Unnamed GDPS, 2021 - ".date('Y', time())."</br>⚙ GDPSCore v2.0.0-beta";
$string["tipsAfterInstalling"] = "¡Bienvenido al panel! Aquí tienes unos consejos tras la instalación:<br>
1. Parece que aparecieron nuevos permisos 'SQL' en la tabla 'roles'. Ve a comprobarlo...<br>
2. Coloca un archivo 'icon.png' en la carpeta 'dashboard' para que aparezca el logo de tu GDPS en la esquina superior izquierda.<br>
3. Configura el panel en 'config/dashboard.php'";

$msg[0] = "¿Qué vas a hacer hoy?";
$msg[1] = "TOME SEÑORA TOME";
$msg[2] = "Hola Nintendero, hola Nintender- AAA";
$msg[3] = "(1/3) NAAAmix, algún día podríamos casarnos";
$msg[4] = "(2/3) No, nokierow";
$msg[5] = "(3/3) TOMA, PA KE LLORI CON GANA'";
$msg[6] = "R.I.P. GDGravity";
$msg[7] = "¿El pollo ardiente?";
$msg[8] = "Perdí los mensajes originales por un error de respaldo :c";
$msg[9] = ":michifino:";
$msg[10] = "¿Primera vez?";
$msg[11] = "Gracias a LeMaple por la idea";
$msg[12] = "Asi que la 0.2.0 finalmente salió";
$msg[13] = "Nejik.✦ aprueba esto 👍";
$msg[14] = "<div style='color:#47ff47'>Parece un buen lugar para esconder un easter egg...</div>";
$msg[15] = "Esto es un texto de ejemplo";
$msg[16] = "¡Bienvenido a la dashboard de Unnamed GDPS!";
$msg[17] = "¿Ya te saludé?";
$msg[18] = "Estaba haciendo esto cuando salió la 2.201";
$msg[19] = "Dejenlo cocinar";
$msg[20] = "Que tu padre es el <div style='color:#000000'><b>negrojose</b></div>";
$msg[21] = "<div style='color:#ff4747'><b>¡NO USES LA DASHBOARD A LAS 3AM! (termina 🔥)</b></div>";
$msg[22] = "<div style='font-size:12px'>ola soi tímido</div>";
$msg[23] = "Ten un buen día ^^";
$msg[24] = "Quierosentirtucuerpojuntitoalmioporquemialmayatienetiemposintiendofrío";
$msg[25] = "Feliz 2024 :D";
$msg[26] = "Al final de día, es de noche.";
$msg[27] = "¡Edición Stellar!";
$msg[28] = "¡Es una página!";
$msg[29] = "Conexión exitosa";
$msg[30] = "0.3.0 próximamente... 🕵️‍";

$string["wwygdt"] = $msg[rand(0, 30)];
$string["game"] = "Juego";
$string["guest"] = "invitado";
$string["account"] = "Cuenta";
$string["levelsOptDesc"] = "Ver lista de niveles";
$string["songsOptDesc"] = "Ver lista de canciones";
$string["yourClanOptDesc"] = "Ver team \"%s\"";
$string["clanOptDesc"] = "Ver lista de teams";
$string["yourProfile"] = "Tu perfil";
$string["profileOptDesc"] = "Ver tu perfil";
$string["messengerOptDesc"] ="Ver tus mensajes";
$string["addSongOptDesc"] = "Agregar una canción al servidor";
$string["loginOptDesc"] = "Iniciar sesión";
$string["createAcc"] = "Crear cuenta";
$string["registerOptDesc"] = "Registrarse en %s";
$string["downloadOptDesc"] = "Descargar %s";
// cron
$string["tryCron"] = "Ejecutar Cron";
$string["cronSuccess"] = "¡Completado con éxito!";
$string["cronError"] = "Error";
// acc settings
$string["profile"] = "Perfil";
$string["empty"] = "Vacío...";
$string["writeSomething"] = "¡Escribe algo!";  
$string["replies"] = "Respuestas";
$string["replyToComment"] = "Responder al comentario";
$string["settings"] = "Ajustes";
$string["allowMessagesFrom"] = "Permitir mensajes de...";
$string["allowFriendReqsFrom"] = "Permitir solicitudes de amistad de...";
$string["showCommentHistory"] = "Mostrar historial de comentarios para...";
$string["timezoneChoose"] = "Seleccionar zona horaria";
$string["yourYouTube"] = "Tu canal de YouTube";
$string["yourVK"] = "Tu página en VK";
$string["yourTwitter"] = "Tu perfil de Twitter";
$string["yourTwitch"] = "Tu canal de Twitch";
$string["saveSettings"] = "Guardar ajustes";
$string["all"] = "Todos";
$string["friends"] = "Amigos";
$string["none"] = "Nadie";
$string["youBlocked"] = "Este usuario te ha bloqueado";
$string["cantMessage"] = "No puedes enviar mensajes a este usuario";
// acc management
$string["accountManagement"] = "Cuenta";
$string["changePassword"] = "Cambiar contraseña";
$string["changeUsername"] = "Cambiar nombre de usuario";
$string["unlistedLevels"] = "Tus niveles ocultos";
// manage
$string["manageSongs"] = "Administrar canciones";
$string["gauntletManage"] = "Administrar Story Mode";
$string["suggestLevels"] = "Niveles enviados";
// mod tools
$string["modTools"] = "Herramientas";
$string["leaderboardBan"] = "Banear usuario";
$string["unlistedMod"] = "Niveles ocultos";
// reupload
$string["reuploadSection"] = "Servidor";
$string["songAdd"] = "Subir canción";
$string["songLink"] = "Subir canción mediante enlace";
$string["packManage"] = "Administrar Map Zones";
// browse
$string["browse"] = "Buscar";
$string["statsSection"] = "Estadísticas";
$string["dailyTable"] = "Dailys";
$string["modActionsList"] = "Acciones de los mods";
$string["modActions"] = "Moderadores";
$string["gauntletTable"] = "Story Mode";
$string["packTable"] = "Map Zones";
$string["leaderboardTime"] = "Top de 24h";
// download
$string["download"] = "Descargar";
$string["forwindows"] = "Para Windows";
$string["forandroid"] = "Para Android";
$string["formac"] = "Para macOS";
$string["forios"] = "Para iOS";
$string["third-party"] = "Externos";
$string["thanks"] = "¡Gracias a estas personas!";
$string["language"] = "Idioma";
// profile
$string["loginHeader"] = "¡Hola, %s!";
$string["logout"] = "Cerrar sesión";
$string["login"] = "Iniciar sesión";
$string["wrongNickOrPass"] = "Usuario o contraseña incorrectos";
$string["invalidid"] = "La ID no es válida";
$string["loginBox"] = "Iniciar sesión en la cuenta";
$string["loginSuccess"] = "Has iniciado sesión exitosamente";
$string["loginAlready"] = "Ya has iniciado sesión";
$string["clickHere"] = "Panel";
$string["enterUsername"] = "Nombre de usuario";
$string["enterPassword"] = "Contraseña";
$string["loginDesc"] = "Inicia sesión en tu cuenta del servidor";
// register
$string["register"] = "Registrarse";
$string["registerAcc"] = "Registro de cuenta";
$string["registerDesc"] = "Crea una cuenta";
$string["repeatpassword"] = "Repetir contraseña";
$string["email"] = "Correo electrónico";
$string["repeatemail"] = "Repetir correo electrónico";
$string["smallNick"] = "El nombre de usuario es demasiado corto";
$string["smallPass"] = "La contraseña es demasiado corta";
$string["passDontMatch"] = "Las contraseñas no coinciden";
$string["emailDontMatch"] = "Los correos no coinciden";
$string["registered"] = "Te has registrado exitosamente";
$string["bigNick"] = "El nombre de usuario es demasiado largo";
$string["mailExists"] = "Este correo ya está en uso";
$string["badUsername"] = "Elige otro nombre de usuario";
// change password
$string["changePassTitle"] = "Cambiar contraseña";
$string["changedPass"] = "Has cambiado tu contraseña, inicia sesión nuevamente";
$string["wrongPass"] = "Contraseña incorrecta";
$string["samePass"] = "Las contraseñas son iguales";
$string["changePassDesc"] = "Cambia la contraseña de tu cuenta";
$string["oldPassword"] = "Contraseña actual";
$string["newPassword"] = "Nueva contraseña";
$string["confirmNew"] = "Confirmar nueva contraseña";
// change username/password (admin)
$string["forcePassword"] = "Forzar cambio de contraseña";
$string["forcePasswordDesc"] = "Cambia la contraseña de un usuario manualmente";
$string["forceNick"] = "Forzar cambio de nombre de usuario";
$string["forceNickDesc"] = "Cambia el nombre de un usuario manualmente";
$string["forceChangedPass"] = "¡La contraseña de <b>%s</b> ha sido cambiada exitosamente!";
$string["forceChangedNick"] = "¡El nombre de <b>%s</b> ha sido cambiado exitosamente!";
$string["changePassOrNick"] = "Cambiar nombre/contraseña de un usuario";
// change username
$string["changeNickTitle"] = "Cambiar nombre de usuario";
$string["changedNick"] = "Has cambiado tu nombre de usuario, inicia sesión nuevamente";
$string["wrongNick"] = "Nombre de usuario incorrecto";
$string["sameNick"] = "Los nombres de usuario son iguales";
$string["alreadyUsedNick"] = "Este nombre de usuario ya está en uso";
$string["changeNickDesc"] = "Cambia el nombre de tu cuenta";
$string["oldNick"] = "Nombre actual";
$string["newNick"] = "Nuevo nombre";
$string["password"] = "Contraseña";
// map packs
$string["packCreate"] = "Agregar Map Zone";
$string["packCreateTitle"] = "Crear Map Zone";
$string["packCreateDesc"] = "Crea un Map Zone con recompensas";
$string["packCreateSuccess"] = "Has creado un Map Zone llamado";
$string["packCreateOneMore"] = "Crear otro Map Zone";
$string["packName"] = "Nombre del Map Zone";
$string["color"] = "Color";
$string["sameLevels"] = "Has escogido los mismos niveles";
$string["show"] = "Mostrar";
$string["packChange"] = "Editar Map Zone";
$string["createNewPack"] = "Crea un nuevo Map Zone";
// gauntlets
$string["gauntletCreate"] = "Agregar Capítulo";
$string["gauntletCreateTitle"] = "Crear Capítulo";
$string["gauntletCreateDesc"] = "Crea un Capítulo del lore";
$string["gauntletCreateSuccess"] = "Has creado un Capítulo exitosamente";
$string["gauntletCreateOneMore"] = "Crear otro Capítulo";
$string["chooseLevels"] = "¡Elige los niveles!";
$string["checkbox"] = "Confirmar";
$string["level1"] = "1er nivel";
$string["level2"] = "2do nivel";
$string["level3"] = "3er nivel";
$string["level4"] = "4to nivel";
$string["level5"] = "5to nivel";
$string["gauntletChange"] = "Editar Capítulo";
$string["createNewGauntlet"] = "Crea un nuevo Capítulo";
$string["gauntletCreateSuccessNew"] = 'Has creado el <b>%1$s</b> exitosamente';
$string["gauntletSelectAutomatic"] = "Seleccionar automáticamente";
// quests
$string["addQuest"] = "Crear misión";
$string["addQuestDesc"] = "Crea una misión (quest) con recompensas";
$string["questName"] = "Nombre de la misión";
$string["questAmount"] = "Cantidad requerida";
$string["questReward"] = "Recompensa en diamantes";
$string["questCreate"] = "Agregar";
$string["questsSuccess"] = "Has creado una misión exitosamente";
$string["invalidPost"] = "¡Datos incorrectos!";
$string["fewMoreQuests"] = "Se recomienda crear más misiones";
$string["oneMoreQuest?"] = "Crear otra misión";
$string["changeQuest"] = "Editar misión";
$string["createNewQuest"] = "Crear una nueva misión";
// reupload
$string["levelReupload"] = "Resubir nivel";
$string["levelReuploadDesc"] = "Resube un nivel de otro servidor";
$string["advanced"] = "Opciones avanzadas";
$string["errorConnection"] = "Error de conexión";
$string["levelNotFound"] = "Nivel no encontrado";
$string["robtopLol"] = "RobTop no te quiere :c";
$string["sameServers"] = "El servidor de origen y destino son iguales";
$string["levelReuploaded"] = "¡Nivel resubido! ID del nivel:";
$string["oneMoreLevel?"] = "Resubir otro nivel";
$string["levelAlreadyReuploaded"] = "Este nivel ya fue resubido anteriormente";
$string["server"] = "Servidor";
$string["levelID"] = "ID del nivel";
$string["pageDisabled"] = "Esta sección está deshabilitada";
$string["levelUploadBanned"] = "¡Estás baneado de resubir niveles!";
// acc activation
$string["activateAccount"] = "Activación de cuenta";
$string["activateDesc"] = "Activa tu cuenta para iniciar sesión";
$string["activated"] = "¡Tu cuenta ha sido activada exitosamente!";
$string["alreadyActivated"] = "Tu cuenta ya fue activada anteriormente";
$string["maybeActivate"] = "Quizás no has activado tu cuenta aún";
$string["activate"] = "Activar cuenta";
$string["activateDisabled"] = "La activación de cuenta está deshabilitada";
// mod
$string["addMod"] = "Agregar Moderador";
$string["addModDesc"] = "Asciende un usuario a Moderador";
$string["modYourself"] = "¡Hey, no puedes darte Moderador!";
$string["alreadyMod"] = "Este usuario ya es Moderador";
$string["addedMod"] = "Has ascendido a Moderador al usuario exitosamente";
$string["addModOneMore"] = "Agregar otro Moderador";
$string["modAboveYourRole"] = "No puedes otorgar un rol superior al tuyo";
$string["makeNewMod"] = "Asciende a Moderador a alguien más";
$string["reassignMod"] = "Reasignar Moderador";
$string["reassign"] = "Reasignar";
$string['demotePlayer'] = "Descender usuario";
$string['demotedPlayer'] = "Has descendido a <b>%s</b> exitosamente";
$string['addedModNew'] = "Has ascendido a Moderador a <b>%s</b> exitosamente";
$string['demoted'] = 'Descendido';
// creator points
$string["shareCPTitle"] = "Compartir puntos de creador";
$string["shareCPDesc"] = "Comparte los puntos de un nivel con otro usuario";
$string["shareCP"] = "Compartir";
$string["alreadyShared"] = "Este usuario ya recibió puntos de este nivel anteriormente";
$string["shareToAuthor"] = "No puedes compartirle puntos al creador";
$string["userIsBanned"] = "Este usuario está baneado";
$string["shareCPSuccess"] = "Has compartido puntos de creador exitosamente";
$string["shareCPSuccess2"] = "al usuario";
$string["updateCron"] = "Quizás debas actualizar los puntos de creador";
$string["shareCPOneMore"] = "Compartir más puntos";
$string['shareCPSuccessNew'] = 'Has compartido puntos del nivel <b>%1$s</b> al usuario <b>%2$s</b> exitosamente';
// messenger
$string["messenger"] = "Mensajería";
$string["write"] = "Escribir";
$string["send"] = "Enviar";
$string["noMsgs"] = "Empieza una conversación";
$string["subject"] = "Asunto";
$string["msg"] = "Mensaje";
$string["tooFast"] = "¡Hey, estás escribiendo muy rápido!";
// reupload to server
$string["levelToGD"] = "Transferir nivel a otro servidor";
$string["levelToGDDesc"] = "Resube tu nivel a un servidor externo";
$string["usernameTarget"] = "Nombre de usuario del servidor destino";
$string["passwordTarget"] = "Contraseña del servidor destino";
$string["notYourLevel"] = "¡Este no es tu nivel!";
$string["reuploadFailed"] = "Error al resubir el nivel";
// searching status
$string["search"] = "Buscar";
$string["searchCancel"] = "Cancelar búsqueda";
$string["emptySearch"] = "Sin resultados";
// demonlist
$string["demonlist"] = 'Demonlist';
$string["demonlistRecord"] = 'Récords de <b>%s</b>';
$string["alreadyApproved"] = 'Ya fue aprobado anteriormente';
$string["alreadyDenied"] = 'Ya fue rechazado anteriormente';
$string["approveSuccess"] = 'Has aprobado el récord de <b>%s</b> exitosamente';
$string["denySuccess"] = 'Has rechazado el récord de <b>%s</b> exitosamente';
$string["recordParameters"] = '<b>%s</b> ha completado <b>%s</b> en <b>%d</b> intentos';
$string["approve"] = 'Aprobar';
$string["deny"] = 'Rechazar';
$string["submitRecord"] = 'Enviar récord';
$string["submitRecordForLevel"] = 'Enviar récord para <b>%s</b>';
$string["alreadySubmitted"] = 'Ya has enviado un récord para <b>%s</b> anteriormente';
$string["submitSuccess"] = 'Has enviado un récord para <b>%s</b> exitosamente';
$string["submitRecordDesc"] = 'Envía un récord SOLO si has completado el nivel';
$string["atts"] = 'Intentos';
$string["ytlink"] = 'ID del video de YouTube (dQw4w9WgXcQ)';
$string["submit"] = 'Enviar';
$string["addDemonTitle"] = 'Agregar demon';
$string["addDemon"] = 'Agregar demon a la demonlist';
$string["addedDemon"] = 'Has agregado <b>%s</b> en la posición <b>%d</b>';
$string["addDemonDesc"] = 'Agrega un demon a la demonlist';
$string["place"] = 'Posición';
$string["giveablePoints"] = 'Puntos';
$string["add"] = 'Agregar';
$string["recordApproved"] = 'Récord aprobado';
$string["recordDenied"] = 'Récord rechazado';
$string["recordSubmitted"] = 'Récord enviado';
$string["nooneBeat"] = 'nadie lo ha completado'; //let it be lowercase
$string["oneBeat"] = '1 jugador lo ha completado'; 
$string["lower5Beat"] = '%d jugadores lo han completado'; // russian syntax, sorry
$string["above5Beat"] = '%d jugadores lo han completado'; 
$string["demonlistLevel"] = '%s <text class="dltext">por <button type="button" onclick="a(\'profile/%3$s\', true, true)" style="font-size:25px" class="accbtn" name="accountID" value="%d">%s</button></text>';
$string["noDemons"] = 'Parece que la demonlist está vacía...';
$string["addSomeDemons"] = 'Agrega demons para llenar la demonlist';
$string["askForDemons"] = 'Solicita a un Moderador que agregue demons';
$string["recordList"] = 'Lista de récords';
$string["status"] = 'Estado';
$string["checkRecord"] = 'Verificar récord';
$string["record"] = 'Récord';
$string["recordDeleted"] = 'El récord ha sido eliminado';
$string["changeDemon"] = 'Cambiar demon';
$string["demonDeleted"] = 'El demon ha sido eliminado de la demonlist';
$string["changedDemon"] = 'Has movido <b>%s</b> a la posición <b>%d</b>';
$string["changeDemonDesc"] = 'Cambia la posición de un demon<br>
Si quieres quitar un demon, coloca la posición en 0';
// email verification
$string["didntActivatedEmail"] = '¡No has activado tu cuenta a través de email!';
$string["checkMail"] = 'Revisa tu correo...';
// fav songs
$string["likeSong"] = "Agregar a favoritos";
$string["dislikeSong"] = "Quitar de favoritos";
$string["favouriteSongs"] = "Canciones favoritas";
$string["howMuchLiked"] = "¿A cuántos les ha gustado?"; // unused string
$string["nooneLiked"] = "A nadie le ha gustado"; // unused string
// clans
$string["clan"] = "Clan";
$string["joinedAt"] = "Fecha de unión: <b>%s</b>";
$string["createdAt"] = "Fecha de creación: <b>%s</b>";
$string["clanMembers"] = "Miembros del clan";
$string["noMembers"] = "Sin miembros";
$string["clanOwner"] = "Dueño del clan";
$string["noClanDesc"] = "<i>Sin descripción</i>";
$string["noClan"] = "Clan no encontrado";
$string["clanName"] = "Nombre del clan";
$string["clanTag"] = "Etiqueta del clan (3-5 caracteres)";
$string["clanDesc"] = "Descripción del clan";
$string["clanColor"] = "Color del clan";
$string["dangerZone"] = "Zona de peligro";
$string["giveClan"] = "Transferir propiedad";
$string["deleteClan"] = "Eliminar clan";
$string["goBack"] = "Volver";
$string["areYouSure"] = "¿Estás seguro?";
$string["giveClanDesc"] = "Transfiere la propiedad del clan a otro miembro";
$string["notInYourClan"] = "Este miembro no está en tu clan";
$string["givedClan"] = "Has transferido tu clan a <b>%s</b> exitosamente";
$string["deletedClan"] = "Has eliminado el clan <b>%s</b>";
$string["deleteClanDesc"] = "Elimina el clan de forma permanente";
$string["yourClan"] = "Tu clan";
$string["members0"] = "<b>1</b> miembro";
$string["members1"] = "<b>%d</b> miembros"; 
$string["members2"] = "<b>%d</b> miembros"; 
$string["noRequests"] = "Sin solicitudes aún";
$string["pendingRequests"] = "Solicitudes del clan";
$string["closedClan"] = "Clan privado";
$string["kickMember"] = "Expulsar miembro";
$string["leaveFromClan"] = "Abandonar clan";
$string["askToJoin"] = "Enviar solicitud de unión";
$string["removeClanRequest"] = "Rechazar solicitud de unión";
$string["joinClan"] = "Unirse al clan";
$string["noClans"] = "Aún no hay clanes";
$string["clans"] = "Clanes";
$string["alreadyInClan"] = "Ya formas parte de un clan";
$string["createClan"] = "Crear clan";
$string["createdClan"] = "Has creado un clan exitosamente <span style='font-weight:700;color:#%s'>%s</span>";
$string["createClanDesc"] = "Crea un clan";
$string["create"] = "Crear clan";
$string["mainSettings"] = "Ajustes principales";
$string["takenClanName"] = "Este nombre de clan ya está en uso";
$string["takenClanTag"] = "Esta etiqueta de clan ya está en uso";
// idk
$string["suggestedName"] = '<button type="button" onclick="a(\'profile/%1$s\', true, true)" class="accbtn" name="accountID">%1$s</button><text class="dltext"> ha sugerido <b>%4$s%3$s</b> para</text><text class="levelname">%2$s</text>'; // %1$s - Mod username, %2$s - level name, %3$s - x stars, %4$s - Featured/Epic (%4$s%3$s - Featured, x stars)
$string["reportedName"] = '%1$s<text class="dltext"> ha reportado</text><text class="levelname">%2$s</text>';
// lists
$string['listTable'] = "Listas";
$string['listTableMod'] = "Listas ocultas";
$string['listTableYour'] = "Tus listas ocultas";
// Forgot password tool
$string['forgotPasswordChangeTitle'] = "Cambiar contraseña";
$string["successfullyChangedPass"] = "Has cambiado tu contraseña exitosamente";
$string['forgotPasswordTitle'] = "¿Has olvidado tu contraseña?";
$string['maybeSentAMessage'] = "Te enviaremos un correo si esta cuenta existe";
$string['forgotPasswordDesc'] = "Solicita un enlace para cambiar tu contraseña si la olvidaste";
$string['forgotPasswordButton'] = "Recuperar contraseña";
// SFX
$string['sfxAdd'] = "Agregar efectos de sonido";
$string["sfxAddError-5"] = "El tamaño del efecto de sonido excede los $sfxSize mb";
$string["sfxAddError-6"] = "Algo salió mal al subir el efecto de sonido";
$string["sfxAddError-7"] = "¡Solo puedes subir audios!";
$string['sfxAdded'] = '¡Efecto de sonido subido!';
$string['yourNewSFX'] = "Echa un vistazo a tu nuevo efecto de sonido";
$string["sfxAddAnotherBTN"] = "Subir otro efecto";
$string["sfxAddDesc"] = "Agrega un nuevo efecto de sonido a la librería del servidor";
$string["chooseSFX"] = "Seleccionar efecto de sonido";
$string["sfxAddNameFieldPlaceholder"] = "Nombre del efecto";
$string['sfxs'] = 'Efectos de sonidos';
$string['sfxID'] = 'ID del efecto';
$string['manageSFX'] = 'Administrar efectos de sonido';

$string['featureLevel'] = 'Calificar nivel';

$string['banList'] = 'Usuarios baneados';
$string['expires'] = 'Expira en';
$string['unbanPerson'] = 'Desbanear';
$string['IP'] = 'Dirección IP';
$string['noBanInPast'] = 'No puedes banear hasta un tiempo pasado';
$string['banSuccess'] = 'Has baneado exitosamente a <b>%1$s</b> hasta <b>%3$s</b> en «<b>%2$s</b>»';
$string['person'] = 'Usuario';
$string['youAreBanned'] = 'Has sido baneado hasta <b>%2$s</b> por la razón:<br><b>%1$s</b>';
$string['banChange'] = 'Modificar';
$string['system'] = 'Sistema';
// REUPLOAD
$string["reuploadBTN"] = "Subir";
$string["errorGeneric"] = "¡Ha ocurrido un error!";
$string["smthWentWrong"] = "Algo salió mal";
$string["tryAgainBTN"] = "Volver a intentar";
//songAdd.php
$string["songAddDesc"] = "Agrega una canción a la librería del servidor";
$string["songAddUrlFieldLabel"] = "URL de la canción: (solo enlaces directos o de Dropbox)";
$string["songAddUrlFieldPlaceholder"] = "URL de la canción";
$string["songAddNameFieldPlaceholder"] = "Nombre de la canción";
$string["songAddAuthorFieldPlaceholder"] = "Autor";
$string["songAddButton"] = "Elegir canción";
$string["songAddAnotherBTN"] = "Subir otra canción";
$string["songAdded"] = "¡Canción subida!";
$string["deletedSong"] = "Has eliminado la canción exitosamente";
$string["renamedSong"] = "Has renombrado la canción como";
$string["songID"] = "ID de la canción: ";
$string["songIDw"] = "ID de la canción";
$string["songAuthor"] = "Autor";
$string["size"] = "Tamaño";
$string["delete"] = "Eliminar";
$string["change"] = "Cambiar";
$string["chooseFile"] = "Seleccionar canción";
$string['yourNewSong'] = "Echa un vistazo a tu nueva canción";
// errors
$string["songAddError-2"] = "La URL no es válida";
$string["songAddError-3"] = "Esta canción ya fue subida con la ID:";
$string["songAddError-4"] = "Esta canción no se puede subir";
$string["songAddError-5"] = "El tamaño de la canción excede los $songSize mb";
$string["songAddError-6"] = "Algo salió mal al subir la canción :с";
$string["songAddError-7"] = "¡Solo puedes subir audios!";
// error messages
$string[400] = "¡Solicitud incorrecta!";
$string["400!"] = "Verifique los controladores de su hardware de red";
$string[403] = "¡Prohibido!";
$string["403!"] = "No tienes acceso a esta página";
$string[404] = "¡Página no encontrada!";
$string["404!"] = "¿Seguro que escribiste la URL correctamente?";
$string[500] = "¡Error interno del servidor!";
$string["500!"] = "El programador cometió un error en el código,</br>
por favor reporta este problema aquí:</br>
https://github.com/Cvolton/GMDprivateServer/pull/883";
$string[502] = "¡Servidor caído!";
$string["502!"] = "La carga en el servidor es demasiado grande.</br>
Vuelve a intentarlo dentro de algunas horas";
// captcha
$string["invalidCaptcha"] = "¡Respuesta captcha inválida!";
$string["page"] = "Página";
$string["emptyPage"] = "Esta página está vacía";
// STATS
$string["ID"] = "ID";
$string["orbs"] = "Orbes";
$string["stars"] = "Estrellas";
$string["coins"] = "Coins";
$string["accounts"] = "Cuentas";
$string["levels"] = "Niveles";
$string["songs"] = "Canciones";
$string["author"] = "Creador";
$string["name"] = "Nombre";
$string["date"] = "Fecha";
$string["type"] = "Tipo";
$string["reportCount"] = "Número de reportes";
$string["reportMod"] = "Reportes";
$string["username"] = "Nombre de usuario";
$string["accountID"] = "ID de la cuenta";
$string["registerDate"] = "Fecha de registro";
$string["levelAuthor"] = "Autor del nivel";
$string["isAdmin"] = "Rol en el servidor";
$string["isAdminYes"] = "Si";
$string["isAdminNo"] = "No";
$string["userCoins"] = "User coins";
$string["time"] = "Tiempo";
$string["deletedLevel"] = "Nivel eliminado";
$string["mod"] = "Moderador";
$string["count"] = "Cantidad de acciones";
$string["ratedLevels"] = "Niveles rateados";
$string["lastSeen"] = "Última vez en línea";
$string["level"] = "Nivel";
$string["pageInfo"] = "Página %s de %s";
$string["first"] = "Primer";
$string["previous"] = "Anterior";
$string["next"] = "Siguiente";
$string["never"] = "Sin registro";
$string["last"] = "Último";
$string["go"] = "Ir";
$string["levelid"] = "ID del nivel";
$string["levelname"] = "Nombre del nivel";
$string["leveldesc"] = "Descripción del nivel";
$string["noDesc"] = "Sin descripción";
$string["levelpass"] = "Contraseña";
$string["nopass"] = "Sin contraseña";
$string["unrated"] = "Sin rate";
$string["rate"] = "Rate";
$string["stats"] = "Estadísticas";
$string["suggestFeatured"] = "¿Featured?";
$string["whoAdded"] = "¿Quién lo otorgó?";
$string["moons"] = "Lunas";
//modActionsList
$string["banDesc"] = "Banea a un usuario";
$string["playerTop"] = 'Top de jugadores';
$string["creatorTop"] = 'Top de creadores';
$string["levelUploading"] = 'Subir niveles';
$string["successfullyBanned"] = '<b>%1$s</b> (ID: <b>%2$s</b>) ha sido baneado exitosamente';
$string["successfullyUnbanned"] = '<b>%1$s</b> (ID: <b>%2$s</b>) ha sido desbaneado exitosamente';
$string["commentBan"] = 'Comentar';
// mod badges
$string["admin"] = "Administrador";
$string["elder"] = "Elder Mod";
$string["moder"] = "Moderador";
$string["player"] = "Usuario";
// variables
$string["starsLevel2"] = "estrellas";
$string["starsLevel1"] = "estrellas";
$string["starsLevel0"] = "estrella";
$string["coins2"] = "coins";
$string["coins1"] = "coins";
$string["coins0"] = "coin";
$string["time0"] = "vez";
$string["time1"] = "veces";
$string["times"] = "veces";
$string["action0"] = "acción";
$string["action1"] = "acciones";
$string["action2"] = "acciones";
$string["lvl0"] = "nivel";
$string["lvl1"] = "niveles";
$string["lvl2"] = "niveles";
$string["player0"] = "jugador";
$string["player1"] = "jugadores";
$string["player2"] = "jugadores";
$string["unban"] = "Desbaneado";
$string["isBan"] = "Baneado";
// nothing
$string["noCoins"] = "Sin coins";
$string["noReason"] = "Sin razón";
$string["noActions"] = "Sin acciones";
$string["noRates"] = "Sin rates";
// future?
$string["future"] = "Futuro";
// ban & mod actions
$string["spoiler"] = "Mostrar";
$string["accid"] = "con la ID de cuenta";
$string["banned"] = "fue baneado exitosamente";
$string["unbanned"] = "fue desbaneado exitosamente";
$string["ban"] = "Banear";
$string["nothingFound"] = "Usuario no encontrado";
$string["banUserID"] = "Nombre o ID del usuario";
$string["banUserPlace"] = "Banear un usuario";
$string["banYourself"] = "¡No puedes banearte!"; 
$string["banYourSelfBtn!"] = "Banea a alguien más";
$string["banReason"] = "Razón del ban";
$string["action"] = "Acción";
$string["value"] = "1er valor";
$string["value2"] = "2do valor";
$string["value3"] = "3er valor";
$string["modAction1"] = "Nivel rateado";
$string["modAction2"] = "Nivel featured";
$string["modAction3"] = "Coins verificadas";
$string["modAction4"] = "Epic";
$string["modAction5"] = "Daily agregado";
$string["modAction6"] = "Nivel eliminado";
$string["modAction7"] = "Cambio de creador";
$string["modAction8"] = "Nivel renombrado";
$string["modAction9"] = "Contraseña cambiada";
$string["modAction10"] = "Demon cambiado";
$string["modAction11"] = "Puntos de creador compartidos";
$string["modAction12"] = "Nivel público";
$string["modAction13"] = "Descripción de nivel cambiada";
$string["modAction14"] = "LDM";
$string["modAction15"] = "Ban del top";
$string["modAction16"] = "ID de canción cambiada";
$string["modAction17"] = "Map Pack creado";
$string["modAction18"] = "Gauntlet creado";
$string["modAction19"] = "Canción cambiada";
$string["modAction20"] = "Ascendido un usuario a Moderador";
$string["modAction21"] = "Map Pack editado";
$string["modAction22"] = "Gauntlet editado";
$string["modAction23"] = "Misión editada";
$string["modAction24"] = "Usuario reasignado";
$string["modAction25"] = "Misión creada";
$string["modAction26"] = "Nombre/contraseña de usuario cambiada";
$string["modAction27"] = "Efecto de sonido cambiado";
$string["modAction28"] = "Usuario baneado";
$string["modAction30"] = "Lista rateada";
$string["modAction31"] = "Lista enviada";
$string["modAction32"] = "Lista featured";
$string["modAction33"] = "Lista pública";
$string["modAction34"] = "Lista eliminada";
$string["modAction35"] = "Creador de lista cambiado";
$string["modAction36"] = "Nombre de lista cambiado";
$string["modAction37"] = " Descripción de lista cambiada";
$string["everyActions"] = "Cualquier acción";
$string["everyMod"] = "Todos los moderadores";
$string["Kish!"] = "¡Atrás!";
$string["noPermission"] = "Permisos insuficientes";
$string["noLogin?"] = "No has iniciado sesión en tu cuenta";
$string["LoginBtn"] = "Inicia sesión en tu cuenta";
$string["dashboard"] = "Volver al panel";
$string["userID"] = 'ID del usuario';
// errors
$string["errorNoAccWithPerm"] = "Error: No se han encontrado cuentas con el permiso '%s'";
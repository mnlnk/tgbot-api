## Список доступных методов ([6.1](https://core.telegram.org/bots/api#june-20-2022))

(*) - Методы отмеченные звездочкой, отсутствуют в нативном API Telegram.

#### Обновления
+ [**`getUpdates()`**](https://core.telegram.org/bots/api#getupdates) - Получает обновления.
+ [**`setWebhook()`**](https://core.telegram.org/bots/api#setwebhook) - Устанавливает Webhook.
+ [**`deleteWebhook()`**](https://core.telegram.org/bots/api#deletewebhook) - Удаляет Webhook.
+ [**`getWebhookInfo()`**](https://core.telegram.org/bots/api#getwebhookinfo) - Получает информацию о текущем статусе Webhook.

#### Сообщения
+ [**`sendMessage()`**](https://core.telegram.org/bots/api#sendmessage) - Отправляет текстовое сообщение.
+ [**`editMessageText()`**](https://core.telegram.org/bots/api#editmessagetext) - Редактирует текстовое или игровое сообщение.
+ [**`sendAudio()`**](https://core.telegram.org/bots/api#sendaudio) - Отправляет аудиофайл.
+ [**`sendAnimation()`**](https://core.telegram.org/bots/api#sendanimation) - Отправляет анимацию.
+ [**`sendVideo()`**](https://core.telegram.org/bots/api#sendvideo) - Отправляет видео.
+ [**`sendContact()`**](https://core.telegram.org/bots/api#sendcontact) - Отправляет контакт.
+ [**`sendDice()`**](https://core.telegram.org/bots/api#senddice) - Отправляет игральную кость.
+ [**`sendDocument()`**](https://core.telegram.org/bots/api#senddocument) - Отправляет файл.
+ [**`sendGame()`**](https://core.telegram.org/bots/api#sendgame) - Отправляет игру.
+ [**`sendInvoice()`**](https://core.telegram.org/bots/api#sendinvoice) - Отправляет счет.
+ [**`sendLocation()`**](https://core.telegram.org/bots/api#sendlocation) - Отправляет местоположение.
+ [**`editMessageLiveLocation()`**](https://core.telegram.org/bots/api#editmessagelivelocation) - Редактирует сообщение о местоположении в реальном времени.
+ [**`stopMessageLiveLocation()`**](https://core.telegram.org/bots/api#stopmessagelivelocation) - Останавливает обновление сообщения о текущем местоположении.
+ [**`sendMediaGroup()`**](https://core.telegram.org/bots/api#sendmediagroup) - Отправляет группу фотографий или видео в виде альбома. 
+ [**`sendPhoto()`**](https://core.telegram.org/bots/api#sendphoto) - Отправляет фотографию.
+ [**`sendPoll()`**](https://core.telegram.org/bots/api#sendpoll) - Отправляет опрос.
+ [**`stopPoll()`**](https://core.telegram.org/bots/api#stoppoll) - Останавливает отправленный ранее опрос.
+ [**`sendSticker()`**](https://core.telegram.org/bots/api#sendsticker) - Отправляет стикер.
+ [**`sendVenue()`**](https://core.telegram.org/bots/api#sendvenue) - Отправляет место встречи.
+ [**`sendVideoNote()`**](https://core.telegram.org/bots/api#sendvideonote) - Отправляет видеозаметку.
+ [**`sendVoice()`**](https://core.telegram.org/bots/api#sendvoice) - Отправляет голосовую заметку.
+ [**`editMessageMedia()`**](https://core.telegram.org/bots/api#editmessagemedia) - Редактирует мультимедийное сообщение.
+ [**`copyMessage()`**](https://core.telegram.org/bots/api#copymessage) - Копирует сообщение.
+ [**`forwardMessage()`**](https://core.telegram.org/bots/api#forwardmessage) - Пересылает сообщение.
+ [**`deleteMessage()`**](https://core.telegram.org/bots/api#deletemessage) - Удаляет сообщение, включая служебные.
+ [**`editMessageCaption()`**](https://core.telegram.org/bots/api#editmessagecaption) - Редактирует подпись сообщения.
+ [**`editMessageReplyMarkup()`**](https://core.telegram.org/bots/api#editmessagereplymarkup) - Редактирует клавиатуру сообщения.

#### Чаты
+ [**`getChat()`**](https://core.telegram.org/bots/api#getchat) - Получает основную информацию о чате.
+ [**`setChatTitle()`**](https://core.telegram.org/bots/api#setchattitle) - Устанавливает заголовок чата.
+ [**`setChatPhoto()`**](https://core.telegram.org/bots/api#setchatphoto) - Устанавливает фотографию чата.
+ [**`deleteChatPhoto()`**](https://core.telegram.org/bots/api#deletechatphoto) - Удаляет фотографию чата.
+ [**`setChatDescription()`**](https://core.telegram.org/bots/api#setchatdescription) - Устанавливает описание группы, супергруппы или канала.
+ [**`setChatPermissions()`**](https://core.telegram.org/bots/api#setchatpermissions) - Устанавливает разрешения по умолчанию для всех участников.
+ [**`getChatMember()`**](https://core.telegram.org/bots/api#getchatmember) - Получает информацию об участнике чата.
+ [**`getChatAdministrators()`**](https://core.telegram.org/bots/api#getchatadministrators) - Получает список администраторов чата.
+ [**`setChatAdministratorCustomTitle()`**](https://core.telegram.org/bots/api#setchatadministratorcustomtitle) - Устанавливает заголовок для администратора в супергруппе.
+ [**`setChatMenuButton()`**](https://core.telegram.org/bots/api#setchatmenubutton) - Изменяет кнопку меню бота или кнопку меню по умолчанию.
+ [**`getChatMenuButton()`**](https://core.telegram.org/bots/api#getchatmenubutton) - Получает текущее значение кнопки меню бота.
+ [**`getChatMemberCount()`**](https://core.telegram.org/bots/api#getchatmembercount) - Получает количество участников в чате.
+ [**`restrictChatMember()`**](https://core.telegram.org/bots/api#restrictchatmember) - Ограничивает пользователя в супергруппе.
+ [**`promoteChatMember()`**](https://core.telegram.org/bots/api#promotechatmember) - Продвигает или понижает пользователя в супергруппе или канале.
+ [**`banChatMember()`**](https://core.telegram.org/bots/api#banchatmember) - Блокирует и удаляет пользователя из группы, супергруппы или канала.
+ [**`unbanChatMember()`**](https://core.telegram.org/bots/api#unbanchatmember) - Разблокирует ранее удаленного пользователя в супергруппе или канале.
+ [**`banChatSenderChat()`**](https://core.telegram.org/bots/api#banchatsenderchat) - Блокирует канальный чат в супергруппе или на канале.
+ [**`unbanChatSenderChat()`**](https://core.telegram.org/bots/api#unbanchatsenderchat) - Разблокирует канальный чат в супергруппе или на канале.
+ [**`sendChatAction()`**](https://core.telegram.org/bots/api#sendchataction) - Сообщает пользователю, что что-то происходит на стороне бота.
+ [**`pinChatMessage()`**](https://core.telegram.org/bots/api#pinchatmessage) - Закрепляет сообщение в чате.
+ [**`unpinChatMessage()`**](https://core.telegram.org/bots/api#unpinchatmessage) - Открепляет закрепленное сообщение в чате.
+ [**`unpinAllChatMessages()`**](https://core.telegram.org/bots/api#unpinallchatmessages) - Очищает список закрепленных сообщений в чате.
+ [**`createChatInviteLink()`**](https://core.telegram.org/bots/api#createchatinvitelink) - Создает дополнительную ссылку для приглашения в чат.
+ [**`editChatInviteLink()`**](https://core.telegram.org/bots/api#editchatinvitelink) - Редактирует дополнительную пригласительную ссылку.
+ [**`exportChatInviteLink()`**](https://core.telegram.org/bots/api#exportchatinvitelink) - Создает новую ссылку для приглашения в чат.
+ [**`revokeChatInviteLink()`**](https://core.telegram.org/bots/api#revokechatinvitelink) - Отзывает дополнительную пригласительную ссылку.
+ [**`approveChatJoinRequest()`**](https://core.telegram.org/bots/api#approvechatjoinrequest) - Одобряет запрос на присоединение пользователя к чату.
+ [**`declineChatJoinRequest()`**](https://core.telegram.org/bots/api#declinechatjoinrequest) - Отклоняет запрос на присоединение пользователя к чату.
+ [**`leaveChat()`**](https://core.telegram.org/bots/api#leavechat) - Выходит из группы, супергруппы или канала.

#### Стикеры
+ [**`createNewStickerSet()`**](https://core.telegram.org/bots/api#createnewstickerset) - Создает новый набор стикеров.
+ [**`addStickerToSet()`**](https://core.telegram.org/bots/api#addstickertoset) - Добавляет новый стикер в набор.
+ [**`deleteStickerFromSet()`**](https://core.telegram.org/bots/api#deletestickerfromset) - Удаляет стикер из набора.
+ [**`getStickerSet()`**](https://core.telegram.org/bots/api#getstickerset) - Получает набор стикеров.
+ [**`setStickerPositionInSet()`**](https://core.telegram.org/bots/api#setstickerpositioninset) - Устанавливает позицию стикера в наборе.
+ [**`setStickerSetThumb()`**](https://core.telegram.org/bots/api#setstickersetthumb) - Устанавливает миниатюру для набора стикеров. 
+ [**`uploadStickerFile()`**](https://core.telegram.org/bots/api#uploadstickerfile) - Загружает файл стикера.
+ [**`setChatStickerSet()`**](https://core.telegram.org/bots/api#setchatstickerset) - Устанавливает новый набор стикеров для группы или супергруппы.
+ [**`deleteChatStickerSet()`**](https://core.telegram.org/bots/api#deletechatstickerset) - Удаляет набор стикеров для группы или супергруппы.

#### Запросы
+ [**`answerCallbackQuery()`**](https://core.telegram.org/bots/api#answercallbackquery) - Отправляет ответ на запрос обратного вызова.
+ [**`answerInlineQuery()`**](https://core.telegram.org/bots/api#answerinlinequery) - Отправляет ответ на встроенный запрос.
+ [**`answerWebAppQuery()`**](https://core.telegram.org/bots/api#answerwebappquery) - Отправляет сообщение о результате взаимодействия с веб-приложением.
+ [**`answerPreCheckoutQuery()`**](https://core.telegram.org/bots/api#answerprecheckoutquery) - Отправляет ответ на запросы предварительной проверки. 
+ [**`answerShippingQuery()`**](https://core.telegram.org/bots/api#answershippingquery) - Отправляет ответ на запросы доставки.

#### Игры
+ [**`getGameHighScores()`**](https://core.telegram.org/bots/api#getgamehighscores) - Получает данные из таблицы рекордов.
+ [**`setGameScore()`**](https://core.telegram.org/bots/api#setgamescore) - Устанавливает счет пользователя в игре.

#### Разное

+ [**`getFile()`**](https://core.telegram.org/bots/api#getfile) - Получает основную информацию о файле и подготавливает его к загрузке.
+ [**`getMe()`**](https://core.telegram.org/bots/api#getme) - Получает основную информацию о боте.
+ [**`getUserProfilePhotos()`**](https://core.telegram.org/bots/api#getuserprofilephotos) - Получает список изображений профиля пользователя.
+ [**`getMyCommands()`**](https://core.telegram.org/bots/api#getmycommands) - Получает список команд бота.
+ [**`setMyCommands()`**](https://core.telegram.org/bots/api#setmycommands) - Устанавливает список команд бота.
+ [**`deleteMyCommands()`**](https://core.telegram.org/bots/api#deletemycommands) - Удаляет список команд бота.
+ [**`getMyDefaultAdministratorRights()`**](https://core.telegram.org/bots/api#getmydefaultadministratorrights) - Получает текущие права администратора по умолчанию для бота.
+ [**`setMyDefaultAdministratorRights()`**](https://core.telegram.org/bots/api#setmydefaultadministratorrights) - Устанавливает права администратора по умолчанию, запрашиваемые ботом.
+ [**`setPassportDataErrors()`**](https://core.telegram.org/bots/api#setpassportdataerrors) - Сообщает пользователю, об ошибках в Телеграм паспорт.
+ [**`createInvoiceLink()`**](https://core.telegram.org/bots/api#createinvoicelink) - Создает ссылку для счета-фактуры.
+ [**`logOut()`**](https://core.telegram.org/bots/api#logout) - Бот выходит с облачного сервера API бота перед локальным запуском бота.
+ [**`close()`**](https://core.telegram.org/bots/api#close) - Закрывает экземпляр бота перед перемещением его с одного локального сервера на другой.
+ **`getFileUrl()`** - * Получает ссылку на подготовленный к загрузке файл.

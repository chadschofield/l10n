<?php
$lang['Import_template'] = "Импорт шаблона";
$lang['upload_csv'] = "Загрузить файл CSV";
$lang['Properties'] = "Свойства";
$lang['Property'] = "Свойство";
$lang['Required'] = "Обязательно";
$lang['Description'] = "Описание";
$lang['Example'] = "Пример: %s";
$lang['Default'] = "По умолчанию: %s";
$lang['Max_length'] = "Максимальная длина: %s";
$lang['import_msg1'] = "Следующие столбцы отсутствуют или не на своих местах: %s";
$lang['io_msg1'] = "Файл заказов включает строку заголовка и повторяющиеся заказы под ней. Файлы всегда должны включать строку заголовка. Заказы с несколькими позициями должны использовать одинаковые  <code>идентификаторы</code> в первом столбце. Загрузите <a href='%s'>Шаблон заказов</a>, чтобы использовать его в качестве примера.";
$lang['io_id'] = "Инкрементная числовая ссылка используется для объединения нескольких позиций/строк вместе для одного заказа при импорте, подобно идентификатору заказа. Она не сохраняется и может быть повторно использована при импорте в будущем.";
$lang['io_shop.id'] = "Идентификатор магазина, к которому принадлежит эта складская учетная единица.";
$lang['io_shop.order_id'] = "Уникальный идентификатор заказа для магазина, при наличии.";
$lang['io_partial'] = "Должен ли этот заказ частично выполняться в том случае, если продукта нет в наличии. Используются следующие значения: 1 (да) или 0 (нет).";
$lang['io_status'] = "Задать статус заказа. Значения На рассмотрении или В обработке.";
$lang['io_service'] = "The preferred shipping service.";
$lang['io_company'] = "Название компании клиента.";
$lang['io_name'] = "Полное имя клиента.";
$lang['io_phone'] = "Номер телефона клиента.";
$lang['io_email'] = "Адрес электронной почты клиента.";
$lang['io_street1'] = "Почтовый адрес клиента.";
$lang['io_street2'] = "Продолжение почтового адреса клиента, например номер дома, квартиры или апартаментов.";
$lang['io_city'] = "Город клиента.";
$lang['io_province'] = "Код провинции или штата клиента.";
$lang['io_postal'] = "Почтовый индекс клиента.";
$lang['io_country'] = "Код страны клиента.";
$lang['io_sku'] = "Складская учетная единица продукта, принадлежащего магазину.";
$lang['io_quantity'] = "Количество позиций для складской учетной единицы этого продукта в заказе.";
$lang['ip_msg1'] = "Каждое свойство представляет собой столбец в первой строке (заголовок) в файле. Файлы всегда должны включать строку заголовка. Значения должны разделяться запятой.";
$lang['ip_msg2'] = "Используйте этот процесс для добавления новых продуктов и складских учетных единиц или для редактирования существующих продуктов и их складских учетных единиц.";
$lang['ip_id'] = "Уникальный идентификатор продукта. Требуется при редактировании или добавлении складской учетной единицы к существующему продукту.";
$lang['ip_name'] = "Название продукта.";
$lang['ip_shop.id'] = "Идентификатор магазина, к которому принадлежит данная складская учетная единица. Требуется при добавлении новой складской учетной единицы.";
$lang['ip_sku'] = "Новая или оригинальная складская учетная единица для этого магазина. Требуется при добавлении новой складской учетной единицы.";
$lang['ip_sku2'] = "Измененная складская учетная единица для этого магазина. Требуется при редактировании оригинальной складской учетной единицы.";
$lang['ip_customs'] = "Краткое описание продукта для таможенного оформления.";
$lang['ip_value'] = "Стоимость продукта в долларах США.";
$lang['ip_cost'] = "The cost value of the product in USD for insurance claims.";
$lang['ip_coo'] = "Страна производства.";
$lang['ip_hscode'] = "Код по ГС, если применимо.";
$lang['ip_dgcode'] = "Номер опасного груза, если применимо.";
$lang['ip_req'] = "Требуется при добавлении или редактировании продукта.";
$lang['ip_desc_lang'] = "Описание продукта на %s.";
$lang['ii_msg1'] = "Используйте этот процесс для добавления входящей поставки.";
$lang['ii_whid'] = "Идентификатор склада. Это значение должно быть одинаковым во всех строках.";
$lang['ii_pid'] = "Уникальный идентификатор продукта.";
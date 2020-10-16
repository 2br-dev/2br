<?php

declare(strict_types=1);

namespace Fastest\Core;

// https://habrahabr.ru/post/351890/

// GET: этот метод является безопасным и идемпотентным. Обычно используется для извлечения информации и не имеет побочных эффектов.
// POST: этот метод не является ни безопасным, ни идемпотентным. Этот метод наиболее широко используется для создания ресурсов.
// PUT: этот метод является идемпотентным. Вот почему лучше использовать этот метод вместо POST для обновления ресурсов. Избегайте использования POST для обновления ресурсов.
// DELETE: как следует из названия, этот метод используется для удаления ресурсов. Но этот метод не является идемпотентным для всех запросов.
// OPTIONS: этот метод не используется для каких-либо манипуляций с ресурсами. Но он полезен, когда клиент не знает других методов, поддерживаемых для ресурса, и используя этот метод, клиент может получить различное представление ресурса.
// HEAD: этот метод используется для запроса ресурса c сервера. Он очень похож на метод GET, но HEAD должен отправлять запрос и получать ответ только в заголовке. Согласно спецификации HTTP, этот метод не должен использовать тело для запроса и ответа.

// 200 OK — это ответ на успешные GET, PUT, PATCH или DELETE. Этот код также используется для POST, который не приводит к созданию.
// 201 Created — этот код состояния является ответом на POST, который приводит к созданию.
// 204 Нет содержимого. Это ответ на успешный запрос, который не будет возвращать тело (например, запрос DELETE)
// 304 Not Modified — используйте этот код состояния, когда заголовки HTTP-кеширования находятся в работе
// 400 Bad Request — этот код состояния указывает, что запрос искажен, например, если тело не может быть проанализировано
// 401 Unauthorized — Если не указаны или недействительны данные аутентификации. Также полезно активировать всплывающее окно auth, если приложение используется из браузера
// 403 Forbidden — когда аутентификация прошла успешно, но аутентифицированный пользователь не имеет доступа к ресурсу
// 404 Not found — если запрашивается несуществующий ресурс
// 405 Method Not Allowed — когда запрашивается HTTP-метод, который не разрешен для аутентифицированного пользователя
// 410 Gone — этот код состояния указывает, что ресурс в этой конечной точке больше не доступен. Полезно в качестве защитного ответа для старых версий API
// 415 Unsupported Media Type. Если в качестве части запроса был указан неправильный тип содержимого
// 422 Unprocessable Entity — используется для проверки ошибок
// 429 Too Many Requests — когда запрос отклоняется из-за ограничения скорости

class Api extends \Fastest\Core\Init
{
    public function __construct()
    {
        exit(__('api'));

        parent::__construct();
    }

    public function response()
    {
        $this->headers[] = 'Content-Type: application/json';

        header('Content-Type: application/json');

        return json_encode($response, 64 | 256);
    }
}
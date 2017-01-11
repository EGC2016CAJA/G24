<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="localhost/egc/public/api",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="API G24 (OAuth2)",
 *         description="API desarrollada para la gestion de usuarios, encuestas, opciones y votos. <h2>Pasos previos:</h2><ol><li>Realizar una peticion POST a 'http://localhost/egc/public/oauth/token' con los siguientes parametros: <ul><li><strong>username: </strong>demo@demo.net</li><li><strong>password: </strong>secret</li><li><strong>client_secret: </strong>namG6cYI533EG5vEVi9GoGudHqhh3UIaYu1TOFpX</li><li><strong>grant_type: </strong>password</li><li><strong>scope: </strong>*</li><li><strong>client_id: </strong>1</li></ul></li><li>Añadir el token obtenido al campo de texto de la parte superior con el siguiente esquema: <strong>Bearer {access_token}</strong>.</li><li>Hacer click en <strong>Autorizar acceso</strong></li></ol>",
 *         @SWG\Contact(name="", url=""),
 *     ),
 *     @SWG\SecurityScheme(
 *         securityDefinition="X-Api-Token",
 *         type="apiKey",
 *         in="header",
 *         name="api-key"
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 *
 * )
 */
class ApiController extends Controller
{
    //
}

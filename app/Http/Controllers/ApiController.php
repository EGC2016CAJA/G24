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
 *         title="Sample API",
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

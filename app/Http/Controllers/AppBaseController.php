<?php

namespace App\Http\Controllers;

use App\Models\User;
use InfyOm\Generator\Utils\ResponseUtil;

/**
 * @OA\Server(url="/api")
 * @OA\Info(
 *   title="InfyOm Laravel Generator APIs",
 *   version="1.0.0"
 * )
 * This class should be parent class for other API controllers
 * Class AppBaseController
 */
class AppBaseController extends Controller
{


    public function callAction($method, $parameters)
    {

        $controller = class_basename(get_class($this));
        $action = $method;
        $model = str_replace('Controller', '', $controller);
        $modelPath = 'App\\Models\\'.$model; 
        $permissions = $action . '-' . $model; 
        $user = auth()->user();
        if ($user && $user->hasRole('admin')) {
            $this->authorize($permissions);  
        }
        if($action === 'index' || $action === 'parent' || $action === 'patient' || $action === 'entretien'){
            $this->authorize($permissions);  
        }elseif($action === 'store'){  
            $this->authorize($permissions);  
        }else{ 
            $this->authorize($permissions); 
        }
        
        return parent::callAction($method, $parameters);
    }

    
   

    public function sendResponse($result, $message)
    {
        return response()->json(ResponseUtil::makeResponse($message, $result));
    }

    public function sendError($error, $code = 404)
    {
        return response()->json(ResponseUtil::makeError($error), $code);
    }

    public function sendSuccess($message)
    {
        return response()->json([
            'success' => true,
            'message' => $message
        ], 200);
    }
}

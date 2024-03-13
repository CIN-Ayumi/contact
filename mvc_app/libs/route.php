<?php
function route($path, $httpMethod){
    try {
        list($controller, $method) = explode('/', $path);
        $case = [$method, $httpMethod];
        switch ($controller) {
            case 'home':
                $controllerName = 'HomeController';
                switch ($case) {
                    case ['index', 'get']:
                        $methodName = 'index';
                        break;
                    default:
                        $controllerName = '';
                        $methodName = '';
                }
                break;

            case 'user':
                $controllerName = 'UserController';
                switch ($case) {
                    case ['log-in', 'get']:
                        $methodName = 'logIn';
                        break;
                    case ['log-out', 'get']:
                        $methodName = 'logOut';
                        break;
                    case ['sign-up', 'get']:
                        $methodName ='signUp';
                        break;
                    case ['create', 'post']:
                        $methodName = 'create';
                        break;       
                    case ['certification', 'post']:
                        $methodName = 'certification';
                        break; 
                    case ['my-page', 'get']:
                        $methodName ='myPage';
                        break;
                    case ['edit', 'get']:
                        $methodName = 'edit';
                        break;
                    case ['update', 'post']:
                        $methodName = 'update';
                        break;
                    case ['delete', 'get']:
                        $methodName = 'delete';
                        break;
                    default:
                        $controllerName = '';
                        $methodName = '';
                }
                break;

            case 'contact':
                $controllerName = 'ContactController';
                switch ($case) {
                    case ['index', 'get']:
                        $methodName = 'contact';
                        break;
                    case ['form-input', 'post']:
                        $methodName = 'formInput';
                        break;
                    case ['form-input', 'get']:
                        $methodName = 'formInput';
                        break;
                    case ['form-output', 'post']:
                        $methodName = 'formOutput';
                        break;
                    case ['form-output', 'get']:
                        $methodName = 'formOutput';
                        break;
                    case ['update', 'get']:
                        $methodName = 'ContactUpdate';
                        break;
                    case ['update', 'post']:
                        $methodName = 'ContactUpdate';
                        break;
                    case ['update-completed', 'post']:
                        $methodName = 'UpdateConpleted';
                        break;
                    case ['update-completed', 'get']:
                        $methodName = 'UpdateConpleted';
                        break;    
                    case ['delete', 'post']:
                        $methodName = 'ContactDelete';
                        break;
                    default:
                        $controllerName = '';
                        $methodName = '';
                }
        }
        require_once (ROOT_PATH."Controllers/{$controllerName}.php");
        $obj = new $controllerName();
        $obj->$methodName();

    } catch (Throwable $e) {
        error_log($e->getMessage());
        header("HTTP/1.0 404 Not Found");
    }
}

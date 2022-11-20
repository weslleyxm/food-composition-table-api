<?php 
    namespace App\Core; 
    use App\Models\Authorization;
 
    use App\Core\Contents as Contents;    


    class Core
    {
        public function start()
        {     
            $result = null;

            if(!isset($_GET['url'])) 
            { 
                $result = [ 
                    'success' => false,
                    'code' => 500,  
                    'message'=> 'The API endpoints can not be null' 
                ];   
            } 
            else  
            {       
                $url = explode('/', $_GET['url']);    
                $class = strtolower(array_shift($url)); 
                $method = strtolower(array_shift($url)); 
                
                $class = ucfirst($class . "Services");   
                $service = 'App\Services\\' . $class;   
                  
                if (class_exists($service)) 
                {
                    if(!empty($method))
                    {
                        $method = strtolower($method);

                        if(method_exists($service, $method))  
                        {
                            call_user_func(array(new $service, $method));    
                        } 
                        else 
                        {
                            call_user_func(array(new $service, "get"), $method); 
                        } 
                    }
                    else 
                    {
                        call_user_func(array(new $service, "index"));    
                    } 
                }
                else 
                { 
                    $result = [
                        "success" => false,
                        "code" => 401,
                        "message" => "Internal server error endpoint not found", 
                        "path" => $class. "/". $method
                    ]; 
                }    
            } 

            if($result != null)
            { 
                http_response_code($result['code']); 
                echo json_encode($result,  JSON_PRETTY_PRINT);   
            }
        }   
    } 
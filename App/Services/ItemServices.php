<?php

    namespace App\Services;  

    ///this class controls all things about the related box
    class ItemServices 
    { 
        private static $data = null; 
        function __construct()
        {
            $json = file_get_contents("App/View/taco.json");   
            self::$data =  json_decode($json);  
        } 
        
        public function index()
        {
            $this->list();
        }

        //list all box products
        public function list()
        {     
            $result = [ 
                'success' => true,
                'code' => 200,  
                'message'=> 'Composição de alimentos por 100 gramas de parte comestível',
                'count' => sizeof(self::$data) 
            ];
            
            $array = array(); 
            
            foreach(self::$data as $item)
            {
                $result["foods"][] = $item->name;
            }
  
            http_response_code($result['code']); 
            echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);   
        }
 
        public function get($item)
        {       
            $searchword = $item;
            $matches = null;
            foreach(self::$data as $row) { 
                if(preg_match("/\b$searchword\b/i", $row->name) || $row->id == $item) {
                    $matches[] = $row;
                }
            }

            if(!empty($matches))
            {  
                $result = [ 
                    'success' => true,
                    'code' => 200,  
                    'message'=> 'Composição de alimentos por 100 gramas de parte comestível',
                    'found' => sizeof($matches),
                    'items' => $matches
                ];
                
            }else{
                $result = [ 
                    'success' => false, 
                    'code' => 404,  
                    'message'=> 'The requested item was not found'
                ];
            } 

            http_response_code($result['code']); 
            echo json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);   
        } 
    }
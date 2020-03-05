<?php

    require_once "request_class.php";

    $requestClass = new Request();

    if( $requestClass->isPost() )
    {
        $requestClass->required('title');
        $requestClass->required('annotation');
        $requestClass->max('title', 10);
        $requestClass->min('title', 1);


        echo json_encode($requestClass->getErrors());
    }

?>
<?php

    include './db/connection.php';


    $json_params = file_get_contents("php://input");
// $json_params->name;
$response=[
    'status'=>0,
'message'=>'wasted',
];
    header('Access-Control-Allow-Origin:*');
    header('Content-Type: application/json');

    echo json_encode($response);
    

    // $stmt=$pdo->query("SHOW DATABASES");
    // $stmt->execute();
    // $obj=$stmt->fetchAll(PDO::FETCH_COLUMN);
    // $jsonobj=[
    //     'databases'=>$obj
    // ];
    // // $obj=[
    // //     'name'=> 'alvin',
    // //     'age'=>20,
    // //     'hobbies'=>['movies','games','tvshows'],
    // //     'photos'=>[
    // //         'small'=>"https://localhost/small.jpg"
    // //     ]
    // //     ];

    // header('Access-Control-Allow-Origin:*');
    // header('Content-Type: application/json');

    // echo json_encode($jsonobj);

    exit();
?>
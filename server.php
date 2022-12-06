<?php
/**
 * description
 *
 * @Author leeprince:12/1/22 11:01 PM
 */

require dirname(__FILE__).'/./vendor/autoload.php';

// 初始化gRPC服务端
$server = new \Grpc\RpcServer();
$server->addHttp2Port('0.0.0.0:8000');

// 添加gRPC服务到GPRC服务端
$server->handle(new \Leeprince\PhpGrpc\GrpcServer\HelloCtl());

// 启动服务
$server->run();

<?php
/**
 * description
 *
 * @Author leeprince:12/1/22 10:16 PM
 */

use Leeprince\PhpGrpc\GrpcClient\HelloCtl;

require dirname(__FILE__).'/./vendor/autoload.php';

// 实例化HelloCtl gRPC客户端(连接gRPC服务端)
$hellctlClient = new HelloCtl("localhost:8000");

// 调用gRPC客户端方法
$response = $hellctlClient->SayHello();

if (empty($response)) {
    echo "empty(response)";
    exit(1);
}
echo "!empty(response) \n";

var_dump($response);
var_dump($response->getCode());
var_dump($response->getMessage());
var_dump($response->getLogId());
var_dump($response->getData());
var_dump($response->getData()->getAccessTime());


<?php
/**
 * description
 *
 * @Author leeprince:12/1/22 11:02 PM
 */

namespace Leeprince\PhpGrpc\GrpcServer;


use Grpc\ServerContext;
use Grpc\Status;
use Helloctl\HelloCtlStub;
use Helloctl\SayHelloReq;
use Helloctl\SayHelloResp;
use Helloctl\SayHelloRespData;

class HelloCtl extends HelloCtlStub
{
    public function SayHello(
        SayHelloReq $request,
        ServerContext $context
    ): ?SayHelloResp
    {
        // 设置上下文。如果未继承父类的SayHello方法，父类的SayHello方法会设置为未实现该接口
        // $context->setStatus(Status::unimplemented());
    
        // 获取请求参数
        $name = $request->getName();
        $age = $request->getAge();
        var_dump($name);
        var_dump($age);
        
        // 实例化响应体，并设置响应结果
        $reponse = new SayHelloResp();
        $reponse->setCode(0);
        $reponse->setMessage("success");
        $reponse->setLogId("prince-php-grpc-logid-01");
        
        $responData = new SayHelloRespData();
        $responData->setAccessTime(time());
        $reponse->setData($responData);
        
        var_export($reponse);
        
        return $reponse;
    }
}
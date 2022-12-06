<?php
/**
 * description
 *
 * @Author leeprince:11/16/22 12:05 AM
 */

namespace Leeprince\PhpGrpc\GrpcClient;


use Grpc\ChannelCredentials;
use const Grpc\STATUS_OK;
use Helloctl\HelloCtlClient;
use Helloctl\SayHelloReq;

class HelloCtl
{
    private HelloCtlClient $client;
    
    public function __construct(string $hostname)
    {
        $this->client = new HelloCtlClient($hostname, [
            'credentials' => ChannelCredentials::createInsecure(),
        ]);
    }
    
    public function SayHello()
    {
        $request = new SayHelloReq();
        $request->setName("prince");
        $request->setAge(18);
        list($response, $status) = $this->client->SayHello($request)->wait();
        if ($status->code !== STATUS_OK) {
            echo "ERROR: " . $status->code . ", " . $status->details . PHP_EOL;
            return [];
        }
        
        return $response;
    }
}
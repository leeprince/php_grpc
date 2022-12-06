<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Helloctl;

/**
 */
class HelloCtlClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * 说Hello
     * @param \Helloctl\SayHelloReq $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SayHello(\Helloctl\SayHelloReq $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/helloctl.HelloCtl/SayHello',
        $argument,
        ['\Helloctl\SayHelloResp', 'decode'],
        $metadata, $options);
    }

}

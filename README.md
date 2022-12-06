php grpc

> 参考:https://grpc.io/docs/languages/php/quickstart/

> 参考:https://github.com/grpc/grpc/tree/master/examples/php
---

# 一、安装依赖扩展、命令工具

> 参考：https://github.com/grpc/grpc/blob/v1.50.0/src/php/README.md

## (一)安装php的grpc扩展

使用pecl安装各种扩展

### - 直接使用pecl安装grpc
```
pecl install grpc
```

### - 手动下载grpc-xxx.tgz,再使用pecl安装
```
1.pecl.php.net搜索相应扩展包，并找到stable版本。如：grpc
https://pecl.php.net/package-search.php

2.下载tgz(wget) + pecl install 直接安装
wget https://pecl.php.net/get/grpc-1.50.0.tgz
pecl install ./grpc-1.50.0.tgz
```

## (二)安装protocol buffers相关命令工具
> 以下`1.`和 `2.`可以通过以下步骤安装。看自己那种方式顺利安装都可以。
```
$ git clone -b RELEASE_TAG_HERE https://github.com/grpc/grpc
$ cd grpc
$ git submodule update --init
$ mkdir -p cmake/build
$ cd cmake/build
$ cmake ../..
$ make protoc grpc_php_plugin
```
### 1. protoc: 为您的消息和服务定义生成PHP类的Protobuf编译器二进制文件。
```
bazel build @com_google_protobuf//:protoc
```
### 2. grpc_php_plugin: 一个用于proc的插件，用于生成服务存根类。
```
bazel build src/compiler:grpc_php_plugin
```
### 3. protobuf.so: Protobuf扩展运行时库。
```
pecl install protobuf
```

// TODO: [desc] - prince_todo 12/2/22 1:35 PM
# 二、目录说明
```
.
├── README.md # 使用手册
├── client.php # php gRPC客户端
├── composer.json 
├── composer.lock
├── grpc
│   └── helloctl
├── grpc_depend_resource
│   ├── grpc-1.50.0-grpc
│   ├── grpc-1.50.0-php的grpc扩展.tgz
│   └── grpc-1.50.0-php的grpc源码.zip
├── server.php
├── src
│   ├── GrpcClient
│   └── GrpcServer
└── vendor
    ├── autoload.php
    ├── bin
    ├── composer
    ├── google
    └── grpc

```






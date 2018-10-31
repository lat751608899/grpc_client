## What is it

GrpcClient is a php client for grpc server depend on grpc_php_plugin. Making it easier for you to use grpc services.  

## Requirement

1. PHP >= 5.6
2. **[Composer](https://getcomposer.org/)**
3. **[grpc extension](http://pecl.php.net/package/gRPC)**
4. protoc（protobuf compiler）
5. google/protobuf（protobuf runtime library package）
6. grpc_php_plugin(PHP Protoc Plugin): Generates PHP gRPC service interface out of Protobuf IDL

## Installation
```shell
composer require lat/grpcClient
```
### Install protoc
1. download the protoc binaries from the protocol **[buffers GitHub repository](https://github.com/protocolbuffers/protobuf/releases)**. Then unzip this file and Update the environment variable PATH to include the path to the protoc binary file.
2. compile protoc from source
```shell
$ git clone -b $(curl -L https://grpc.io/release) https://github.com/grpc/grpc
$ cd grpc
$ git submodule update --init
$ cd grpc/third_party/protobuf
$ ./autogen.sh && ./configure && make
$ sudo make install
```
### Install PHP Protoc Plugin
```shell
$ git clone -b $(curl -L https://grpc.io/release) https://github.com/grpc/grpc
$ cd grpc
$ git submodule update --init
$ make grpc_php_plugin
```
### Compile proto file
```shell
# write the path of grpc_php_plugin
$ vim plugin.conf
$ ./create_client.sh
```
### Add namespace 
```shell
#Cfwf your package's name in proto file
"Cfwf\\": "vendor/lat/grpcClient/src/server/Cfwf/"
```


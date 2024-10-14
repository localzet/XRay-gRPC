#!/bin/bash

GRPS_PLUGINS_DIR="./.grpc"
PROTO_SRC_DIR="./src"

# PHP
PHP_OUT_DIR="./php/src"
mkdir -p $PHP_OUT_DIR
protoc -I=$PROTO_SRC_DIR --php_out=$PHP_OUT_DIR --grpc_out=$PHP_OUT_DIR --plugin=protoc-gen-grpc=$GRPS_PLUGINS_DIR/grpc_php_plugin $(find $PROTO_SRC_DIR -name "*.proto")

echo "[V] PHP"

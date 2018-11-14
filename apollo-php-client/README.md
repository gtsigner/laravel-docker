# [携程Apollo](https://github.com/ctripcorp/apollo)的PHP客户端

## install
php version >= 7.0
```bash
$ composer require zhaojunlike/apollo-php-client
```

## Features
- 支持apollo配置变更的适时获取
- 支持拉取配置后自定义的回调处理

## Usage
客户端以cli的方式后台启动执行，支持apollo配置的适时获取，并将配置保存在指定的目录供应用程序读取解析

### 配置管理

拉取的配置默认保存在脚本所在目录，每个namespace的配置以`apolloConfig.{$namespaceName}.php`的方式命名保存

### Docker环境客户端自启动

在docker的启动脚本中加入启动代码，一般的php容器启动脚本是docker-php-entrypoint
```bash
if [ -f "/path/to/start.php" ]; then
    apollo_ps=$(ps -aux | grep -c "php /path/to/start.php")
    if [ $apollo_ps -eq 1 ]; then
        php /path/to/start.php &
    fi
fi
```

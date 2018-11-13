Usage

```
$ git clone https://github.com/xiaoguo0426/docker-dnmp

$ docker-compose up -d
```

Running
```
docker-compose build     # build dockerfile
docker-compose up        # 构建启动 -d 后台运行
docker-compose start     # 启动
docker-compose stop      # 停止
docker-compose restart   # 重启
docker-compose down      # 清除
```

Test
```
http://localhost/phpinfo.php
```

Mysql
```
mysql -h 127.0.0.1 -P3306 -uroot -p123123
```

Redis
```
redis-cli -h 127.0.0.1 -p 6379
```

使用

```
$ git clone

$ docker-compose up -d
```

运行
```
docker-compose build     # build dockerfile
docker-compose up        # 构建启动 -d 后台运行
docker-compose start     # 启动
docker-compose stop      # 停止
docker-compose restart   # 重启
docker-compose down      # 清除
```

访问
```
http://localhost/phpinfo.php
```

mysql访问
```
mysql -h 127.0.0.1 -P3306 -uroot -p123123
```

redis访问
```
redis-cli -h 127.0.0.1 -p 6379
```

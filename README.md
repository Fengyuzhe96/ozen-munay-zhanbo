# Работа с Docker

Просмотр запущенных Docker-контейнеров:

```shell
docker-compose ps
```

или

```shell
docker ps
```

Запуск контейнеров:

```shell
docker-compose up -d
```

Остановка контейнеров

```shell
docker-compose down
```

## PHP

После запуска контейнеров, просмотр данных в браузере будет доступен по
адресу http://127.0.0.1/

Код необходимо располагать в папке src

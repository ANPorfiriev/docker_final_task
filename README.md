# docker_final_task
Интенсив Docker 2024 ИТ-академия Росатом

# Описание задания
- [Итоговое задание](README-job.md)

## Выбор решения

**kanboard** \
Цель прикрутить postgres в качестве базы, caddy в качестве фронта

- https://github.com/kanboard/kanboard
- https://github.com/kanboard/kanboard/releases
- https://docs.kanboard.org/v1/admin/postgresql/
- https://docs.kanboard.org/v1/admin/docker/

**структура**\
```
front
 |--caddy (network: front)
app
 |--kanboard (network: front, back)
db
 |--postgres (network: back)
```

## Запуск приложения

sudo docker-compose -d up

## Вход/использование

Front: http://localhost:8087  ->admin/admin \
Adminer: http://localhost:8090 \


## kanboard build debug

sudo docker buildx create --use --name larger_log --driver-opt env.BUILDKIT_STEP_LOG_MAX_SIZE=50000000
sudo docker buildx build --builder=larger_log --progress plain ./kanboard

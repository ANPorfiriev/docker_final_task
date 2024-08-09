# docker_final_task
Интенсив Docker 2024 ИТ-академия Росатом

## kanboard build debug

sudo docker buildx create --use --name larger_log --driver-opt env.BUILDKIT_STEP_LOG_MAX_SIZE=50000000
sudo docker buildx build --builder=larger_log --progress plain ./kanboard

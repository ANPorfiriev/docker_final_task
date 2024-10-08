Итоговое задание «Интенсив Docker»
Выполните итоговое задание и пришлите ссылку на репозиторий на почту it-school-hw@greenatom.ru до 12 августа. В письме обязательно укажите ФИО, в теме письма «Интенсив Docker».

Формат сдачи задания: git-репозиторий с описанием, что нужно сделать для запуска проекта. Локация репозитория не имеет значения: GitFlic, GitHub, где больше нравится. Главное - чтобы была возможность забрать проект командой git clone. Никаких файлов по электронной почте - если человек не умеет работать с git, то домашнее задание можно не делать; наличие README.md в репозитории - обязательно, Вы сами должны описать, что нужно сделать для запуска проекта. Наличие docker и docker-compose подразумевается (т.е. автоматизировать их установку не нужно).

Платформа: Astra Linux. То есть, запускаться Ваш проект будет ровно на той виртуальной машине, где Вы работаете (аналогичной). Подключение к интернету есть, доступ к Docker Hub есть, образы оттуда можно использовать.

Сроки сдачи:
До 12 августа нужно прислать любую версию, даже с ошибками.
До 15 августа прислать финальную. Если до 12 августа ничего не прислали, то срок вышел.

Критерии сдачи заданий:
    • Normal (на троечку) 
Без использования docker-compose, только с помощью чистого Docker запустить веб-приложение, состоящее из двух компонентов: самого веб-приложения (использовать готовый образ с Docker Hub), а также базы данных для него. Использовать создание отдельной сети для приложения, автоматизировать все необходимые процессы с помощью Bash-скрипта.
Результат: репозиторий с Bash-скриптом, запустив который получаем работающее приложение.

    • Nightmare (на четверочку)
Использовать Dockerfile для раздельной сборки софта и для создания контейнера, где этот софт дальше будет запускаться.
Необходимо взять исходник двух приложений на разных языках (желательно С/С++ и Go, файл на этапе сборки можно просто качать с официального сайта), дальше используя два разных контейнера эти приложения собрать, а потом подготовить третий образ контейнера, куда поместить оба этих собранных приложения. Сделать возможность запустить любое из них (подумать на тему ENTRYPOINT/CMD) на выбор.
Результат: репозиторий с Dockerfile, который позволяет собрать контейнер

    • Hell (на пятерочку)
Докеризировать любое веб-приложение, то есть:
    1. Подготовить Dockerfile, в котором архив с веб-приложением скачивается с официального сайта, распаковывается в контейнер. Базовый образ может быть любой с Docker Hub (Ubuntu, Debian, Alpine). Использовать готовый образ с веб-приложением нельзя!
    2. С помощью docker-compose.yml прокинуть туда конфиги и все необходимое. Приложение должно состоять из фронта (nginx, caddy), самого приложения (Apache, uwsgi), и базы данных. Необходимо использовать две сети, в одной находится фронт и приложение, в другой приложение и база данных.
    3. В итоге по команде docker-compose up собираются образы и запускается приложение.
Результат: репозиторий с docker-compose.yml и всем необходимым для запуска
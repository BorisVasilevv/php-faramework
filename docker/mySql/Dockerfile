FROM mysql:5.7

# инициализация бд
COPY init.sql /docker-entrypoint-initdb.d/
# добавление удаление пользователей
COPY add_user.sql /add_user.sql
COPY delete_user.sql /delete_user.sql
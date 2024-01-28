# Документация

- Чистый код - это и есть хорошая документация. Комментарии засоряют. Все должно просто и удобно читаться.
- [Postman](https://documenter.getpostman.com/view/23865388/2s9YyqihZh)

Деплой
```shell 
cp .env.exmaple .env

docker compose up -d

docker compose exec app composer i

docker compose exec app php artisan migrate
```

Для корректной работы, в .env - APP_KEY нужно проставить правильный ключ

*Итоговое время около 3-4х часов*

## Тестовое задание

## Установка

```
git clone https://github.com/AleksDer77/test.git

cd test

composer install

make init

```

### Пояснения

Требуется оптимизация логики фильтрации, т.к. есть повторяющиеся запросы

Возможно вынесение логики в отдельный сервис

Требуются тесты


### Варианты для проверки в браузере

http://localhost/api/products/?properties[color][]=blue&properties[material][]=metal&properties[brand][]=xiaomi
http://localhost/api/products/?properties[color][]=blue&properties[material][]=metal&properties[brand][]=philips




#### Просто похвастаться

https://github.com/php/doc-ru/issues/985

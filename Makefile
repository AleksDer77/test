
up:
	@./vendor/bin/sail up -d

down:
	@./vendor/bin/sail down

restart:
	@./vendor/bin/sail down
	@./vendor/bin/sail up -d

build:
	@./vendor/bin/sail build --no-cache

bash:
	@./vendor/bin/sail bash

composer-install:
	@docker run --rm -v $(PWD):/var/www/html -w /var/www/html composer install

key-generate:
	@./vendor/bin/sail artisan key:generate

migrate:
	@./vendor/bin/sail artisan db:seed
	@./vendor/bin/sail artisan migrate --seed

create-test-db:
	@./vendor/bin/sail exec -T mysql sh -c "mysql -usail -ppassword -e 'CREATE DATABASE IF NOT EXISTS testing;'"

migrate-testing:	create-test-db
	@./vendor/bin/sail artisan db:seed --env=testing
	@./vendor/bin/sail artisan migrate --seed --env=testing

seed:
	@./vendor/bin/sail artisan db:seed

test:
	@./vendor/bin/sail artisan test

copy-env:
	@test -f .env || cp .env.example .env

init: copy-env composer-install up key-generate migrate migrate-testing


.PHONY: up down restart build bash composer-install key-generate migrate seed test copy-env init

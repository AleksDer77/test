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
	@./vendor/bin/sail composer install

key-generate:
	@./vendor/bin/sail artisan key:generate

migrate:
	@./vendor/bin/sail artisan migrate --seed

seed:
	@./vendor/bin/sail artisan db:seed

test:
	@./vendor/bin/sail artisan test

copy-env:
	@test -f .env || cp .env.example .env

init: copy-env up composer-install key-generate migrate

.PHONY: up down restart build bash composer-install key-generate migrate migrate-fresh seed test init

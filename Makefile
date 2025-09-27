.PHONY: up down build restart install-laravel

up:
	docker-compose up -d

down:
	docker-compose down

restart:
	docker-compose down && docker-compose up -d --build

build:
	docker-compose build

install-laravel:
	docker-compose run --rm app composer create-project laravel/laravel . --prefer-dist

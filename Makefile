all: analyse test

.PHONY: analyse
analyse: composer
	vendor/phpstan/phpstan-shim/phpstan.phar analyse -l 7 -c phpstan.neon src tests

.PHONY: composer
composer: composer.phar
	./composer.phar install

composer.phar:
	wget https://getcomposer.org/composer.phar
	chmod 777 composer.phar

.PHONY: test
test: composer
	vendor/bin/phpunit

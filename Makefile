start:
	cp .env.example .env
	composer install
	npm install
	php artisan key:generate
	nano .env
	php artisan migrate:fresh --seed
	php artisan serve
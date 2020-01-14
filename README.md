## Steps to install

- service apache2 start
- service mysql start
- git clone https://github.com/lampdev/kidz.git
- cp .env.example .env
- create an empty MySQL DB
- set DB_DATABASE, DB_USERNAME and DB_PASSWORD environment variables (.env file)
- composer install
- php artisan migrate --seed
- php artisan serve
- You will see `Laravel development server started: http://127.0.0.1:8000`, go to `http://127.0.0.1:8000` in browser
- If you want to log in - go to `http://127.0.0.1:8000/login` (there is a test user `admin@admin.com` with `12345678` password)
- If you want to register - go to `http://127.0.0.1:8000/register`

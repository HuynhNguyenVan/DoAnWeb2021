# Hướng dẫn cài đặt

#### Yêu cầu có xampp php 8.0.3

* Tải và giải nén source hoặc dùng git clone
* Tạo cơ sở dữ liệu mới trên phpmyadmin
* composer install
* npm install 
* cp .env.example .env
* Cập nhật lại file .env phần cơ sở dữ liệu bạn mới tạo
* php artisan key:generate
* php artisan migrate
* php artisan db:seed
* php artisan storage:link
* phpunit

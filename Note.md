//Queue
- add thông tin mailtrap vào file env
  MAIL_MAILER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=2934dd441853ad
  MAIL_PASSWORD=48ec70b1200a9f
  MAIL_ENCRYPTION=tls  


//Laravel Excel
- composer require maatwebsite/excel
- php artisan vendor:publish --provider="Maatwebsite\Excel\ExcelServiceProvider" --tag=config
- thêm vào app.php
  'providers' => Maatwebsite\Excel\ExcelServiceProvider::class,
   'aliases' =>  'Excel' => Maatwebsite\Excel\Facades\Excel::class,



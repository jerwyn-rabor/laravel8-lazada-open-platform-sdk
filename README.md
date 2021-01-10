<h1>Laravel 8 with Lazada Open Platform SDK</h1>

<h3>STEPS</h3>:

1. Clone this project

2. npm install

3. cp .env.example .env

4. Make sure you already watched and understand the Lazada Open Platform
    > Watch here -> https://www.youtube.com/watch?v=mbMqFjjBkRI
    
5. Generate your Lazada Open Platform Access Token
    > Read here -> https://open.lazada.com/doc/doc.htm?spm=a2o9m.11193535.0.0.2bef38e4HAiCxd#?nodeId=10434&docId=108260
    
6. Get your application credentials
    > APP Console -> Manage -> App Overview
    
7. Save your application credentials in .env
    * LAZADA_URL=
    * LAZADA_APP_KEY=
    * LAZADA_APP_SECRET=
    * LAZADA_ACCESS_TOKEN=
    
8. php artisan config:cache

9. php artisan serve

10. Select your API
    > Read here -> https://open.lazada.com/doc/api.htm?spm=a2o9m.11193531.0.0.12036bbeLhuff4#/api?cid=8&path=/order/document/get
    
11. Test first in your API Explorer
    > If you encounter any problem please check the documentation.

12. Copy the SDK sample code
    > At your screen right side lower part
    > select PHP
    
13. Save the SDK code
    > Open the LazadaController.php
    > paste your code in index method
    > Here -> // LAZADA OPEN PLATFORM SDK CODE
    
14. Go to your browser
    > localhost/lazada
    
15. It must display data from your Lazada API
    > Install JSON Formatter for better experience


<h1>HAPPY CODING!!!</h1>

    

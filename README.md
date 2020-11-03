# Website-for-CSE-Department

## You need to install Laravel, Xampp Control Panel in your PC. Otherwise it's not working. <br/>
For Xampp Server go to https://www.apachefriends.org/download.html <br/>
For Laravel go to here https: /www.youtube.com/watch?v=i-6qK5MyjO4&t=281s  and follow instructions  <br/>

For windows user, you need to add laravel path to Environment variable . Follow this https://www.youtube.com/watch?v=iM3S_OHq_Y4&t=274s


## How to run my project

### Go to the folder application using cd or go to directly and run cmd or similar as cmd
   - run  **composer install**
- rename .env.example to .env
### Open .env file and change the database name. You can use like this
- DB_CONNECTION=mysql <br/>
- DB_HOST=127.0.0.1   <br/>
- DB_PORT=3306   <br/>
- DB_DATABASE=sec-cse   <br/>
- DB_USERNAME=root  <br/>
- DB_PASSWORD=""    <br/>

### then run following command
    php artisan route:cache
    php artisan route:clear
    php artisan config:cache
    php artisan config:clear
    php artisan optimize
   

- Now **start** **MySQL and Apache from XAMPP Control Panel**  <br/>
- Create a  **database from localhost/phpmyadmin**   </br>
- Remember You need to use same name as DB_DATABASE.  <br/>
- That means I use **DB_DATABASE=sec-cse**  <br/>
- So, My Database name is **sec-cse** in the phpmyadmin  <br/>
- Then **import** database from project folder. [ **My database file name is  our_database.sql ]**
### then run
     php artisan key:generate
### finally run
     php artisan serve
 
## You will get a hosting address like 
     http://127.0.0.1:8000/
### Go to this link  from browser and **bombed.**

For Admin purposes, go to http://127.0.0.1:8000/admin   <br/>
- Email:  sagar@yahoo.com <br/>
- Password: 12345678 <br/>
    
                 

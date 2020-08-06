# How I built this application :

## Initial set up :

- for windows : Go to C:\xampp\apache\conf\extra edit the "httpd-vhost" file

<VirtualHost *:80>
    
    DocumentRoot "C:/xampp/htdocs/Cloud_Computing"
    ServerName localhost
  
</VirtualHost>

<VirtualHost *:80>
    
    DocumentRoot "C:/xampp/htdocs/Cloud_Computing/CentralApp/public"
    ServerName CentralApp.com
  
</VirtualHost>

- for windows : Go to C:\Windows\System32\drivers\etc , view all file , then edit the "host" file as administrator. add following lines at the end :


127.0.0.1       localhost
127.0.0.1       CentralApp.com

- Restart "Xapmm"

- now when i type centralapp.com on my browser i should see my webpage.

## Start real work :

### Understanding file structure of larave (part2)

- "app" <-  all the models should go here, Controller is also here under "Http" folder.

- "resources" <- contains all the views under "views" folder.
- "routes" <- before 5.3 it happen to be inside "app" folder but now its a stand alone folder. i need to know about this more. basic idea is this routs everything....
- "provider" <- provides services 
- "config" <- for configureing everything e.g; database
- "public" <- css, 

### part 3 : Basic routing and controllers


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


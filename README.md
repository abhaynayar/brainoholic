# brainoholic
A self-help website aimed at exercising the brain.

To view this website on your computer, you need to have a virtual server software installed (WAMP, XAMPP, etc.)

1) Clone this git repository by entering the following code in a bash terminal:
git clone https://github.com/abhaynayar/brainoholic

2) Put it in your virtual server's projects folder. For example, if you have installed WAMP in default directory on Windows, put the folder in C:\Wamp\www

3) Start your virtual server and visit localhost/phpMyAdmin

4) Create a new database named "brainoholic"

5) Inside the database, create a new table named "users"

6) If you have not changed the password of your server, it is fine otherwise you might need to change the source code of every php file's. In the "mysqli_query", instead of "" as the parameter, type your own password. 

7) Then you can run the website on localhost/brainoholic/home.php, since I have not made an index file.

8) As of now, the website is not complete, this is just a demonstration of how things will be, data will be added whenever possible.

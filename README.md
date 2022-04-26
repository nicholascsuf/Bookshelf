#Bookshelf README Documentation

**Group Member:
**
Jin Lu,  jlu28@csu.fullerton.edu
Josiah Peedikayil, josiahpeedikayil@csu.fullerton.edu
Nicholas Harney, nicholas.harney@csu.fullerton.edu

To access the website:
Visit http://164.92.118.198/

Login Credentials: book
Password: fullerton


**How to Run and test project:
**
1) Visit the following URL in a web browser http://164.92.118.198/ 

2) Use the following login credentials to login to the webpage
Username: book
Password: fullerton

3) Click the "View All Current Inventory" button to display all the books that are currently in the inventory.
4) To test the search capabilities, Enter a Book Title OR ISBN number, then press the "Search" button.
5) To test the insert book functionalities, scroll down to "Add Book to Bookshelf"
    - Enter Book Name
    - Enter Author First Name
    - Enter Author Last Name
    - Enter ISBN number
    - Press the "Add Book" Button


**Demonstration of differences between plan and reality:
**


**Coding Style Used: **

**Workload Distribution:**
Jin Lu: Front end design and development, Gathering of data for books
Josiah Peedikayil: Web Hosting, server installation, server management and maintenance
Nicholas Harney: Database creation, PHP code implementation, Connection of front end to back end 

**Testing Done:**
Unit tests were performed for each part of the website.
A description of the following tests.

The search capabilities tested as follows:

Front END:
1) Blank Search Title was input, result - successfully displays error
2) Blank ISBN was inserted, result- sucessfully displays error
3) Search Title was input known not to be in database - successfully displays no results found
4) ISBN not known to be in database - successfully displays no results found

Back End:


The insert book capabilities tested as follows:

Front End
1) Blank Book name was inserted, result - successfully displays error
2) Blank Book ISBN was inserted, result- sucessfully displays error
3) Blank Author last name was inserted,  result- sucessfully displays error
4) Blank Author first name was inserted,  result- sucessfully displays error
Back End:
1) Using the OS X application, mySQL workbench, to manually run the following SQL statement:
 "INSERT INTO books (isbn,book_name,author_ln,author_fn,genre,review,price,quantity)VALUES('$isbn','$b_name','$l_name','$f_name','default','0','10','10')";

The view all book capabilities tested as follows:
1) Using the OS X application, mySQL workbench, to manually run the following SQL statement. "SELECT * FROM bookshelf.books;"
2) Pressing on the button "View all current inventory" on the front end


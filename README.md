#Bookshelf README Documentation

Version History: 
Version 1 - April 25th 2022

Group Members:
Jin Lu,  jlu28@csu.fullerton.edu
Josiah Peedikayil, josiahpeedikayil@csu.fullerton.edu
Nicholas Harney, nicholas.harney@csu.fullerton.edu

License Information: See https://github.com/nicholascsuf/Bookshelf/blob/main/License.MD

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

Trello Board for project management: https://trello.com/b/t7V5k6da/bookshelf-the-librarians
Development process: The project was actually more difficult to implement than we originally thought. 
Differences between original version and final version.

The original version:
Included Checkout features
Seperate interface for cashier and customer
Customer information table
The account section was suppose to be a customer interface also, means when a customer log in to the page, they can edit their profile and book list.
User can leave review
Cashiers will be able to generate reports of most check out books, and run queries to detemine the sales of each book along with customer lists

The final version:
Combined interfaces for cashier and customer as a result of time constraints
Customer information table was not included as a result of time constraints, more difficult to implement than we originally thought.
There is actually only one login that works, and the sign up function does not work.  Only the manager can sign in and add the book in the account section.
User can't leave review
Cashiers will not able to generate reports of most check out books, and will not be able queries to detemine the sales of each book 

We used too much time. For time constraints we implemented whatever we can.

**Coding Style Used: **

The reason for chosing coding style is because we think that these coding style will make the code more readable and understandable to the readers and contributors

For PHP:
o   Using aspects from PHP Standard Recommendation  - 2
o   Code MUST use 4 spaces for indenting, not tabs.
o   In the argument list, there MUST NOT be a space before each comma, and there MUST be one space after each comma.
o   Lines SHOULD NOT be longer than 80 characters; lines longer than that SHOULD be split into multiple subsequent lines of no more than 80 characters each.
o Link   https://www.php-fig.org/psr/psr-2/

For HTML:

HTML Coding Style:

Use Lowercase Attribute Names
GOOD: <a href="https://www.w3schools.com/html/">Visit our HTML tutorial</a>
BAD: <a HREF="https://www.w3schools.com/html/">Visit our HTML tutorial</a>

Close All HTML Elements
GOOD:
<section>
  <p>This is a paragraph.</p>
  <p>This is a paragraph.</p>
</section>

BAD:
<section>
  <p>This is a paragraph.
  <p>This is a paragraph.
</section>

Use Lowercase Element Names
GOOD: 
<body>
<p>This is a paragraph.</p>
</body>

BAD:
<BODY>
<P>This is a paragraph.</P>
</BODY>
Always Declare Document Type
<!DOCTYPE html>

Always Quote Attribute Values
Good:
<table class="striped">

Bad:
<table class=striped>
Spaces and Equal Signs
Good:
<link rel="stylesheet" href="styles.css">
Bad:
<link rel = "stylesheet" href = "styles.css">


**Workload Distribution:** 
    
Everyone did the parts of the project that they are most comfortable with.
    
  Trello link: https://trello.com/b/t7V5k6da/bookshelf-the-librarians
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




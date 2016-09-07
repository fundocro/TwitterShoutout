# TwitterShoutout

Learning project , ment for practice purpuse only.
Main function is for user to enter his username and his Twitter Message wich is then submited to database.
If downloaded make sure you have XAMPP or similiar software with MySql and Apache running within.

You must run file named local_index.php wich must be located within XAMPP/htdocs folder : C:\xampp\htdocs\shoutout\local_index.php

Make new database with phpMyAdmin named: screamou_shoutout
Make just one table named: shoutoutusers
Make 4 fields in this order (case sensitive): id  - integer(11), AUTO_INCREMENT,PRIMARY ON
                                              TwitterName   - varchar(15)
                                               Date -   datetime
                                              Tweet - tinytext
                                              
  Live example running here: http://www.screamout.net/

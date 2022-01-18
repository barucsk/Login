# Login
Here is a login with PHP. 

I made this login to get into control panel of my personal site.
I was knew what i need to do and doing in i learn how to do.
Example of that i knew that the password need to hash and salt
for be more secure. I see that in theory in one class of the
university. But i never do that so i need to research and how
to do it in PHP in this case. Plus the data is validate to be 
clear and avoid to injections.

So the project have this structure:

index.php: is the log-in template developed on html and have 
    one tag of php that print a messag error if the session cant
    start.

login.php: In this page are the process to can be possible the
    access. First we check if there is a data in $_POST then
    is validate and sanitize. After that the user is search
    on the db and if its found it we verify the password.
    If all its correct we are access.

home.php: You only have access when you are logged and if there is
    no acctivity in 1 hour youre automatic logout.

create_admin_user.php: there is a little script to create the user
    in the database and its because we need to hash it.

db_conn.php: only have the data for connect to the database.
    here its another issue in the seccurirty. I use a default
    connection. But in real cases it better to do some extra
    points to do the db more secure like:
        -Denied access to entry conecions.
        -create a special user only for this apliccacion.
        -Restring access to avoid that user get access to others DB.



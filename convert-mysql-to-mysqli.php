Following are the popularly used methods of MySQL, followed by the equivalent methods in MySQLi.

1
mysql_affected_rows -> mysqli_affected_rows($link)
2
​
3
mysql_close -> mysqli_close($link)
4
​
5
mysql_data_seek -> mysqli_data_seek( $result, $offset)
6
​
7
mysql_errno -> mysqli_errno( $link)
8
​
9
mysql_error -> mysqli_error( $link)
10
​
11
mysql_fetch_array -> mysqli_fetch_array( $result, $type)
12
​
13
mysql_fetch_assoc -> mysqli_fetch_assoc( $result)
14
​
15
mysql_fetch_lengths -> mysqli_fetch_lengths( $result )
16
​
17
mysql_fetch_object -> mysqli_fetch_object( $result, $class, $params)
18
​
19
mysql_fetch_row -> mysqli_fetch_row( $result)
20
​
21
mysql_field_seek -> mysqli_field_seek( $result, $number)
22
​
23
mysql_free_result -> mysqli_free_result(result)
24
​
25
mysql_get_client_info -> mysqli_get_client_info( $link)
26
​
27
mysql_get_host_info -> mysqli_get_host_info( $link)
28
​
29
mysql_get_proto_info -> mysqli_get_proto_info( $link)
30
​
31
mysql_get_server_info -> mysqli_get_server_info( $link)
32
​
33
mysql_info -> mysqli_info( $link)
34
​
35
mysql_insert_id -> mysqli_insert_id( $link)
36
​
37
mysql_num_rows ->  mysqli_num_rows( $result)
38
​
39
mysql_ping -> mysqli_ping( $link)
40
​
41
mysql_query -> mysqli_query( $link, $query)
42
​
43
mysql_real_escape_string -> mysqli_real_escape_string( $link)
44
​
45
mysql_select_db - > mysqli_select_db( $link, $database)
46
​
47
mysql_set_charset -> mysqli_set_charset( $link, $charset)
48
​
49
mysql_stat -> mysqli_stat( $link)
50
​
51
mysql_thread_id -> mysqli_thread_id( $link)
If you want to convert your script from a MySQL extension to a MySQLi extension manually, you must start with the top of the script and start converting all the methods one by one.

For this, open the script in any text editor and use the find-and-replace tool to replace mysql_ with mysqli. But that's not all. You must manually check and verify the parameters of the method, as well.

To automate the process of converting the script from MySQL to MySQLi, I can use the following online tools. I will create a sample insertion and retrieval code and convert it using one of these tools.

Sample Code for Conversion
I am going to use the following database and code for testing the online conversion tools.

Database SQL
1
CREATE TABLE `info`.`student` 
2
  ( 
3
     `id`        INT NOT NULL auto_increment, 
4
     `name`      VARCHAR(40) NOT NULL, 
5
     `last name` VARCHAR(40) NOT NULL, 
6
     `email`     VARCHAR(40) NOT NULL, 
7
     PRIMARY KEY (`id`) 
8
  ) 
9
engine = innodb; 
Connection.php
1
<?php
2
$servername = "localhost" ;
3
$username = "root";
4
$pass = "";
5
$con = mysql_connect($servername,$username,$pass) or die("Problem occur in connection");
6
$db = mysql_select_db("info",$con);
7
?>
Insert.php
1
<?php
2
require_once("connection.php");
3
$query = "Insert into student values('','Saquib','Rizwan','saquib.rizwan@cloudways.com')";
4
$result = mysql_query($query);
5
if(isset($result))
6
{
7
 echo "Data has been inserted";
8
}
9
?>
Retrieve.php
1
<?php
2
require_once("connection.php");
3
$query = "select * from Student ";
4
$result = mysql_query($query);
5
while($data = mysql_fetch_array($result))
6
{
7
 echo "<br/><br/>";
8
 echo "ID : $data[0]";
9
 echo "Name : $data[1]  ";
10
 echo "Last Name : $data[2]  ";
11
 echo "Email : $data[3]  ";
12
}
13
?>
Here is the basic PHP code which uses MySQL extension to create the database connection, select database, create and execute a query and fetch data from the database.

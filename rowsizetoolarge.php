subject : row size is too large in mysql

You can set this SESSION variable from the command line:

mysql> show variables like '%strict%';
+--------------------+-------+
| Variable_name      | Value |
+--------------------+-------+
| innodb_strict_mode | OFF   |
+--------------------+-------+
1 row in set (0.01 sec)
Then, you do this:

mysql> set innodb_strict_mode = ON;
Query OK, 0 rows affected (0.00 sec)
Then, to check:

mysql> show variables like '%strict%';
+--------------------+-------+
| Variable_name      | Value |
+--------------------+-------+
| innodb_strict_mode | ON    |
+--------------------+-------+

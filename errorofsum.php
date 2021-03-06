Error 1140: In aggregated query without GROUP BY,sql_mode=only_full_group_by
tags: sql_mode=only_full_group_by


There is no problem running on MySQL 5.5.27. The error of sql_mode=only_full_group_by is reported on MySQL 5.7.24:
Error 1140: In aggregated query without GROUP BY, expression #1 of SELECT list contains nonaggregated column 'sx.u.id';
this is incompatible with sql_mode=only_full_group_by

When SELECTing a column that does not belong to the GROUP BY column, the column in the group may have multiple values, but there is only one value space in the result. Therefore, it is often necessary to tell the database how to combine these multiple values ​​into one value. Usually, this is the same as the aggregate function COUNT(), SUM(), MAX(), etc... I say in general, because most other popular database systems stick to this. However, in MySQL prior to version 5.7, the default behavior was more tolerant because it wouldn't complain and then choose any value at will! It also has an ANY_VALUE() function if you really need the same behavior as before and can be used as another solution to this problem. This flexibility comes at a price because it is non-deterministic, so I won't recommend it unless you have a good reason to need it. MySQL now has only a full reason for opening the default_full_group_by setting, so it's best to get used to it and make your query conform to it.

There are two solutions

1. Method 1

Standardize SQL, eliminating the possibility of any ambiguity
 E.g: 
 SELECT name, age, SUM(points) FROM scores GROUP BY name //correct
 
 SELECT name, age, SUM(points) FROM scores //Error (after 5.7)
2. Method 2 (no need to make any changes in the current query)

1). Open the configuration file

sudo vim /etc/mysql/my.cnf
2). Copy the following to my.cnf

[mysqld]
sql_mode = 
 
STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION
3). Exit save

:wq!
4). Restart MySQL

sudo service mysql restart

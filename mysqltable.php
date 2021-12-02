<?php
//    table for name and price
USE magiccake;
#drop table if exists customer_order;
create table if not exists customer_order (
serial_no mediumint unsigned not null auto_increment,
Item_name VARCHAR(100)  NOT NULL,
Item_price VARCHAR(100)  NOT NULL,
Quantity int(100)  NOT NULL,
primary key(serial_no)
 );



//  qty included
USE magiccake;
#drop table if exists cart;
create table if not exists cart(
serial_no mediumint unsigned not null auto_increment,
Item_name VARCHAR(100)  NOT NULL,
Item_price VARCHAR(100)  NOT NULL,
Qty INT(100)  NOT NULL,

primary key(serial_no)
 );

 ?>
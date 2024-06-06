-- create database asm_php2;
-- use asm_php2;
create table users(
id int auto_increment primary key,
email varchar(100) unique,
password varchar(50),
firstname varchar(50),
lastname varchar(50),
phonename varchar(20),
address text,
roles int,
created_at datetime
);

create table productcategory(
id int auto_increment primary key,
name varchar(255),
created_at datetime
);

create table brands(
id int auto_increment primary key,
name varchar(255),
created_at datetime
);


create table products(
id int auto_increment primary key,
product_name text,
des_short text,
des text,
price float,
price_sale float,
stock_quantity int,
img_url varchar(255),
created_at datetime,
productcategory_id int, 
brands_id int,
foreign key(productcategory_id) references productcategory(id),
foreign key(brands_id) references brands(id)
);

create table cart(
	id int auto_increment primary key,
    users_id int,
    product_id int,
    quantity int,
    created_at datetime,
    foreign key(users_id) references users(id),
	foreign key(product_id) references products(id)
);

create table orders(
id int auto_increment primary key,
users_id int,
order_date datetime,
stutus int,
total_price float,
shipping_address text,
created_at datetime,
 foreign key(users_id) references users(id)
);

create table order_detail(
id int auto_increment primary key,
order_id int,
product_id int,
quantity int,
price float,
total float,
created_at datetime,
foreign key(order_id) references orders(id),
foreign key(product_id) references products(id)
);

create table product_image(
id int auto_increment primary key,
product_id int,
img_url text,
foreign key(product_id) references products(id)
);

create table reviews(
id int auto_increment primary key,
product_id int,
users_id int,
rating int,
comment text,
created_at datetime,
foreign key(product_id) references products(id),
foreign key(users_id) references users(id)
);


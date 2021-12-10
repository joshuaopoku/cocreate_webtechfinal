drop database cocreate;
create database cocreate;
use cocreate;  


create table User_profile(
user_id int primary key auto_increment,
fullname varchar(60) not null,
username varchar(60) not null,
user_email varchar(200) Unique not null,
user_dob date not null,
user_pass varchar(70) not null,
gender enum('MALE','FEMALE') not null
);

create table Review(
review_id int primary key auto_increment,
review_txt mediumtext,
user_id int,
foreign key(user_id) references User_profile(user_id) on delete cascade
);


create table Project(
project_id int primary key auto_increment,
project_name varchar(40) Unique not null,
project_type enum('ACADEMIC','BUSINESS','SOCIAL') not null,
project_des mediumtext not null,
project_img blob,
user_id int,
review_id int,
foreign key(user_id) references User_profile(user_id) on delete cascade,
foreign key(review_id) references Review(review_id) on delete cascade
);


create table Newsletter(
news_id int primary key auto_increment,
user_email varchar(100) Unique not null,
news_type enum('ALL','ACADEMIC','BUSINESS','SOCIAL') not null,
foreign key(user_email) references User_profile(user_email) on delete cascade
);



Insert into User_profile(fullname, username, user_email, user_dob, user_pass, gender) values('Kojo Alex', 'kojo_alex', 'fordjouralexandar@gmail.com', '1997-02-21', 'admin@admin', 'MALE');













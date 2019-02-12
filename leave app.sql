create database LeaveApp;

use LeaveApp;

create table employee
(
	id int primary key auto_increment,
	username varchar(200),
	firstName varchar(200),
	lastName varchar(200),
 	contactNo varchar(30),
	password varchar(200),
	status varchar(200)
);

create table admin
(
	id int primary key auto_increment, 
	username varchar(200),
	password varchar(200)
);

create table leaveData
(
	startDate varchar(200),
	endDate varchar(200),
	reason varchar(400),
	id int primary key auto_increment,
	eid int references employee(id),
	status varchar(200)
);

drop table leaveData;

select * from student;

insert into admin(username,password) values ("admin","admin");

alter table employee add column isAdmin bool;

alter table employee drop column status;

describe leaveData;

select * from employee ;

select * from leaveData;

alter table leaveData add column leave_type varchar(244);

alter table leaveData add column duration numeric(3,2);


alter table employee add column email varchar(244);
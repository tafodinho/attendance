create database attendance;

create table supevisor_table(
	sup_id int(5) unsigned auto_increment primary key,
	first_name varchar(30) not null,
	last_name varchar(30) not null,
	phone varchar(9) not null,
	email varchar(30) not null,
	password varchar(50) not null,
	base_region varchar(20)  not null,
	dob date not null,
	home_address varchar(40) not null,
	photo varchar(255) not null,
	gender varchar(10) not null
);

create table security_officer_table(
	sec_off_id int(5) unsigned auto_increment primary key,
	first_name varchar(30) not null,
	last_name varchar(30) not null,
	phone varchar(9) not null,
	email varchar(30) not null,
	base_region varchar(20) not null,
	branch_office varchar(30) not null,
	dob date not null,
	home_address varchar(40) not null,w
	photo varchar(255) not null,
	gender varchar(10);
);

create table attendance_table(
		attendance_id int(5) unsigned auto_increment primary key,
		status int(2) not null,
		sup_remark text not null,
		sup_id int(5) not null,
		sec_off_id int(5) not null,
		time int(50) not null
);

create table report_table(
		rep_id int(5) unsigned auto_increment primary key,
		title varchar(30) not null,
		content text not null,
		sup_id int(5) not null,
		time int(50) not null
);
create table branch_office(
	branch_id int(5) unsigned auto_increment primary key,
	branch varchar(30) not null,
	region varchar(30) not null,
	address varchar(30) not null
);
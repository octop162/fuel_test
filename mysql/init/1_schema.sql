create database if not exists db;
create table db.guestbook (
  id int,
  user varchar(100),
  content varchar(100)
);
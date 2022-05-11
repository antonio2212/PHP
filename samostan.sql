# Ovo je SQL skripta
# baza podataka za samostan
C:\xampp\mysql\bin>mysql -uroot < C:\Users\Katica\Documents\EdunovaPP25\SQL\samostan.sql
drop database if exist samostan;
create database samostan;
use samostan;

 create table osoba(
     sifra int not null primary key auto_increment,
     ime varchar (50) not null,
     prezime varchar (50) not null,
     datum_rodenja datetime,
     oib char (11)
);

create table posao(
    sifra int not null primary key auto_increment,
    naziv varchar (50) not null,
    trajanje int
);

create table svecenici(
    sifra int not null primary key auto_increment,
    osoba int not null,
    posao int not null,
    nadredeni_svecenik boolean
);

create table samostan(
    sifra int not null primary key auto_increment,
    svecenici int not null,
    lokacija varchar (30),
    naziv varchar (30),
    godina_osnutka int 
);


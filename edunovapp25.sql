# Ovo je SQL skripta
# baza podataka za edunovapp25
C:\xampp\mysql\bin>mysql -uroot < C:\Users\Katica\Documents\EdunovaPP25\SQL\edunovapp25.sql
drop database if exist edunovapp25;
create database edunovapp25;
use edunovapp25;
create table osoba(
    ime varchar(50),
    prezime varchar(50),
    email varchar(50),
    oib char(11)
);

create table predavac(
    osoba int,
    iban varchar(50)
);

create table polaznik(
    osoba int,
    brojugovora varchar(10)
);

create table smjer(
    naziv varchar(50),
    cijena decimal(18,2),
    trajanje int,
    upisnina decimal(18,2),
    certificiran boolean
);

create table grupa(
    naziv varchar(20),
    datum_pocetka datetime,
    maksimalno_polaznika int,
    smjer int,
    predavac int
);

create table clan(
    grupa int,
    polaznik int
);
# Ovo je SQL skripta
# baza podataka za edunovapp25
C:\xampp\mysql\bin>mysql -uroot < C:\Users\Katica\Documents\EdunovaPP25\SQL\edunovapp25.sql
drop database if exist edunovapp25;
create database edunovapp25;
use edunovapp25;
create table osoba(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    email varchar(50),
    oib char(11)
);

create table predavac(
    sifra int not null primary key auto_increment,
    osoba int not null,
    iban varchar(50)
);

create table polaznik(
    sifra int not null primary key auto_increment,
    osoba int not null,
    broj_ugovora varchar(10)
);

create table smjer(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    cijena decimal(18,2),
    trajanje int,
    upisnina decimal(18,2),
    certificiran boolean
);

create table grupa(
    sifra int not null primary key auto_increment,
    naziv varchar(20) not null,
    datum_pocetka datetime,
    maksimalno_polaznika int,
    smjer int,
    predavac int
);

create table clan(
    sifra int not null primary key auto_increment,
    grupa int not null,
    polaznik int not null
);

# definiranje vanjskih ključeva
alter table grupa add foreign key (smjer) references smjer (sifra);
alter table grupa add foreign key (predavac) references predavac (sifra);

alter table clan add foreign key (grupa) references grupa (sifra);
alter table clan add foreign key (polaznik) references polaznik (sifra);

alter table polaznik add foreign key (osoba) references osoba (sifra);
alter table predavac add foreign key (osoba) references osoba (sifra);  
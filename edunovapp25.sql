# Ovo je SQL skripta
# baza podataka za edunovapp25
# C:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\Katica\Documents\EdunovaPP25\SQL\edunovapp25.sql
drop database if exists edunovapp25;
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

# unos podataka
# loš način
# 1 - dobivena vrijednost primarnog ključa

insert into smjer values 
(null,'PHP programiranje',5999.99,130,null,false);

# bolji način
# 2

insert into smjer(naziv,cijena)
values ('Java programiranje',5999.99);

# 3

insert into
smjer(sifra,naziv,cijena,trajanje,
upisnina,certificiran)
values (null,'Računovodstvo',4000,120,
300,true);

# 1

insert into grupa
(sifra,naziv,datum_pocetka,maksimalno_polaznika,
smjer,predavac)
values
(null,'PP25','2022-04-23',20,1,null);

# 2

insert into grupa
(sifra,naziv,datum_pocetka,maksimalno_polaznika,
smjer,predavac)
values
(null,'JP26','2022-04-23',20,2,null);

# 1

insert into osoba(sifra,ime,prezime,email,oib)
values (null,'Tomislav','Jakopec','tjakopec@gmail.com',null);

# 2
# unijeti osobu Shaquille O'Neal

insert into osoba (sifra,ime,prezime,email,oib)
values (null,'Shaquille','O''Neal','saki@gmail.com',null);

# jedna insert naredba može unositi više redaka u tablicu
# 3 - 17

insert into osoba(sifra,ime,prezime,email,oib)
values
(null,'Todorović','Filip','filip.tod95@gmail.com',null),
(null,'Majer','Antonio','majer.antonio@gmail.com',null),
(null,'Filipović','Srđan','srdjanfilipovic991@gmail.com',null),
(null,'Krnjaković','Filip','f.krnja@gmail.com',null),
(null,'Jukić','Željko','zeljac00@icloud',null),
(null,'Pavlinušić','Ante','ante.pavlinusic@gmail.com',null),
(null,'Bikić','Ante','bikic.tm@gmail.com',null),
(null,'Rukavina','Antun','antunrukavina@hotmail',null),
(null,'Poljak','Dino','dinopoljak99@gmail.com',null),
(null,'Rous','Leonard','leonardrous123@gmail.com',null),
(null,'Šakić','Marija','sakicmarija35@gmail.com',null),
(null,'Bukovec','Boris','botaosijek@gmail.com',null),
(null,'Kovač','Filip','chilim.dj@gmail.com',null),
(null,'Vuletić','Antonio','avuletic2212@gmail.com',null),
(null,'Andrija','Kruhoberec','akruhoberec1@outlook.com',null);

# 1 - 2

insert into predavac(sifra,osoba,iban)
values (null,1,null),(null,2,null);

# 1 - 15

insert into polaznik(sifra,osoba,broj_ugovora)
values
(null,3,null),
(null,4,null),
(null,5,null),
(null,6,null),
(null,7,null),
(null,8,null),
(null,9,null),
(null,10,null),
(null,11,null),
(null,12,null),
(null,13,null),
(null,14,null),
(null,15,null),
(null,16,null),
(null,17,null);
insert into clan(grupa,polaznik)
values (1,1),(1,2),(1,3),(1,4),(1,5),
(1,6),(1,7),(1,8),(1,9),(1,10),
(1,11),(1,12),(1,13),(1,14),(1,15);


# DZ - prvi dio
# Unijeti smjer Tehničar za mrežu

insert into smjer
(sifra,naziv,cijena,trajanje,
upisnina,certificiran)
values (4,'Tehničar za mrežu',6500,200,
null,false);

# Unijeti svoju užu rodbinu za polaznike

# DZ - drugi dio
# Unesi sebe kao predavača

insert into predavac
(sifra,osoba,iban)
values (3,16,null);

# Postavite sebi svoj OIB

update osoba set oib=30716561582 where sifra=16;

# Obrišite sebe iz baze

delete from osoba where sifra=16;
delete from predavac where sifra=3;
delete from polaznik where sifra=14;
delete from clan where sifra=14;

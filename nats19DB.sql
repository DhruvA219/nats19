CREATE TABLE IF NOT EXISTS `registrations` (
  `email_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `WCAID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('m','f') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'M',
  `birth_date` date NOT NULL DEFAULT '1000-01-01',
  `country_name` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  `222` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `333` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `444` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `555` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `666` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `777` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `333bf` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `333fm` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `333ft` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `333mbf` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `444bf` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `555bf` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `skewb` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `pyram` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `minx` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `sq1` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `clock` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  `333oh` enum('Y','N') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'N',
  PRIMARY KEY (`email_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;


insert into `registrations` (`email_id`, `name`, `WCAID`, `birth_date`,`gender`, `country_name`, `222`, `333`, `444`, `555`, `666`, `777`, `333oh`, `333ft`, `333bf`, `333mbf`, `444bf`, `555bf`, `skewb`, `sq1`, `minx`, `pyram`, `clock`, `333fm` ) VALUES
  ("bansal@gmail.com", "Shivam Bansal","2011BANS02",'1999-12-12','m','India','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("kunal@gmail.com", "Kunal Oak","2015OAKK01",'1989-11-21','m','IndiaN','Y','Y','Y','N','N','Y','Y','Y','Y','N','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("passi@gmail.com", "Piyush Passi","2013PASS01",'1999-03-02','m','India','Y','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N'),
  ("hemang@gmail.com", "Hemang Sarkar","2014SARK01",'1995-03-02','m','India','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("feliks@gmail.com", "Feliks Zemdegs","2009ZEMD01",'1995-12-21','m','Australia','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("sukant.snake@gmail.com", "Sukant Koul","2014KOUL01",'1997-02-25','m','India','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("sukant.cake@gmail.com", "Newkant Koul",NULL,'1997-02-25','m','India','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y');

drop table Competitions;
drop table Continents;
drop table Formats;
drop table Results;
drop table RoundTypes;
drop table Rounds;
drop table Scrambles;
drop table championships;
drop table eligible_country_iso2s_for_championship;


select psychRanks.name,psychRanks.WCAID,singleResult,singleRank,averageResult,averageRank,Countries.name as country  FROM
(select * from 
(select * from (select name,WCAID,best as singleResult,`333`,worldRank as singleRank,country_iso2 from registrations 
  LEFT JOIN (select * from RanksSingle2 where eventId='333') eventRank on WCAID=personId) singleRanks where `333`='Y') eventSolvers
LEFT JOIN (select personId,best as averageResult, worldRank as averageRank FROM RanksAverage2 where eventId='333') averageRanks 
ON averageRanks.personId=eventSolvers.WCAID)  psychRanks
inner join Countries on Countries.iso2= psychRanks.country_iso2 
order by -averageRank desc, -singleRank desc, psychRanks.name asc;



select psychRanks.name,psychRanks.WCAID,singleResult,singleRank,averageResult,averageRank,Countries.name as country  FROM
(select * from 
(select * from (select name,WCAID,best as singleResult,`%s`,worldRank as singleRank,country_iso2 from registrations 
  LEFT JOIN (select * from RanksSingle where eventId='%s') eventRank on WCAID=personId) singleRanks where `%s`='Y') eventSolvers
LEFT JOIN (select personId,best as averageResult, worldRank as averageRank FROM RanksAverage where eventId='%s') averageRanks 
ON averageRanks.personId=eventSolvers.WCAID)  psychRanks
inner join Countries on Countries.iso2= psychRanks.country_iso2 
order by -averageRank desc, -singleRank desc, psychRanks.name asc;

select sum(number_of_people),source,destination,`time` from 
(select number_of_people,source,destination,`time` from user_travel usertravel inner join
travel_catalog ON travel_catalog.item_id=usertravel.item_id where email_id='arupela@worldcubeassociation.org') userdetails group by source,destination,`time`;



create table RanksAverage2 as
  select personId,eventId,best,worldRank from RanksAverage
  inner join registrations
  where personId=WCAID;

create table RanksSingle2 as
  select personId,eventId,best,worldRank from RanksSingle
  inner join registrations
  where personId=WCAID;

  insert into RanksAverage2 
  select personId,eventId,best,worldRank from RanksAverage
  inner join 
  (select * from registrations where email_id='arupela@worldcubeassociation.org' ) registration1
  where personId=WCAID;

  insert into RanksSingle2 
  select personId,eventId,best,worldRank from RanksSingle
  inner join 
  (select * from registrations where email_id='arupela@worldcubeassociation.org' ) registration1
  where personId=WCAID;




insert into `registrations` (`email_id`, `name`, `WCAID`, `birth_date`,`gender`, `country_iso2`, `222`, `333`, `444`, `555`, `666`, `777`, `333oh`, `333ft`, `333bf`, `333mbf`, `444bf`, `555bf`, `skewb`, `sq1`, `minx`, `pyram`, `clock`, `333fm` ) VALUES
  ("arupela@worldcubeassociation.org", "Akash Rupela","2012RUPE01",'1993-06-25','m','IN','N','Y','N','N','Y','N','N','N','N','N','N','Y','N','N','N','N','N','N');






CREATE TABLE IF NOT EXISTS `travel_catalog` (
  `item_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(35) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

INSERT into `travel_catalog` (`item_id`, `source`, `destination`, `time`) VALUES
('cb19','Metro','SNU','11 April, 6:00 P.M.' ),
('cb20','Metro','SNU','12 April, 8:00 A.M.' ),
('cb21','SNU','Metro','12 April, 8:00 P.M.' ),
('cb22','Metro','SNU','13 April, 8:00 A.M.' ),
('cb23','SNU','Metro','13 April, 8:00 P.M.' ),
('cb24','Metro','SNU','14 April, 8:00 A.M.' ),
('cb25','SNU','Metro','14 April, 8:00 P.M.' ),
('cb26','SNU','Metro','15 April, 9:00 A.M.' );

INSERT into `user_travel` (`item_id`, `email_id`, `number_of_people`) VALUES
('cb21','434@gmail.com', 3 );

INSERT into `payment` (`payment_id`, `email_id`, `amount`) VALUES
('cb21','434@gmail.com', 3 );

CREATE TABLE IF NOT EXISTS `user_travel` (
  `item_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_people` int COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;



CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY(`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;




CREATE TABLE IF NOT EXISTS `user_merch` (
  `item_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email_id` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

CREATE TABLE IF NOT EXISTS `merch_catalog` (
  `item_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `price` int COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

INSERT into `merch_catalog` (`item_id`, `name`, `price`) VALUES
('cbcb28-S','T-Shirt (S)',499 ),
('cbcb28-M','T-Shirt (M)',499 ),
('cbcb28-L','T-Shirt (L)',499 ),
('cbcb28-XL','T-Shirt (XL)',499 ),
('cbcb29','Mug',299 ),
('cbcb30','Wrist Band',99 ),
('cbcb31','Cap',249 ),
('cbcb32','Pin Badge',49 ),
('cbcb33','Magnetic Badge',99 ),
('cbcb34','Writing Pad',49 ),
('cbcb35','Keychain',199 ),
('cbcb36','Nats Logo Sticker',19 ),
('cbcb37','Cuber Soul Sticker',19 );



CREATE TABLE IF NOT EXISTS `pageviews` (
  `page` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `view_date` date NOT NULL DEFAULT '1000-01-01',
  `count` int COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;

insert into `pageviews` (`page`,`view_date`,`count`) VALUES
  ('haha','2019-02-01',12);


CREATE TABLE IF NOT EXISTS `logins` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `count` int COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ;


mysql -u root -p nats19 < WCA_export.sql
drop table Competitions;
drop table Continents;
drop table Events;
drop table Formats;
drop table Persons;
drop table Results;
drop table RoundTypes;
drop table Rounds;
drop table Scrambles;
drop table championships;
drop table eligible_country_iso2s_for_championship;

drop table RanksAverage2;
create table RanksAverage2 as
  select personId,eventId,best,worldRank from RanksAverage
  inner join registrations
  where personId=WCAID;

drop table RanksSingle2;
create table RanksSingle2 as
  select personId,eventId,best,worldRank from RanksSingle
  inner join registrations
  where personId=WCAID;



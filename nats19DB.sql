CREATE TABLE IF NOT EXISTS `registrations` (
  `email_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(75) COLLATE utf8_unicode_ci NOT NULL,
  `WCAID` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` enum('m','f') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'M',
  `birth_date` date NOT NULL DEFAULT '1000-01-01',
  `country_iso2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
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


insert into `registrations` (`email_id`, `name`, `WCAID`, `birth_date`,`gender`, `country_iso2`, `222`, `333`, `444`, `555`, `666`, `777`, `333oh`, `333ft`, `333bf`, `333mbf`, `444bf`, `555bf`, `skewb`, `sq1`, `minx`, `pyram`, `clock`, `333fm` ) VALUES
  ("bansal@gmail.com", "Shivam Bansal","2011BANS02",'1999-12-12','m','IN','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("kunal@gmail.com", "Kunal Oak","2015OAKK01",'1989-11-21','m','IN','Y','Y','Y','N','N','Y','Y','Y','Y','N','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("passi@gmail.com", "Piyush Passi","2013PASS01",'1999-03-02','m','IN','Y','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N','N'),
  ("hemang@gmail.com", "Hemang Sarkar","2014SARK01",'1995-03-02','m','IN','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("feliks@gmail.com", "Feliks Zemdegs","2009ZEMD01",'1995-12-21','m','AU','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("sukant.snake@gmail.com", "Sukant Koul","2014KOUL01",'1997-02-25','m','IN','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'),
  ("sukant.cake@gmail.com", "Newkant Koul",NULL,'1997-02-25','m','IN','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y');

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
(select * from (select name,WCAID,best as singleResult,444bf,worldRank as singleRank,country_iso2 from registrations 
  LEFT JOIN (select * from RanksSingle where eventId='444bf') eventRank on WCAID=personId) singleRanks where 444bf='Y') eventSolvers
LEFT JOIN (select personId,best as averageResult, worldRank as averageRank FROM RanksAverage where eventId='444bf') averageRanks 
ON averageRanks.personId=eventSolvers.WCAID)  psychRanks
inner join Countries on Countries.iso2= psychRanks.country_iso2 
order by -averageRank desc, -singleRank desc, psychRanks.name asc;




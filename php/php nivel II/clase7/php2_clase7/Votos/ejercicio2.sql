CREATE TABLE votos (
  id tinyint(3) unsigned NOT NULL auto_increment,
  votos1 int(10) unsigned NOT NULL default '0',
  votos2 int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (id)
) TYPE=MyISAM COMMENT='Votos registrados en la encuesta';



INSERT INTO votos VALUES (1, 49, 12);

    

    

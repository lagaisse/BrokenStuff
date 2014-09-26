#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


CREATE TABLE Report(
        r_id          int (11) Auto_increment  NOT NULL ,
        r_name        Text NOT NULL ,
        r_add_date    Datetime NOT NULL ,
        r_end_date    Datetime ,
        r_geoloc_lat  Float ,
        r_geoloc_long Float ,
        r_picture     Varchar (255) ,
        r_status      Enum ("open","closed") ,
        r_nb_vote_end Int ,
        lo_id         Int ,
        PRIMARY KEY (r_id )
)ENGINE=InnoDB;


CREATE TABLE Location(
        lo_id          int (11) Auto_increment  NOT NULL ,
        lo_code        Varchar (6) NOT NULL ,
        lo_name        Varchar (255) NOT NULL ,
        lo_geoloc_lat  Float ,
        lo_geoloc_long Float ,
        PRIMARY KEY (lo_id ) ,
        UNIQUE (lo_code )
)ENGINE=InnoDB;


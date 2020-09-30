# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:52:04
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "c_spacial_gif"
#

CREATE PROCEDURE `c_spacial_gif`()
BEGIN
          
    drop table bb_gift_spacial;        
    drop table bb_unit_spacial_mhee;

    create table bb_gift_spacial    
    as    
    select *    
    from gift_spacial;  
       
    create table bb_unit_spacial_mhee    
    as    
    select *    
    from unit_spacial_mhee;


    update gift_spacial
    set
       sid = null,
       unit = null,
       status = null;   

    update unit_spacial_mhee
    set 
        status = null,
        seq = null;
END;

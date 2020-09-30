# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:53:33
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "P_chk_little_status2"
#

CREATE PROCEDURE `P_chk_little_status2`(Vuint varchar(255))
BEGIN

  declare Vstatus int(2);
  
  select  status
    into  Vstatus
  from    unit_class
  where   unit = Vuint;
  
     update   unit_class
     set    
          random = 0;
   
  IF Vstatus = 0 THEN
    
    update unit_class
    set random = 1
    where unit = Vuint;
  ELSE 
     update unit_class
    set random = 2
    where unit = Vuint;
  END IF;
  
END;

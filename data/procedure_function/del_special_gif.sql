# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:52:19
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "del_special_gif"
#

CREATE PROCEDURE `del_special_gif`(`Param` int(2))
BEGIN

     update gift_spacial     
     set     
        sid = null,
        unit = null,
        status = null        
     where number = Param;

    update unit_spacial_mhee     
    set 
        status = null,
        seq = null                
    where seq = Param;

END;

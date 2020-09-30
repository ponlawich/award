# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:54:01
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "p_giftnext"
#

CREATE PROCEDURE `p_giftnext`(Vgift int)
BEGIN
        -- clear state 
        update 	gift_spacial
				set					enable = 0;
				
        update 	gift_spacial
				set					enable = 1
				where			number = Vgift;

/*            LOG                   */

        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'Next Gift', concat('เลือกรางวัลถัดไป ID ที่ ',Vgift,' ชื่อ ',(select name from gift_spacial where number = Vgift)), 'p_giftnext เป็น procedure ใน db');        

/*            LOG                   */                                    


END;

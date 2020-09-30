# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:53:02
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "f_random_total"
#

CREATE PROCEDURE `f_random_total`(Vnum int)
BEGIN

   declare buff   int;
    


                --  Random person limit Vnum

 							delete from gift100;
													
 															insert into gift100
                select id,name,unit_show,unit_case
                from 		person
                order by RAND() limit Vnum;



/*            LOG                   */

        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'radom', concat('รางวัล 100 คน ',' ทำเพื่อเตรียมทหารรุ่น 18'), 'f_random_total เป็น procudure ใน db');        

/*            LOG                   */


END;

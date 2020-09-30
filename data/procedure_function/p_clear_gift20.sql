# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:53:48
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "p_clear_gift20"
#

CREATE PROCEDURE `p_clear_gift20`(gid int(2))
begin
   DECLARE pid   int;
   DECLARE pname varchar(200); 
   

/*SET pid   = 0; 
SET pname = 0; */

/*select person of gift*/
    select sid
      into pid
    from   gift_20
    where  number = gid;

/*select person name*/
    select name
      into pname
    from   person
    where  id = pid;

/*clear status gift*/
    update gift_20
    set     
            status = 0,
            unit = null,
            sid = null
    where   number = gid;
               
    insert into log_gift(DT_set,mode,desc_gift,from_pos)
    values(now(), 'clear gift_20', concat('cancel gift id ',gid,' of person name (',')',pid,' ',pname), 'p_clear_gift20 เป็น procudure ใน db'); 
end;

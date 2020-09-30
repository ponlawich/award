# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:55:06
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "P_waiver"
#

CREATE PROCEDURE `P_waiver`(Vgid int)
BEGIN
    DECLARE    Uid     varchar(20);
    DECLARE    Uname   varchar(100);
    DECLARE    Pname   varchar(100);
    DECLARE    Pid     varchar(20);
    
     select unit_id,unit,sid
       into Uid,Uname,Pid
     from   superaward_status
     where  number = Vgid;
     
     select name
       into Pname
     from   person
     where  id = Pid;
    
     update superaward_status
     set
            sid       = null,
            unit      = null,
            unit_id   = null,
            status    = 0
     where  sid = Pid;
    
     update superaward_unit
     set
            status    = 0
     where  unit_id = Uid;
     
     
/*            LOG                   */

        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'waiver_person', concat('สละสิทธิ์ของหน่วย : ',Uname,' รหัส : ',Uid,' | ผู้สละสิทธิ์:',Pname,' รหัส : ',Pid ), 'P_waiver เป็น Procedure ใน db');    

/*            LOG                   */

END;

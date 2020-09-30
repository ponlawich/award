# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:54:36
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "P_Random_Super"
#

CREATE PROCEDURE `P_Random_Super`(VawardID int)
BEGIN
     DECLARE RUnit_id        varchar(20);
     DECLARE RPerson_id      varchar(20);
     
     DECLARE RUnitName       varchar(200);
     DECLARE RAwardName      varchar(200);
     DECLARE RPersondName    varchar(200);

     SET RPerson_id = 0;

     select name
       into RAwardName
     from   superaward_status
     where  number = VawardID;
     
     select unit_id,name
       into RUnit_id,RUnitName
     from   superaward_unit
     where  status = 0
     ORDER BY RAND()
     LIMIT 1 ;
     
     select id,name
       into RPerson_id,RPersondName
     from   person
     where  status_super = 0
     and    unit_case = RUnitName
     ORDER BY RAND()
     LIMIT 1 ;

     if RPerson_id = 0 then

        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'radom_super', concat('รางวัลใหญ่(Super Aword) ID :',VawardID,' Name ',RAwardName,' | ผู้ได้รับ  ERROR | หน่วยใน superaward unit  Name : ',RUnitName, ' ID :',RUnit_id ), 'P_Random_Super เป็น Procedure ใน db');        

        select id,name
          into RPerson_id,RPersondName
        from   person
        where  status_super = 0
        ORDER BY RAND()
        LIMIT 1 ;
        
        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'radom_super', concat('รางวัลใหญ่(Super Aword) ID :',VawardID,' Name ',RAwardName,' | สุ่มใหม่หลังจาก ERROR ผู้ได้รับ  ID :',RPerson_id, '  Name ',RPersondName,' | หน่วยใน superaward unit  Name : ',RUnitName, ' ID :',RUnit_id ), 'P_Random_Super เป็น Procedure ใน db');        
 
     end if;
     

/*   1     */     
     update person
     set
            status_super = 1
     where  id = RPerson_id;
  
/*   2     */       
     update superaward_status 
     set
            sid = RPerson_id,
            unit = RUnitName,
            unit_id = RUnit_id,
            status = 1
     where  number = VawardID;
 
/*   3     */        
     update superaward_unit
     set
            status = 1
     where  unit_id = RUnit_id;

/*            LOG                   */

        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'radom_super', concat('รางวัลใหญ่(Super Aword) ID :',VawardID,' Name ',RAwardName,' | ผู้ได้รับ  ID :',RPerson_id, '  Name ',RPersondName,' | หน่วยใน superaward unit  Name : ',RUnitName, ' ID :',RUnit_id ), 'P_Random_Super เป็น Procedure ใน db');        

/*     
   /*
     select id 
      into gift
     from gift_little
     where type = 'A' and status = 0
     ORDER BY RAND()
     LIMIT 1 ;
     
     select id 
      into person
     from person
     where rank >= 5 and rank <= 7 and status_little = 0 
     ORDER BY RAND()
     LIMIT 1 ;
     
     update gift_little
     set 
          status = 1, 
          person_id = person
     where id = gift;
     */
     
END;

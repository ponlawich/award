# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:54:28
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "P_Random_Little"
#

CREATE PROCEDURE `P_Random_Little`(Vuint varchar(255),Vtype varchar(1),Vclass int)
BEGIN
   declare gift Int; 
   declare person varchar(20); 
   declare gift_name varchar(255); 
   declare person_name varchar(255); 
   declare buff_unit varchar(255); 

  SET person = 0;
   
     select id,name
      into gift,gift_name
     from gift_little
     where type = Vtype and status = 0
     ORDER BY RAND()
     LIMIT 1 ;
    
    IF Vclass = 1 THEN 
         select id,name,unit_case
          into person,person_name,buff_unit
         from person
         where rank between 5 and 7  and status_little = 0 and unit_case = Vuint
         ORDER BY RAND()
         LIMIT 1 ;
    ELSEIF Vclass = 2 THEN 
         select id,name,unit_case
          into person,person_name,buff_unit
         from person
         where rank between 8 and 11 and status_little = 0 and unit_case = Vuint
         ORDER BY RAND()
         LIMIT 1 ;
    ELSE 
         select id,name,unit_case
          into person,person_name,buff_unit
         from person
         where rank > 11 and status_little = 0 and unit_case = Vuint
         ORDER BY RAND()
         LIMIT 1 ;
    END IF;
     
     update gift_little
     set 
          status = 1, 
          person_id = person
     where id = gift;
     
     update person_main
     set
          status_little = 1
     where id = person;
     
      update person
     set
          status_little = 1
     where id = person;

    update unit_class
    set
        status = 1
    where unit = Vuint;
     /*            LOG    values(now(), 'little_radom', concat('รางวัลย่อยประเภท ERROR ',Vtype,' | รหัส ',gift, ' ',gift_name,' | ผู้ได้รับ ',person, ' ',person_name ,' | หน่วย ',' ',buff_unit), 'P_Random_Little เป็น function ใน db');               */

        /*insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'radom', concat('รางวัลประเภท ',buff_giftType,' | รหัส ',VgiftID, ' ',gift_name,' | ผู้ได้รับ ',person_get, ' ',person_name ,' | หน่วย ', buff_unitId,' ',buff_unit), 'f_random_person เป็น function ใน db');        
*/

END;

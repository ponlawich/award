# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:53:23
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "p_cancel_person"
#

CREATE PROCEDURE `p_cancel_person`(Vid int)
BEGIN
     declare buff int;    
     declare gift_name varchar(255);  
     declare gift_num  int; 
     
     declare unit_name varchar(255);   
     
     declare person_name varchar(255);      


       select  unit, name, number  
         into  buff, gift_name, gift_num    
       from    gift_spacial       
       where   sid = Vid;              

       select  name       
         into  unit_name
       from unit_spacial       
       where no = buff;

       select  name    
         into  person_name  
       from    person       
       where  id = Vid;
/*-----------------------------------------*/
        --  clear gift
        update gift_spacial
        set
	       sid     = null,
           unit    = null,
           status  = 0
        where sid = Vid;    
                
        -- clear  state unit of unit_special
        update unit_spacial        
        set        
           status = 0           
        where  no = buff;        

/*            LOG                   */
        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'cancel_person', concat('สละสิทธิ์ของหน่วย ',buff,' ',unit_name,' | ',gift_name,' รหัสรางวัล ',gift_num,' | รหัสกำลังพลที ',Vid,' ',person_name), 'p_cancel_person เป็น function ใน db');    

/*            LOG                   */

END;

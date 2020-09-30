# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:52:29
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for function "f_random_person"
#

CREATE FUNCTION `f_random_person`(VgiftID int) RETURNS varchar(11) CHARSET utf8
BEGIN

   declare buff_giftType Int; 
   declare gift_name    varchar(255); 
   declare person_get    varchar(50);   
   declare person_name    varchar(255);    
   declare buff_unit     varchar(50);  
   declare buff_unitId   int;


   SET     person_get := '0';
       --  get gift type

        select type, name 
          into buff_giftType, gift_name    
        from   gift_spacial        
        where  number = VgiftID;        





           if( buff_giftType <> 3)then
                --  Random unit from gift type
                select no,name  
                  into buff_unitId,buff_unit   
                from unit_spacial
                where status < 1
                and type = buff_giftType
                order by RAND() limit 1;

                      

                -- Random person for gift

                select id, name 
                  into person_get,person_name
                from   person     
                where  unit_case = buff_unit        
                 and   status = 0
        		order by RAND() limit 1;

                if(person_get = '0')  then              
                    select id, name 
                      into person_get,person_name
                    from   person     
                    where  status = 0
            		order by RAND() limit 1;                 
                end if;
        

                --  update   gift_spacial

                update gift_spacial        

                set        

                       sid    = person_get,

                       unit   = buff_unitId,

                       status = 1                    

                where  number = VgiftID;

                

                --  update   unit_spacial                                    

                update unit_spacial

                set

                      status = 1,

                      type   = buff_giftType

                where no     = buff_unitId; 

            else            

                set buff_unitId = null;                
                set buff_unit   = null;
                --  Big gift

                -- Random person for gift

                select id, name

                  into person_get,person_name

                from   person         

        		order by RAND() limit 1;        



                --  update   gift_spacial

                update gift_spacial        

                set        

                       sid    = person_get,

                       status = 1                    

                where  number = VgiftID;                



            end if;                 

 
         update 	gift_spacial
				set					enable = 1;

/*            LOG                   */

        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'radom', concat('รางวัลประเภท ',buff_giftType,' | รหัส ',VgiftID, ' ',gift_name,' | ผู้ได้รับ ',person_get, ' ',person_name ,' | หน่วย ', buff_unitId,' ',buff_unit), 'f_random_person เป็น function ใน db');        

/*            LOG                   */

        --  update person     can't update in store function   becuase use by another session

       /* 

        update person

        set

               status = 1

        where  id     = person_get;

        */



     RETURN  person_get;

END;

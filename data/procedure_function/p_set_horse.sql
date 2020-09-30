# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:54:43
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "p_set_horse"
#

CREATE PROCEDURE `p_set_horse`(VhorseId int,VhorseDirec varchar(2))
begin

     DECLARE HrDr   int;     
          
          if VhorseDirec = 'F' then    SET HrDr = 1;      
          else                         SET HrDr = -1;          
          end if;          

        -- set horse number        
        if VhorseId = 1 then
            update control_page_state    
            set status  = 1, 
                marg_val = HrDr   
            where    marg_name = 'HORSE_1';          
                         
        elseif VhorseId = 2 then     
            update control_page_state    
            set status  = 1, 
                marg_val = HrDr   
            where    marg_name = 'HORSE_2';                       
        elseif VhorseId = 3 then     
            update control_page_state    
            set status  = 1, 
                marg_val = HrDr   
            where    marg_name = 'HORSE_3';                       
        elseif VhorseId = 4 then     
            update control_page_state    
            set status  = 1, 
                marg_val = HrDr   
            where    marg_name = 'HORSE_4';                        
        elseif VhorseId = 5 then     
            update control_page_state    
            set status  = 1, 
                marg_val = HrDr   
            where    marg_name = 'HORSE_5';                      
        elseif VhorseId = 6 then     
            update control_page_state    
            set status  = 1, 
                marg_val = HrDr   
            where    marg_name = 'HORSE_6';                        

        end if;   

end;

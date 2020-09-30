# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:52:52
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for function "f_random_sub2"
#

CREATE FUNCTION `f_random_sub2`(Vgid varchar(10)) RETURNS varchar(11) CHARSET utf8
BEGIN

     declare person_get varchar(11);    

             if(Vgid='all')then                

                select id               
                  into person_get
                from   person                
                where  status = 0               
                 and   id not in                 
                       (                       
                          select sid                          
                          from   gift_20                          
                          where  sid is not null
                       )
                order by RAND() limit 1;                   

             else             

                select id               
                  into person_get
                from   person                
                where  status = 0  
                 and   gid =  Vgid             
                 and   id not in                 
                       (                       
                          select sid                          
                          from   gift_20                          
                          where  sid is not null
                       )
                order by RAND() limit 1;  
                  
             end if;                            
/*

             if(Vgid='all')then   
                select id               
                  into person_get
                from 		person                
                where  status = 0  
                 and   gid =  Vgid             
                 and   id not in                 
                       (                       
                          select sid                          
                          from   gift_20                          
                          where  sid is not null
                       )
                order by RAND() limit 1;   
             else
                select id               
                  into person_get
                from 		person                
                where  status = 0  
                 and   gid =  Vgid             
                 and   id not in                 
                       (                       
                          select sid                          
                          from   gift_20                          
                          where  sid is not null
                       )
                order by RAND() limit 1;    
             end if;                
*/
 RETURN  person_get;
END;

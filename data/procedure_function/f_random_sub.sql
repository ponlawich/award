# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:52:39
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "f_random_sub"
#

CREATE PROCEDURE `f_random_sub`()
BEGIN
   declare buff,Cround   int;   
   DECLARE Vsid,Vunit,Qtarname varchar(200); 
   DECLARE Gid,Vround,Qtarnum int; 
                
   
   SET buff     = 0;    
   SET Vsid     = '0';   

       /*  set num of rand from table */
       select 	marg_val       
         into   Cround
       from	    control_page_state
       where 	marg_name = 'num_of_ran';
   
       select ifnull(max(round),0) + 1       
         into Vround         
       from   gift_20;
     
       REPEAT     	       

               select min(no),name       
                 into Qtarnum,Qtarname         
               from   unit_specail_sub
               where  status = 0;       
                       
       /* insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'test', concat('Debug 1',Qtarnum,Qtarname), 'f_random_sub เป็น procudure ใน db'); */        

               update unit_specail_sub               
               set               
                      status = 1                      
               where  no = Qtarnum;

       /* insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'test', concat('Debug 2 update unit_specail_sub'), 'f_random_sub เป็น procudure ใน db');  */         

                      select min(number)  
                       into  Gid                    
                      from   gift_20                      
                      where  status = 0;                     


       /* insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'test', concat('Debug 3 Gid',Gid), 'f_random_sub เป็น procudure ใน db');  */         

                /* NULL from select */                

                select f_random_sub2(Qtarname),Qtarname                
                  into Vsid,Vunit;                  
                                
                if (Vsid='0') then                
                    select f_random_sub2('all'),'Ext'                
                      into Vsid,Vunit; 
                end if;
  /*   
                select id,gid                
                  into Vsid,Vunit
                from 		person                
                where  status = 0  
                 and   gid =  Qtarname             
                 and   id not in                 
                       (                       
                          select sid                          
                          from   gift_20                          
                          where  sid is not null
                       )
                order by RAND() limit 1;  
   */                     

       /* insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'test', concat('Debug 4 random ',Vsid,Vunit), 'f_random_sub เป็น procudure ใน db');  */         
                               
                /* WORK*/
                update gift_20
                set    
                    sid  = Vsid,
                    unit = Vunit,
                    status = 1,                    
                    round = Vround
                where number = Gid;                


       /* insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'test', concat('Debug 5 update ',Vsid,Vunit,Vround,Gid), 'f_random_sub เป็น procudure ใน db'); */          
                                
                /* NOT WORK*/
                update person
                set
                   status = 1
                where id =  Vsid;


       /* insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'test', concat('Debug 6 update person ',Vsid), 'f_random_sub เป็น procudure ใน db');     */      

/*            LOG                   */
        insert into log_gift(DT_set,mode,desc_gift,from_pos)
        values(now(), 'radom', concat('รางวัล ย่อย 20 รางวัล ',' รอบที่',Vround,' ผู้ได้รับ ',Vsid,' หน่วย ',Vunit), 'f_random_sub เป็น procudure ใน db');        
/*            LOG                   */
                SET buff = buff + 1;  
       UNTIL buff >= Cround END REPEAT;
END;

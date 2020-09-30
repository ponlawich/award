# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:55:15
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "RRRRR"
#

CREATE PROCEDURE `RRRRR`(Vuint varchar(255))
BEGIN
  DECLARE Vcount int;
  DECLARE Vc1a int;
  DECLARE Vc2a int;
  DECLARE Vc3a int;
  
  DECLARE Vc1b int;
  DECLARE Vc2b int;
  DECLARE Vc3b int;
  
  DECLARE Vc1c int;
  DECLARE Vc2c int;
  DECLARE Vc3c int;
  
  
  select  c1a*1
    into  Vc1a
  from    unit_class
  where   unit = Vuint;
  
  select  c2a*1
    into  Vc2a
  from    unit_class
  where   unit = Vuint;
  
   select  c3a*1
    into  Vc3a
  from    unit_class
  where   unit = Vuint;
  
  select  c1b*1
    into  Vc1b
  from    unit_class
  where   unit = Vuint;

  select  c2b*1
    into  Vc2b
  from    unit_class
  where   unit = Vuint;
  
  select  c3b*1
    into  Vc3b
  from    unit_class
  where   unit = Vuint; 
  
  select  c1c*1
    into  Vc1c
  from    unit_class
  where   unit = Vuint;

  select  c2c*1
    into  Vc2c
  from    unit_class
  where   unit = Vuint;
  
  select  c3c*1
    into  Vc3c
  from    unit_class
  where   unit = Vuint; 
 

/*  CLASS A  */
           
             SET Vcount = 1;
              while Vcount <= Vc1a 
              do
                call P_Random_Little(Vuint,'A',1);
                SET Vcount = Vcount+1;
              end while;
            
             SET Vcount = 1;
              while Vcount <= Vc2a 
              do
                call P_Random_Little(Vuint,'A',2);
                SET Vcount = Vcount+1;
              end while;
             
              SET Vcount = 1;
              while Vcount <= Vc3a 
              do
                call P_Random_Little(Vuint,'A',3);
                SET Vcount = Vcount+1;
              end while;
             
/*  CLASS A  */   
/*  CLASS B  */           
             
              SET Vcount = 1;
              while Vcount <= Vc1b 
              do
                call P_Random_Little(Vuint,'B',1);
                SET Vcount = Vcount+1;
              end while;
             
              SET Vcount = 1;
              while Vcount <= Vc2b 
              do
                call P_Random_Little(Vuint,'B',2);
                SET Vcount = Vcount+1;
              end while;
           
              SET Vcount = 1;
              while Vcount <= Vc3b 
              do
                call P_Random_Little(Vuint,'B',3);
                SET Vcount = Vcount+1;
              end while;
             
/*  CLASS B  */ 
/*  CLASS C  */               
            
             SET Vcount = 1;
              while Vcount <= Vc1c 
              do
                call P_Random_Little(Vuint,'C',1);
                SET Vcount = Vcount+1;
              end while;
            
              SET Vcount = 1;
              while Vcount <= Vc2c 
              do
                call P_Random_Little(Vuint,'C',2);
                SET Vcount = Vcount+1;
              end while;
            
              SET Vcount = 1;
              while Vcount <= Vc3c 
              do
                call P_Random_Little(Vuint,'C',3);
                SET Vcount = Vcount+1;
              end while;
             
 /*  CLASS C  */             
              


END;

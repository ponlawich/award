# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:53:15
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for function "hello"
#

CREATE FUNCTION `hello`() RETURNS char(50) CHARSET utf8
    DETERMINISTIC
BEGIN
    
     DECLARE SumA_unit int;
     DECLARE SumB_unit int;
     DECLARE SumC_unit int;
     DECLARE CountA_gift int;
     DECLARE CountB_gift int;
     DECLARE CountC_gift int;
     DECLARE CheckA_gift varchar(100);
     DECLARE A varchar(255);
   
      SELECT (SUM(`c1a`) + SUM(`c2a`) + SUM(`c3a`)) 
       INTO SumA_unit 
      FROM `unit_class`;
  
      SELECT (SUM(`c1b`) + SUM(`c2b`) + SUM(`c3b`)) 
        INTO SumB_unit 
      FROM `unit_class`;
  
      SELECT (SUM(`c1c`) + SUM(`c2c`) + SUM(`c3c`)) 
        INTO SumC_unit 
      FROM `unit_class`;
      
      SELECT COUNT(type)
        INTO CountA_gift
      FROM gift_little
      where type like '%A%';
      
      SELECT COUNT(type) as totle
        INTO CountB_gift
      FROM gift_little
      where type like '%B%';

      SELECT COUNT(type) as totle
         INTO CountC_gift
      FROM gift_little
      where type like '%C%';

      SET A = '';
   
      IF SumA_unit = CountA_gift 
      THEN 
       SET A = concat(A,':','0');
      ELSE 
        SET A = concat(A,':','1');
      END IF;
      
        IF SumB_unit = CountB_gift 
      THEN 
       SET A = concat(A,':','0');
      ELSE 
        SET A = concat(A,':','1');
      END IF;
      
      IF SumC_unit = CountC_gift 
      THEN 
       SET A = concat(A,':','0');
      ELSE 
        SET A = concat(A,':','1');
      END IF;
 
      RETURN A;
END;

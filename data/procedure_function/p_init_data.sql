# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:54:20
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "p_init_data"
#

CREATE PROCEDURE `p_init_data`()
begin

/**********************           New 2018 ******************************/
/**********************           New 2018 ******************************/
/**********************           New 2018 ******************************/

    update person
    set     
            status_super = 0,
            status_little =0;            
/*
    where   id < 211;  
*/              
    update superaward_status
    set             
            enable = 1,
            status = 0,
            sid    = null,
            unit   = null,
            unit_id = null;            

    update superaward_unit    
    set    
            /*type = 0,*/
            status = 0;            

    /*   ตางรางรางวัลย่อย   กำลังจะเลิกใช้งาน*/
    update gift_20
    set
    	sid = null,
    	unit = null, 
        round = 0,   
    	status = 0;    



/*   KLA    */
/*   KLA    */
/*   KLA    */
     update unit_specail_sub     
     set     
        status = 0;
        
    update person
    set status_little = 0;
    
    update person_main
    set status_little = 0;
    
    update gift_little
    set status = 0 ,person_id = 0;
    

end;

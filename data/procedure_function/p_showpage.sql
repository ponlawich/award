# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:54:59
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "p_showpage"
#

CREATE PROCEDURE `p_showpage`(Vpage int)
BEGIN
        -- clear state 
        update control_page    
        set page_set  = 0,    
            page_read = 0;  
                                    
        -- set state of page
        update control_page    
        set page_set     = 1,    
            page_read    = 1
        where page_id = Vpage;  
END;

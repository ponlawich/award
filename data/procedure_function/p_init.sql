# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:54:11
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "p_init"
#

CREATE PROCEDURE `p_init`()
BEGIN
          
        update control_page_state
        set
	       status = 1
				 where marg_name <> 'REFRESH';                  

END;

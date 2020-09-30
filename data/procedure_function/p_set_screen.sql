# Host: localhost  (Version: 5.5.45)
# Date: 2018-12-21 22:54:51
# Generator: MySQL-Front 5.3  (Build 4.4)

/*!40101 SET NAMES utf8 */;

#
# Source for procedure "p_set_screen"
#

CREATE PROCEDURE `p_set_screen`(Sname varchar(200),Vcase varchar(100))
BEGIN
                                    
        if Sname = 'read' then        
                        update control_page_state    
                        set 
                                status       = 1  
                        where   marg_name in ('TOP','BOTTOM','LEFT','RIGHT');
        end if;

        if Vcase = 'inc' then          
           if      Sname = 'TOP' then
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val + 1) ,
                                status       = 1  
                        where   marg_name    = 'TOP';                        
           elseif  Sname = 'BOTTOM' then     
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val + 1)  ,
                                status       = 1    
                        where   marg_name    = 'BOTTOM';                    
           elseif  Sname = 'LEFT' then     
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val + 1)  ,
                                status       = 1    
                        where   marg_name    = 'LEFT';                  
           elseif  Sname = 'RIGHT' then     
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val + 1)  ,
                                status       = 1   
                        where   marg_name    = 'RIGHT';                 
           elseif  Sname = 'MRG_BR' then     
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val + 4)  ,
                                status       = 1   
                        where   marg_name    = 'MRG_LEFT_BLOCKRN';    
           end if;
           
        elseif Vcase = 'dec' then     
           if      Sname = 'TOP' then
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val - 1) ,
                                status       = 1     
                        where   marg_name    = 'TOP';                        
           elseif  Sname = 'BOTTOM' then     
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val - 1) ,
                                status       = 1     
                        where   marg_name    = 'BOTTOM';                    
           elseif  Sname = 'LEFT' then     
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val - 1) ,
                                status       = 1     
                        where   marg_name    = 'LEFT';                  
           elseif  Sname = 'RIGHT' then     
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val - 1) ,
                                status       = 1     
                        where   marg_name    = 'RIGHT';               
           elseif  Sname = 'MRG_BR' then     
                        update control_page_state    
                        set 
                                marg_val     =  (marg_val - 4) ,
                                status       = 1     
                        where   marg_name    = 'MRG_LEFT_BLOCKRN';    
           end if;
        end if;
                

END;

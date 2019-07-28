// media query event handler
var mq = window.matchMedia( "(min-width: 570px)" );

if (mq.matches) {
    $(document).ready(function(){
        $("#signup_btn").click(function(){
            $("#main").animate({left:"25%"},1000); 
    
            $("#loginform").css("visibility","hidden");
            $("#loginform").animate({left:"25%"},400);
            
            $("#signupform").animate({left:"25%"},1000);
            $("#signupform").css("visibility","visible");
        }); 
        
        $("#login_btn").click(function(){
            $("#main").animate({left:"75%"},1000);
    
            $("#signupform").css("visibility","hidden");
            $("#signupform").animate({left:"75%"},400);
            
            $("#loginform").animate({left:"75%"},1000);
            $("#loginform").css("visibility","visible");
        });
    });
    } else {
        $(document).ready(function(){
            $("#signup_btn").click(function(){
                $("#main").animate({top:"75%"},1000); 
        
                $("#loginform").css("visibility","hidden");
                $("#loginform").animate({top:"75%"},400);
                
                $("#signupform").animate({top:"75%"},1000);
                $("#signupform").css("visibility","visible");
            }); 
            
            $("#login_btn").click(function(){
                $("#main").animate({top:"25%"},1000);
        
                $("#signupform").css("visibility","hidden");
                $("#signupform").animate({top:"25%"},400);
                
                $("#loginform").animate({top:"25%"},1000);
                $("#loginform").css("visibility","visible");
            });
        });
    }


 

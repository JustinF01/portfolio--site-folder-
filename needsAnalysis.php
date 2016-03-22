<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="keywords" content="website development services, web development, web design, graphic design, design portfolio, justin fester, design" />
    <meta name="description" content="The exclusive web and graphic design portfolio, Brought to you by Justin Fester and his team of designers." />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Justin Fester|Designer|Developer</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Actor|Raleway:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style.css"> 
    
  </head>
  <body>
        <nav id="mainNav" class="clearfix">
              <div id="logoPlaceholder">
                    <a href="index.php">
                      	<img src="images/portfolio-logo.svg" alt="Eagle Eye Design Studio Logo" id="siteLogo">
                    </a>
              </div>
              
              <div class="mobileNav">
                  <div class="hamburgerBar"></div>
                  <div class="hamburgerBar"></div>
                  <div class="hamburgerBar"></div>
              </div>
              
              <ul class="navLinks">
                <li class="navItem"><a href="index.php#services">SERVICES</a></li>
                <li class="navItem"><a href="index.php#about">ABOUT</a></li>
                <li class="navItem"><a href="index.php#portfolio">PORTFOLIO</a></li>
                <li class="navItem"><a href="index.php#contact">CONTACT</a></li>
                <li class="needsButton button">Needs Analysis</li>
              </ul>   
        </nav>
        
        <section class="needsAnalysisForm">
            <h1>Your Business Brief</h1>
            <p>Fill out this brief in order for me to get a better understanding of what it is that you need. I will contact you to discuss the project further.</p>
        	<div id='crmWebToEntityForm'>
               <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
               <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads1865198000000111011 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>


                    <input type='text' style='display:none;' name='xnQsjsdp' value='361f47feb389ce6378bc8fcd60e44dc636241105c7486f43ed224c6f94aba4bd'/>
                    <input type='hidden' name='zc_gad' id='zc_gad' value=''/>
                    <input type='text' style='display:none;' name='xmIwtLD' value='281a490d00251c194a5411400ca6ed9fa83559eca7c28d8ec87fef6145a271b1'/>
                    <input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

                    <input type='text' style='display:none;' name='returnURL' value='http&#x3a;&#x2f;&#x2f;www.designbiz.co.za&#x2f;index.php' /> 
                     

                      
                    <label for="fName">First Name</label>
                    <input id="fName" type='text' name='First Name' />
                    

                    <label for="lName">Last Name<span style='color:red;'>*</span></label>
                    <input id="lName" type='text' name='Last Name' />

                    <label for="email">Email<span style='color:red;'>*</span></label>
                    <input id="email" type='text' name='Email' />

                    <label for="company">Company Name</label>
                    <input id="company" type='text' name='Company' />

                    <label for="website">Website</label>
                    <input id="website" type='text' name='Website' />

                    <label for="userBrief">Brief<span style='color:red;'>*</span> </label>
                    <textarea id="userBrief" name='Description' rows='5'></textarea>

                    <input class="button" type='submit' value='Submit' />
                    <input type='reset' class="button" value='Reset' />
                
                    <script>
                      var mndFileds=new Array('Last Name','Email','Description');
                      var fldLangVal=new Array('Last Name','Email','Brief');
                      var name='';
                      var email='';

                      function checkMandatory() {
                      for(i=0;i<mndFileds.length;i++) {
                        var fieldObj=document.forms['WebToLeads1865198000000111011'][mndFileds[i]];
                        if(fieldObj) {
                        if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
                         if(fieldObj.type =='file')
                          { 
                           alert('Please select a file to upload'); 
                           fieldObj.focus(); 
                           return false;
                          } 
                        alert(fldLangVal[i] +' cannot be empty'); 
                                fieldObj.focus();
                                return false;
                        }  else if(fieldObj.nodeName=='SELECT') {
                               if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
                          alert(fldLangVal[i] +' cannot be none'); 
                          fieldObj.focus();
                          return false;
                           }
                        } else if(fieldObj.type =='checkbox'){
                         if(fieldObj.checked == false){
                          alert('Please accept  '+fldLangVal[i]);
                          fieldObj.focus();
                          return false;
                           } 
                         } 
                         try {
                             if(fieldObj.name == 'Last Name') {
                          name = fieldObj.value;
                            }
                        } catch (e) {}
                          }
                      }
                         }
                       
                    </script>
              </form>
          </div>
        </section>
        
   <script src="js/mobileNav.js"></script>
  </body>
</html>
 <?php
require_once('cmsBase.php');
class CmsApplication extends CmsBase{
      //here we can write as many functions as we want and 
//thosefunctions will be called by user directly.
 
        function addcontent()
        {
            echo 'here add content functionality will takes place';
        }
 
        function viewcontent()
        {
            echo 'here view content functionality will takes place';
        }
 
        function anyothertask()
        {
            echo 'this is another task here can be written a complete php program against that task';
        }
    }


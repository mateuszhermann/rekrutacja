<?php
#ze względu na dane logownaia do bazy parametry zastąpiłem argumenty placeholderem 
$connection=mysqli_connect(
    #"Placeholder",
    #"placeholder",
    #"placeholder",
    #"placeholder"
);
if(mysqli_connect_errno($connection)!=0){
    print 'error';
}

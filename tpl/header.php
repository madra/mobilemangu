<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
echo
'<link rel="SHORTCUT ICON" href="'.STATIC_BASE_PATH.'images/fav.jpg">';
#set the title
if(!empty($ui->title))
    {
    echo"<title>{$ui->title}</title>";
    }else
    {
    echo"<title>".APP_NAME."</title>";
    }
        #set description
        if($ui->description) {
            echo"<meta name='description' content='{$ui->description}'>";
            }


            #set the css
            while (list($key,$value) = each($ui->css)) {
                if(!empty($value))
                    {
                     echo "<link href='".BASE_PATH."css/$value.css' rel='stylesheet' type='text/css' />";
                    }
            }




        #set the javascript
        while (list($key,$value) = each($ui->top_js)) {
                        echo
                        "
         <script src='".STATIC_BASE_PATH."js/$value.js' type='text/javascript'></script>
                            ";
                    }
echo'</head>';

            //guys at yaho say this helps
            //to make the website faster
            flush();
echo'<body>';
?>


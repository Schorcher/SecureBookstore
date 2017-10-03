<?php
/**
 * Created by PhpStorm.
 * User: davidmcfall
 * Date: 10/2/17
 * Time: 6:18 PM
 */

require("libs/config.php");
$pageDetails = "INDEX";
$page_title = 'Home';


include('libs/setup.php');


//(isbn,title,author,term,course,num,professor,course_number,required,new_quantity,used_quantity,rental_quantity,ebook_quantity,new_price,used_price,rental_price,ebook_price,description)

global $DB;
$fileName = '/Users/davidmcfall/PhpstormProjects/SecureBookstore/books.csv';

$query = <<<eof
    LOAD DATA INFILE '$fileName'
     INTO TABLE books 
     FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '"'
     LINES TERMINATED BY '\n'
     (isbn,title,author,term,course,num,professor,course_number,required,new_quantity,used_quantity,rental_quantity,ebook_quantity,new_price,used_price,rental_price,ebook_price,description)
eof;



try{

    $DB->query($query);

}catch(PDOException $ex){
    echo $ex->getMessage();
}
?>


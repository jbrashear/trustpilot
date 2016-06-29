<?php
/**
 * Created by PhpStorm.
 * User: jbrashear
 * Date: 6/1/16
 * Time: 4:36 PM
 * This function will generate a list of reviews for your business.
 *  I am using bootstrap so I will wrap the output using bootstrap classes and divs.
 */

include 'config.php';
function showreviews(){
$data = sendrequest("/business-units/".BUSINESS_UNIT_ID."/reviews");

// TODO: Setup Function to save Testimonial to local database.
// Loop through Reviews
$return = "";
    foreach ($data->reviews as $review){
        $id = $review->id;
        $stars = $review->stars;
        $title = $review->title;
        $text = $review->text;
        $createdAt = $review->createdAt;
   //     $companyReply = $review->companyReply->text;
   //     $companyReplyDate = $review->companyReply->createdAt;

        // Review Block

        $reviews =  "<div class=\"review\"><!-- id: " . $id . "--> \n";
        $reviews .=  stars(5) . "\n";
        $reviews .= "<h3>" . $title . "</h3> \n";
        $reviews .= "<p>" . $text . "</p> \n";
        $reviews .= "<p>Created: " . $createdAt . "</p> \n";
       // $reviews .= "Reply: " . $companyReply . "</br> \n";
       // $reviews .= "Reply Date: " . $companyReplyDate . " </br> \n";
        $reviews .= "</div> \n \n";
        $return .= $reviews;
        
    }
    return $return;
}




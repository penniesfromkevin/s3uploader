<?php
$my_bucket        = "s3BucketName"; //bucket name
$my_path          = "uploads/"; //bucket path

$access_key       = "AKIA..."; //S3 Access Key
$secret_key       = "PTjy..."; //S3 Secret Key
$region           = "us-west-2"; //bucket region
$success_redirect = 'http://s3.uploads.com' . $_SERVER['REQUEST_URI']; //redirect target after upload
$file_size_mb     = 105; //Maximum file size in MB
?>

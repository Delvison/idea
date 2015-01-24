<?php
  /**
  * filename: image_controller.php
  * Controller responsible for handling image uploads
  * @author Delvison Castillo
  */

  // to receive a file upload use $_FILES
  // FILES explained: http://php.net/manual/en/reserved.variables.files.php

  // define maxfilesize
  // TODO: correct max filesize
  define("MAX_FILESIZE", 100000000);

  // error reporting
  ini_set('display_startup_errors',1);
  ini_set('display_errors',1);
  error_reporting(-1);

  // receive upload
  $fieldname = 'file';
  echo "file: " . $_FILES[$fieldname]['name'];
  echo "<br/>type: " . $_FILES[$fieldname]['type'];
  echo "<br/>temp_name: " . $_FILES[$fieldname]['tmp_name'];

  // make a note of the current working directory
  $dir_proj = str_replace(basename(__DIR__).'/',
  '',str_replace(basename($_SERVER['PHP_SELF']), '',
  $_SERVER['PHP_SELF']));
  echo "<br/> dir self: ". $dir_proj;

  // make a note of the directory that will recieve the uploaded file
  $uploadsDirectory = $_SERVER['DOCUMENT_ROOT'] .
  $dir_proj . 'uploads/';
  echo "<br/> uploads directory: ".$uploadsDirectory;

  // make a note of the location of the upload form in case we need it
  // TODO: correct location of upload form
  $uploadForm = $dir_proj . 'tests/upload_test.php';
  echo "<br/>upload form: " . $uploadForm;

  // possible errors
  $errors = array(1 => 'max file size exceeeded',
                  2 => 'html form max file size exceeded',
                  3 => 'file upload was only partial',
                  4 => 'no file was attached');

  // check that the upload form was submitted
  isset($_POST['submit'])
        or error('the upload form not submitted', $uploadForm);

  // check for PHP's built-in uploading errors
  ($_FILES[$fieldname]['error'] == 0)
    or error($errors[$_FILES[$fieldname]['error']], $uploadForm);

  // check that the file we are working on really was the subject of
  // an HTTP upload
  @is_uploaded_file($_FILES[$fieldname]['tmp_name'])
    or error('not an HTTP upload', $uploadForm);

  // validation... check file uploaded is actually an image
  @getimagesize($_FILES[$fieldname]['tmp_name'])
    or error('only image uploads are allowed', $uploadForm);

  // make a unique filename for the uploaded file and check it is not already
  // taken... if it is already taken keep trying until we find a vacant one
  // sample filename: 1140732936-filename.jpg
  $now = time();
  while ( file_exists($uploadFilename = $uploadsDirectory .
  $now.'-'.$_FILES[$fieldname]['name']))
  {
    $now++;
  }

  echo "<br/>upload_filename: ". $uploadFilename;

  // move the file to its final location and allocate the new filename to it
  // ensure that proper permissions are set:
  // sudo chown -R www-data:www-data /var/www
  @move_uploaded_file($_FILES[$fieldname]['tmp_name'], $uploadFilename)
  or error('receiving directory insuffiecient permission', $uploadForm);

  // image successfully received
  // TODO: redirect appropriately
  echo "<h1>Image successfully uploaded</h1>";

  /**
  * This function is responsible for handling errors. Redirects to next
  * location after a defined wait time
  */
  function error($error, $location, $seconds = 5)
  {
    echo "<br/>";
    echo "<h1>".$error."</h1>";
    header("Refresh: $seconds; URL='$location'");
    die();
  }

?>

<?php
$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

if (empty($_POST['name']))
  $errors['name'] = 'Name is required.';

if (empty($_POST['email']))
  $errors['email'] = 'Email is required.';

if (empty($_POST['subject']))
  $errors['subject'] = 'Subject is required.';

if (empty($_POST['message']))
  $errors['message'] = 'Message is required.';

// end check for integrity

// if errors contain some error - mark failure and return errors
if ( ! empty($errors)) {
  $data['success'] = false;
  $data['errors']  = $errors;
} else {

  // DO ALL YOUR FORM PROCESSING HERE
  // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

  // if everything goes smooth - mark success and return message
  $data['success'] = true;
  $data['message'] = 'Success!';
}

// return data to AJAX call
echo json_encode($data);

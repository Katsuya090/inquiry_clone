<?php

class InquiryController extends AppController {

  public function index() {
    $this->set('inquiry', $this->Inquiry->find('all'));
  }
}



?>
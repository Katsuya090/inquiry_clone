<?php

class InquiryController extends AppController {

  public function index() {
    $this->set('inquiry', $this->Inquiry->find('all'));
    // var_dump($this->Inquiry->find('all'));

  }
}



?>
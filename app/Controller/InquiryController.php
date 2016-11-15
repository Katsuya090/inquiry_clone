<?php

class InquiryController extends AppController {

  public function index() {
    $this->set('inquiry', $this->Inquiry->find('all'));
    // var_dump($this->Inquiry->find('all'));
  }

  public function view($id = null){
    if (!$this->Inquiry->exists($id)) {
      throw new NotFoundException('レストランが見つかりません。');
    }

    $this->set('inquiry', $this->Inquiry->findById($id));
  }

  public function delete($id = null) {
    if (!$this->Inquiry->exists($id)) {
      throw new NotFoundException('お問い合わせが見つかりません');
    }

    $this->request->allowMethod('post', 'delete');

    if ($this->Inquiry->delete($id)) {
      $this->Flash->success('お問い合わせを削除しました');
    } else {
      $this->Flash->error('お問い合わせを削除できませんでした');
    }

    return $this->redirect(['action' => 'index']);
  }
}



?>
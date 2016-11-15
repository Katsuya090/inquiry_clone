<div style="width: 100%; height: 80px;">
  <span style="float: left;"><h2><?= $inquiry['Inquiry']['name']; ?></h2></span>
  <span style="float: right;"><h3><?= $inquiry['Inquiry']['mailaddress']; ?></h3></span>
</div>

<div>
  <span>店舗情報</span>
  <table>
    <tbody>
      <tr>
        <td style="width: 25%;">名前</td>
        <td style="width: 75%;"><?= $inquiry['Inquiry']['name'];?></td>
      </tr>
      <tr>
        <td>メールアドレス</td>
        <td><?= $inquiry['Inquiry']['mailaddress'] ;?></td>
      </tr>
      <tr>
        <td>種類</td>
        <td><?= $inquiry['Inquiry']['kind'] ;?></td>
      </tr>
      <tr>
        <td>お問い合わせ内容</td>
        <td><?= $inquiry['Inquiry']['question'] ;?></td>
      </tr>
      <tr>
        <td>送信された時間</td>
        <td><?= $inquiry['Inquiry']['createdAt'] ;?></td>
      </tr>
    </tbody>
  </table>

</div>
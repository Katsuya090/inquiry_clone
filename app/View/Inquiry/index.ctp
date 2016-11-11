  <h2>お問い合わせ一覧</h2>

  <table>
    <tbody style="border: solid 1px #000">
    <?php foreach ($inquiry as $key) : ?>
        <tr>
            <td style="width: 30%">
                <?= $this->Html->link(
                    $inquiry['Inquiry']['name'],
                    ['action' => 'view', $inquiry['Inquiry']['id']]
                    ); ?>
            </td>
            <td style="width: 70%">
                登録日: <?= $this->Time->format($inquiry['Inquiry']['created'], '%Y/%m/%d'); ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
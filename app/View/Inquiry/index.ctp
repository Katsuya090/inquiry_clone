  <h2>お問い合わせ一覧</h2>

  <table>
    <tbody style="border: solid 1px #000">
    <?php foreach ($inquiry as $inquiry) : ?>
        <tr>
            <td style="width: 30%">
                <?= $this->Html->link(
                    $inquiry['Inquiry']['name'],
                    ['action' => 'view', $inquiry['Inquiry']['id']]
                    ); ?>
            </td>
            <td style="width: 65%">
                登録日: <?= $this->Time->format($inquiry['Inquiry']['createdAt'], '%Y/%m/%d'); ?>
            </td>
            <td style="width: 5%">
            <?= $this->Form->postLink(
                '削除',
                ['action' => 'delete', $inquiry['Inquiry']['id']],
                ['confirm' => '本当に削除してよろしいですか?']
            );?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
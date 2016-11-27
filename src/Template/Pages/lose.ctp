<table width="100%" height="100%">
    <tr>
        <td align="center" valign="middle">
            <span style="color: black; font-size: 28pt; font-weight: bold;">
                GAME OVER
            </span>
            <br />
            <span style="font-size: 46pt; color: black; font-style: italic;">
                YOU LOST!!!
            </span>
            <br />
            <?= $this->Html->link(
                'Try Again',
                [
                    'controller' => 'Pages',
                    'action' => 'restart'
                ]
            ) ?>
        </td>
    </tr>
</table>

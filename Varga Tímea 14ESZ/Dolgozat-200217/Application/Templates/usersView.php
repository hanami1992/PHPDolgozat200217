<table class="table">
    <th>Name</th>
    <th>E-mail</th>
    <th>Address</th>
    <th>Born at</th>
    <th>Delete</th>        
    <?php foreach( $users as $user ): ?>
        <tr>
        <?php for( $i = 1; $i < count($user) / 2; $i++): ?>
       
            <td><?= $user[$i] ?></td>

        <?php endfor ?>
        <td class="btn-rd btn"><a href="index.php?page=delete&id=<?= $user[0] ?>">Send</a></td>
        </tr>
    <?php endforeach ?>
</table>
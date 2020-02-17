<section class="signup-form">
    <p>Sign up</p>
    <form action="index.php?page=insert" method="POST">
        <label for="name">Name</label>
        <input id="name" name="name" type="text" autofocus value="<?= $user['name']?>">

        <label for="email">E-mail</label>
        <input id="email" name="email" type="text" value="<?= $user['email']?>">

        <label for="address">Address</label>
        <input id="address" name="address" type="text" value="<?= $user['address']?>">

        <label for="bornat">Born at</label>
        <input id="bornat" name="bornat" type="text" value="<?= $user['bornAt']?>"> 
        
        <input type="hidden" name="id">   
        
        <input type="submit" value="submit" class="btn-grn btn">
    </form>
</section>
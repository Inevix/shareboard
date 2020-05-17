<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" class="col s12 add-form">
    <div class="row">
        <div class="input-field col s12">
            <input id="name" name="name" type="text" class="validate"/>
            <label for="name">First Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="email" name="email" type="email" class="validate"/>
            <label for="email">Email</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="password" name="password" type="password" class="validate"/>
            <label for="password">Password</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <button class="btn btn-large waves-effect waves-light" type="submit" name="action">
                Create
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</form>

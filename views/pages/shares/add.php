<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" class="col s12 add-form">
    <div class="row">
        <div class="input-field col s12">
            <input id="title" name="title" type="text" class="validate"/>
            <label for="title">Title</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <textarea id="body" name="body" class="materialize-textarea"></textarea>
            <label for="body">Body</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input id="link" name="link" type="text" class="validate"/>
            <label for="link">Link</label>
        </div>
    </div>
    <div class="row">
        <div class="col s12">
            <button class="btn btn-large waves-effect waves-light" type="submit" name="action">
                Add
                <i class="material-icons right">send</i>
            </button>
        </div>
    </div>
</form>
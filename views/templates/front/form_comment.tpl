<form><!-- Form Name -->
<legend>{l s='Ajouter un commentaire'}</legend>

<!-- Multiple Radios (inline) -->
<div class="form-group">
    <label class="col-md-3 control-label" for="stars">{l s='Note'}</label>
    <div class="col-md-8">
        <label class="radio-inline" for="stars-0">
            <input type="radio" name="stars" id="stars-0" value="1">
            1
        </label>
        <label class="radio-inline" for="stars-1">
            <input type="radio" name="stars" id="stars-1" value="2">
            2
        </label>
        <label class="radio-inline" for="stars-2">
            <input type="radio" name="stars" id="stars-2" value="3">
            3
        </label>
        <label class="radio-inline" for="stars-3">
            <input type="radio" name="stars" id="stars-3" value="4">
            4
        </label>
        <label class="radio-inline" for="stars-4">
            <input type="radio" name="stars" id="stars-4" value="5" checked="checked">
            5
        </label>
    </div>
</div>

<!-- Textarea -->
<div class="form-group">
    <label class="col-md-3 control-label" for="comment">{l s='Comment'}</label>
    <div class="col-md-8">
        <textarea class="form-control" id="comment" name="comment"></textarea>
    </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
    <label class="col-md-3 control-label" for="save"></label>
    <div class="col-md-8">
        <button id="save" name="submit" class="btn btn-success">{l s='Sauvegarder'}</button>
    </div>
</div>

</fieldset>
</form>
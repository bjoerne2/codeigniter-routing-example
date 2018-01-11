<h1>Create item</h1>
<?php echo form_open('items/create'); ?>
  <div class="form-group<?= form_error('name') ? ' has-error' : '' ?>">
    <label for="name">Name</label>
    <input type="text" name="name" value="<?= set_value('name') ?>" class="form-control">
    <?php if (form_error('name')): ?><span class="help-block"><?= form_error('name') ?></span><?php endif; ?>
  </div>
  <div>
    <a href="<?= site_url('items') ?>" class="btn btn-primary">Back</a>
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

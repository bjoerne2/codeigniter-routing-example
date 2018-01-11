<h1>Item</h1>
<div class="form-group<?= form_error('name') ? ' has-error' : '' ?>">
  <label for="name">Name</label>
  <input type="text" name="name" value="<?= set_value('name', isset($item) ? $item->name : '') ?>" class="form-control" readonly="readonly">
  <?php if (form_error('name')): ?><span class="help-block"><?= form_error('name') ?></span><?php endif; ?>
</div>
<div>
  <a href="<?= site_url('items') ?>" class="btn btn-primary">Back</a>
  <a href="<?= site_url('items/edit/' . $item->id) ?>" class="btn btn-primary">Edit</a>
  <?php echo form_open('items/delete/' . $item->id, array('class' => 'button-form')); ?><button type="submit" class="btn btn-primary">Delete</button></form>
</div>


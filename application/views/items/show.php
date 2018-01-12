<h1>Item</h1>
<div class="form-group<?= form_error('name') ? ' has-error' : '' ?>">
  <label for="name">Name</label>
  <input type="text" name="name" value="<?= $item->name ?>" class="form-control" readonly="readonly">
</div>
<div>
  <a href="<?= site_url('items') ?>" class="btn btn-primary">Back</a>
  <a href="<?= site_url('items/' . $item->id . '/edit') ?>" class="btn btn-primary">Edit</a>
  <?php echo form_open('items/' . $item->id, array('class' => 'button-form')); ?><button type="submit" class="btn btn-primary">Delete</button><input type="hidden" name="_method" value="delete"></form>
</div>


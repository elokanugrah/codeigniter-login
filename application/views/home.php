<?php $this->load->view('templates/login_header'); ?>

  <form role="form" action="<?php echo site_url('Login/logout'); ?>" method="POST">

      <fieldset class="clearfix">

      <p><input type="submit" value="Logout"></p>

    </fieldset>

  </form>
    
<?php $this->load->view('templates/login_footer'); ?>
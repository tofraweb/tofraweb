
<section class="main-container">

  <div class="container">
    <div class="row">

      <!-- main start -->
      <!-- ================ -->
      <div class="main col-md-12" style="margin-bottom:150px">

        <!-- page-title start -->
        <!-- ================ -->
        <?php if ($mail_success){
          $title = "Email sent";
        } else {
          $title = "Error sending the message";
        }
        ?>

        <h2 class="page-title" style="text-align:center"><?php echo $title; ?></h2>
        <div class="separator-2" style="margin-bottom:150px"></div>
        <!-- page-title end -->

        <!-- Alerts start -->
        <!-- ============================================================================== -->
        <?php if($mail_success){ ?>
        <div class="alert alert-icon alert-success" role="alert" style="max-width:350px; margin:auto">
          <i class="fa fa-check"></i>
            <p><?php echo $this->lang->line("email_message_success_1");?><br>
               <?php echo $this->lang->line("email_message_success_2");?>
            </p>
            <p><?php echo $this->lang->line("email_message_success_3");?></p>
        </div>
        <?php } ?>
        <div class="alert  alert-icon alert-danger" role="alert" style="max-width:350px; margin:auto">
          <i class="fa fa-warning"></i>
          <?php
            if($mail_not_sent){
              echo $this->lang->line("email_message_not_sent_1");
            }
          ?>
          <?php
            if($mail_not_correct){
              echo $this->lang->line("email_message_not_correct_1");
            }
          ?>
        </div>
      </div>
      <!-- main end -->

    </div>
  </div>
</section>
<!-- main-container end -->

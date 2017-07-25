<?php
$this->load->view("admin/inculudes/include_script");
$alert  = $this->session->userdata("alert");
    if ($alert){
        $alert_message = $this->session->userdata("alert-message");
        $alert_type = $this->session->userdata("alert-type");
?>
        <script>
            toastr["<?php echo $alert_type ?>"]("<?php echo $alert_message ?>");
        </script>
<?php
        $this->session->set_userdata("alert", false);
    }
?>



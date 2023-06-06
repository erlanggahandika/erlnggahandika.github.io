<?php 

function erlanggahelper(){
    $angga = get_instance();
    if(!$angga->session->userdata('role_id')){
        redirect('auth/eror404');
    } 
}




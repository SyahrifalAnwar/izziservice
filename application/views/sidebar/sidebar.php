<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
   <ul class="nav menu">
      <?php if($this->session->userdata('level')=="SUPERUSER"){?>
      <li  <?php if( $this->uri->segment(1) == null){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>home">
            <svg class="glyph stroked dashboard-dial">
               <use xlink:href="#stroked-dashboard-dial"></use>
            </svg>
            Dashboard
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'superuser'  && $this->uri->segment(2) == 'list_user'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>superuser/list_user">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-male-user"></use>
            </svg>
            ADMIN ACCOUNT
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'superuser' && $this->uri->segment(2) == 'list_superuser' ){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>superuser/list_superuser">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-male-user"></use>
            </svg>
            DATA SUPERUSER
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'superuser'  && $this->uri->segment(2) == 'history_log'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>superuser/history_log">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-male-user"></use>
            </svg>
            HISTORY LOG
         </a>
      </li>
      <?php } ?>
      <?php if($this->session->userdata('level')=="ADMIN"){?>
      <li <?php if( $this->uri->segment(1) == 'home'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>home">
            <svg class="glyph stroked dashboard-dial">
               <use xlink:href="#stroked-dashboard-dial"></use>
            </svg>
            Dashboard
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'ticket'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>ticket/add">
            <svg class="glyph stroked open folder">
               <use xlink:href="#stroked-open-folder"/>
            </svg>
            New Ticket
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'list_ticket'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>list_ticket/ticket_list">
            <svg class="glyph stroked notepad ">
               <use xlink:href="#stroked-notepad"/>
            </svg>
            List Ticket (<?php if(empty($notif_list_ticket)) { echo "0"; }else{ echo $notif_list_ticket;} ?>)
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'approval'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>approval/approval_list">
            <svg class="glyph stroked email">
               <use xlink:href="#stroked-email"/>
            </svg>
            <use xlink:href="#stroked-male-user"></use>
            </svg> Aprroval Ticket (<?php if(empty($notif_approval)) { echo "0"; }else{ echo $notif_approval;} ?>)
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'myticket'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>myticket/myticket_list">
            <svg class="glyph stroked open letter">
               <use xlink:href="#stroked-open-letter"/>
            </svg>
            My Ticket
         </a> 	
      </li>
      <li <?php if( $this->uri->segment(1) == 'myassignment'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>myassignment/myassignment_list">
            <svg class="glyph stroked clipboard with paper">
               <use xlink:href="#stroked-clipboard-with-paper"/>
            </svg>
            Assigment Ticket (<?php if(empty($notif_assignment)) { echo "0"; }else{ echo $notif_assignment;} ?>)
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'client'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>client/karyawan_list">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-male-user"></use>
            </svg>
            Client
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'user'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>user/user_list">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-male-user"></use>
            </svg>
            User
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'jabatan'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>jabatan/jabatan_list">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-pen-tip"></use>
            </svg>
            Position
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'departemen'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>departemen/departemen_list">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-app-window"></use>
            </svg>
            Departement
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'bagian_departemen'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>bagian_departemen/bagian_departemen_list">
            <svg class="glyph stroked line-graph">
               <use xlink:href="#stroked-app-window"></use>
            </svg>
            Sub Departement
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'kategori'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>kategori/kategori_list">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-app-window"></use>
            </svg>
            Category
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'sub_kategori'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>sub_kategori/sub_kategori_list">
            <svg class="glyph stroked line-graph">
               <use xlink:href="#stroked-app-window"></use>
            </svg>
            Sub Category
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'teknisi'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>teknisi/teknisi_list">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-male-user"></use>
            </svg>
            Technition
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'dashboard_teknisi'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>dashboard_teknisi/teknisi_view">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-male-user"></use>
            </svg>
            Report Technition
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'kondisi'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>kondisi/kondisi_list">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-hourglass"></use>
            </svg>
            Condition
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'informasi'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>informasi/informasi_list">
            <svg class="glyph stroked sound on">
               <use xlink:href="#stroked-sound-on"/>
            </svg>
            Information
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'informasi_view'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>informasi_view">
            <svg class="glyph stroked sound on">
               <use xlink:href="#stroked-sound-on"/>
            </svg>
            News
         </a>
      </li <?php if( $this->uri->segment(1) == 'level'){echo "class='active'";} ?>>
      <?php 
         }else if($this->session->userdata('level')=="TEKNISI"){?>
      <li class="active">
         <a href="<?php echo base_url();?>home">
            <svg class="glyph stroked dashboard-dial">
               <use xlink:href="#stroked-dashboard-dial"></use>
            </svg>
            Dashboard
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'myassignment'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>myassignment/myassignment_list">
            <svg class="glyph stroked clipboard with paper">
               <use xlink:href="#stroked-clipboard-with-paper"/>
            </svg>
            My Assigment Ticket
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'informasi_view'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>informasi_view">
            <svg class="glyph stroked sound on">
               <use xlink:href="#stroked-sound-on"/>
            </svg>
            News
         </a>
      </li <?php if( $this->uri->segment(1) == 'level'){echo "class='active'";} ?>>
      <?php }else if($this->session->userdata('level')=="USER"){?>
      <li class="active">
         <a href="<?php echo base_url();?>home">
            <svg class="glyph stroked dashboard-dial">
               <use xlink:href="#stroked-dashboard-dial"></use>
            </svg>
            Dashboard
         </a>
      </li <?php if( $this->uri->segment(1) == 'ticket'){echo "class='active'";} ?>>
      <li class="active">
         <a href="<?php echo base_url();?>ticket/add">
            <svg class="glyph stroked open folder">
               <use xlink:href="#stroked-open-folder"/>
            </svg>
            New Ticket
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'myticket'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>myticket/myticket_list">
            <svg class="glyph stroked open letter">
               <use xlink:href="#stroked-open-letter"/>
            </svg>
            My Ticket
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'informasi_view'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>informasi_view">
            <svg class="glyph stroked sound on">
               <use xlink:href="#stroked-sound-on"/>
            </svg>
            News
         </a>
      </li <?php if( $this->uri->segment(1) == 'level'){echo "class='active'";} ?>>
      <?php } else if($this->session->userdata('level')=="USER" && $this->session->userdata('id_jabatan')==2){?>
      <li class="active">
         <a href="<?php echo base_url();?>home">
            <svg class="glyph stroked dashboard-dial">
               <use xlink:href="#stroked-dashboard-dial"></use>
            </svg>
            Dashboard
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'approval'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>approval/approval_list">
            <svg class="glyph stroked email">
               <use xlink:href="#stroked-email"/>
            </svg>
            <use xlink:href="#stroked-male-user"></use>
            </svg> Aprroval Ticket
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'informasi_view'){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>informasi_view">
            <svg class="glyph stroked sound on">
               <use xlink:href="#stroked-sound-on"/>
            </svg>
            News
         </a>
      </li>
      <li <?php if( $this->uri->segment(1) == 'dashboard_teknisi '){echo "class='active'";} ?>>
         <a href="<?php echo base_url();?>dashboard_teknisi/teknisi_view">
            <svg class="glyph stroked calendar">
               <use xlink:href="#stroked-male-user"></use>
            </svg>
            Report Teknisi
         </a>
      </li>
      <?php }?>
   </ul>
</div>
<!--/.sidebar-->
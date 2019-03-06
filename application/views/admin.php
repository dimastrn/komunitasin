<?php get_template('header'); ?>

<div class="wrapper">
    <div class="fresh-table toolbar-color-azure full-screen-table">
    <!--    Available colors for the full background: full-color-blue, full-color-azure, full-color-green, full-color-red, full-color-orange                  
            Available colors only for the toolbar: toolbar-color-blue, toolbar-color-azure, toolbar-color-green, toolbar-color-red, toolbar-color-orange
    -->
        
        <div class="toolbar">
            <button id="alertBtn" class="btn btn-default" data-toggle="modal" data-target="#add-modal"><i class="fa fa-plus"></i> Tambah Data</button>
        </div>
        
        <table id="fresh-table" class="table">
            <thead>
                <th data-field="no" data-sortable="true">No</th>
                <th data-field="id" data-sortable="true">ID</th>
            	<th data-field="nama" data-sortable="true">Nama</th>
            	<th data-field="alamat" data-sortable="true">Alamat</th>
            	<th data-field="gaji" >Gaji</th>
            	<th data-field="gender">Gender</th>
            	<th data-field="actions">Actions</th>
            </thead>
           <!--  <tbody>       
                <?php 
                    $no = 1;
                    foreach($komunitas as $data): 
                ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['id_komunitas']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>
                        <td><?php echo $data['gaji']; ?></td>
                        <td><?php echo $data['gender']; ?></td>                        
                        <td>                   
                            <a rel="tooltip" title="Edit" class="table-action edit" href="<?php echo site_url('pengurus/edit/').$data['id_komunitas'] ?>" title="Edit">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a rel="tooltip" title="Remove" class="table-action remove" href=<?php echo site_url('pengurus/delete/').$data['id_komunitas'] ?>" title="Remove">
                                <i class="fa fa-remove"></i>
                            </a>
                        </td>
                    </tr> 
                <?php endforeach; ?>              
            </tbody> -->
        </table>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php echo form_open('pengurus/tambah'); ?>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
        
                <div class="form-group">
                    <label>Nama</label>
                    <?php echo form_input('nama', '', 'class="form-control" placeholder="Masukan Nama"'); ?>
                </div>

                        
                <div class="form-group">
                    <label>Alamat</label>
                    <?php echo form_input('alamat', '', 'class="form-control" placeholder="Masukan Alamat"'); ?>
                </div>

                <div class="form-group">
                    <label>Gaji</label>
                    <?php echo form_input('gaji', '', 'class="form-control" placeholder="Masukan Gaji"'); ?>
                </div>

                <div class="form-group">
                    <label>Gender</label>                    
                    <?php 
                        $data = array(  
                            '' => 'Pilih',
                            'pria' => 'Pria',
                            'wanita' => 'Wanita'
                        );
                        echo form_dropdown('gender', $data, '','class="form-control"'); 
                    ?>                    
                </div>                
            

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>

</div>

<?php get_template('footer'); ?>
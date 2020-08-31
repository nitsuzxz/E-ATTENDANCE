<html>   <!-- modal delete -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <h5 class="modal-title" id="exampleModalLabel">Padam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Adakah anda pasti?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnYes">Ya</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" >Tidak</button>
      </div>
    </div>
  </div>
</div>
    
<!-- modal deletep -->
<div class="modal fade" id="modalDeletekbp" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-danger">
        <h5 class="modal-title" id="exampleModalLabel">Padam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Adakah anda pasti?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnYes">Ya</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" >Tidak</button>
      </div>
    </div>
  </div>
</div>


    
<!-- modal edit -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header btn-warning">
        <h5 class="modal-title" id="exampleModalLabel">Kemaskini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Adakah anda pasti?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="submitForm()">Ya</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal" >Tidak</button>
      </div>
    </div>
  </div>
</div>
<!--  -->
<!-- modal success -->

<div id="success" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Berjaya!</h4> 
                <p>Pengguna berjaya dipadam</p>
                <button class="btn btn-success" data-dismiss="modal"><span>OK</span></button>
            </div>
        </div>
    </div>
</div> 
<!--  -->
    <div id="adds" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Berjaya!</h4> 
                <p>Pengguna berjaya disimpan</p>
                <button class="btn btn-success" data-dismiss="modal"><span>OK</span></button>
            </div>
        </div>
    </div>
</div> 
 <div id="exist" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Tidak Berjaya!</h4> 
                <p>Pengguna Telah Wujud Didalam Sistem</p>
                <button class="btn btn-success" data-dismiss="modal"><span>OK</span></button>
            </div>
        </div>
    </div>
</div> 
<!--  -->
    <!-- modal success -->

<div id="subjek" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Berjaya!</h4> 
                <p>Subjek berjaya dipadam</p>
                <button class="btn btn-success" data-dismiss="modal"><span>OK</span></button>
            </div>
        </div>
    </div>
</div> 
<!--  -->
    <!-- success kehadiran -->
<div id="attendance" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Berjaya!</h4> 
                <p>Kehadiran pelajar berjaya disimpan</p>
                <button class="btn btn-success" data-dismiss="modal"><span>OK</span></button>
            </div>
        </div>
    </div>
</div>
<!-- success Edit Modal -->
<div id="successEdit" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Berjaya!</h4> 
                <p>Pengguna berjaya dikemaskini</p>
                <button class="btn btn-success" data-dismiss="modal"><span>OK</span></button>
            </div>
        </div>
    </div>
</div> 
<!-- success Edit Modal -->
<div id="successsubjek" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Berjaya!</h4> 
                <p>Subjek berjaya dikemaskini</p>
                <button class="btn btn-success" data-dismiss="modal"><span>OK</span></button>
            </div>
        </div>
    </div>
</div>     
<div id="tambahsub" class="modal fade">
    <div class="modal-dialog modal-confirm">
        <div class="modal-content">
            <div class="modal-header btn-info">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body text-center">
                <h4>Berjaya!</h4> 
                <p>Subjek berjaya ditambah</p>
                <button class="btn btn-success" data-dismiss="modal"><span>OK</span></button>
            </div>
        </div>
    </div>
</div>      
</html> 
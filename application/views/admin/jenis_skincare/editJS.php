        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                </nav>

                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="row">
    <div class="col">
        <form method="POST" action="<?= site_url('admin/Jenis_skincare/proses_edit_data/' .$data_jenis_skincare[0]->id_js);  ?>">
        <div class="form-group row mt-3 mr-2 ml-2">
            <label for="jenis_skincare" class="col-sm-3 col-form-label">Jenis Skincare</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="jenis_skincare" name="jenis_skincare" value="<?= $data_jenis_skincare[0]->jenis_skincare ?>">
            </div>
        </div>
        <div class="form-group row mt-3 mr-4 ml-2 float-right">
            <button type="submit" class="btn btn-info">Simpan</button>
        </div>
        </form>
    </div>
</div>
                    </div>
                </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
        </div>

    </div>
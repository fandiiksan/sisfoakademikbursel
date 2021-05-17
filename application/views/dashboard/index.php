<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <span>
        <h5 style="font-family:perpetua; align:center;" > (60101019) Jln.Anthon Lesnussa, Wenono, Kec.Namrole, Kab.Buru Selatan Prov.Maluku. Pos : 97573</h5>
        </span>
        <span>
                <h5 style="color:#f0f2f5;">...</h5><br>
        </span>
        <span>
                <h5 style="font-family:perpetua; align:center; font-style:italic;"> Email : smanegerinamrole@yahoo.com</h5><br>
        </span>
            <div class="col-lg-6 col-12">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $jumlahSiswa ?></h3>
                        <p>Jumlah Siswa</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $jumlahGuru ?></h3>
                        <p>Jumlah Guru</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5>Jumlah Siswa Berdasarkan Jurusan</h5>
                        <canvas id="chartjs-1" style="display: block; width: 714px; height: 357px;" width="714" height="357" class="chartjs-render-monitor"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
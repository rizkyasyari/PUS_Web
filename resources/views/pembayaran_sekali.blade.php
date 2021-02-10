@extends('templates.header')

@section('content')
    <div class="page-content">
        {{--        <nav class="page-breadcrumb">--}}
        {{--            <ol class="breadcrumb">--}}
        {{--                <li class="breadcrumb-item"><a href="#">Tables</a></li>--}}
        {{--                <li class="breadcrumb-item active" aria-current="page">Data Table</li>--}}
        {{--            </ol>--}}
        {{--        </nav>--}}
        <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
            <div>
                <h4 class="mb-3 mb-md-0">Sekali Bayar</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        <button type="button" class="btn btn-primary btn-icon-text float-right" style="margin-bottom: 20px">
                            <i class="btn-icon-prepend" data-feather="plus-circle"></i>
                            Tambah Data
                        </button>
                        <h6 class="card-title" style="margin-bottom: 30px">Data Sekali Bayar</h6>

                        {{--                        <h4 class="card-title">Pilih Kelas</h4>--}}
                        <div class="table-bordered" >
                            <table id="dataTableExample" class="table">
                                <thead>
                                <tr>
                                    <th>Jenis Pembayaran</th>
                                    <th>Nominal</th>
                                    <th>Tanggal Pembayaran</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Buku</td>
                                    <td>100.000</td>
                                    <td>30/01/2020</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>
                                        <button type="button" class="btn btn-danger btn-icon-text ">
                                            <i class="btn-icon-prepend" data-feather="trash-2"></i>
                                            Hapus Data
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Baju</td>
                                    <td>2.000.000</td>
                                    <td>26/06/2020</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>
                                        <button type="button" class="btn btn-danger btn-icon-text ">
                                            <i class="btn-icon-prepend" data-feather="trash-2"></i>
                                            Hapus Data
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Study Banding</td>
                                    <td>300.000</td>
                                    <td>30/05/2020</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>
                                        <button type="button" class="btn btn-danger btn-icon-text ">
                                            <i class="btn-icon-prepend" data-feather="trash-2"></i>
                                            Hapus Data
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Perpisahan</td>
                                    <td>1.500.000</td>
                                    <td>30/05/2020</td>
                                    <td>
                                        <button type="button" class="btn btn-success btn-icon-text">
                                            <i class="btn-icon-prepend" data-feather="edit"></i>
                                            Edit Data
                                        </button>
                                        <button type="button" class="btn btn-danger btn-icon-text ">
                                            <i class="btn-icon-prepend" data-feather="trash-2"></i>
                                            Hapus Data
                                        </button>
                                    </td>
                                </tr>
                                {{--                                <tr>--}}
                                {{--                                    <td>Cedric Kelly</td>--}}
                                {{--                                    <td>Senior Javascript Developer</td>--}}
                                {{--                                    <td>Edinburgh</td>--}}
                                {{--                                    <td>22</td>--}}
                                {{--                                    <td>2012/03/29</td>--}}
                                {{--                                    <td>$433,060</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Airi Satou</td>--}}
                                {{--                                    <td>Accountant</td>--}}
                                {{--                                    <td>Tokyo</td>--}}
                                {{--                                    <td>33</td>--}}
                                {{--                                    <td>2008/11/28</td>--}}
                                {{--                                    <td>$162,700</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Brielle Williamson</td>--}}
                                {{--                                    <td>Integration Specialist</td>--}}
                                {{--                                    <td>New York</td>--}}
                                {{--                                    <td>61</td>--}}
                                {{--                                    <td>2012/12/02</td>--}}
                                {{--                                    <td>$372,000</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Herrod Chandler</td>--}}
                                {{--                                    <td>Sales Assistant</td>--}}
                                {{--                                    <td>San Francisco</td>--}}
                                {{--                                    <td>59</td>--}}
                                {{--                                    <td>2012/08/06</td>--}}
                                {{--                                    <td>$137,500</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Rhona Davidson</td>--}}
                                {{--                                    <td>Integration Specialist</td>--}}
                                {{--                                    <td>Tokyo</td>--}}
                                {{--                                    <td>55</td>--}}
                                {{--                                    <td>2010/10/14</td>--}}
                                {{--                                    <td>$327,900</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Colleen Hurst</td>--}}
                                {{--                                    <td>Javascript Developer</td>--}}
                                {{--                                    <td>San Francisco</td>--}}
                                {{--                                    <td>39</td>--}}
                                {{--                                    <td>2009/09/15</td>--}}
                                {{--                                    <td>$205,500</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Sonya Frost</td>--}}
                                {{--                                    <td>Software Engineer</td>--}}
                                {{--                                    <td>Edinburgh</td>--}}
                                {{--                                    <td>23</td>--}}
                                {{--                                    <td>2008/12/13</td>--}}
                                {{--                                    <td>$103,600</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Jena Gaines</td>--}}
                                {{--                                    <td>Office Manager</td>--}}
                                {{--                                    <td>London</td>--}}
                                {{--                                    <td>30</td>--}}
                                {{--                                    <td>2008/12/19</td>--}}
                                {{--                                    <td>$90,560</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Quinn Flynn</td>--}}
                                {{--                                    <td>Support Lead</td>--}}
                                {{--                                    <td>Edinburgh</td>--}}
                                {{--                                    <td>22</td>--}}
                                {{--                                    <td>2013/03/03</td>--}}
                                {{--                                    <td>$342,000</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Charde Marshall</td>--}}
                                {{--                                    <td>Regional Director</td>--}}
                                {{--                                    <td>San Francisco</td>--}}
                                {{--                                    <td>36</td>--}}
                                {{--                                    <td>2008/10/16</td>--}}
                                {{--                                    <td>$470,600</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Haley Kennedy</td>--}}
                                {{--                                    <td>Senior Marketing Designer</td>--}}
                                {{--                                    <td>London</td>--}}
                                {{--                                    <td>43</td>--}}
                                {{--                                    <td>2012/12/18</td>--}}
                                {{--                                    <td>$313,500</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Tatyana Fitzpatrick</td>--}}
                                {{--                                    <td>Regional Director</td>--}}
                                {{--                                    <td>London</td>--}}
                                {{--                                    <td>19</td>--}}
                                {{--                                    <td>2010/03/17</td>--}}
                                {{--                                    <td>$385,750</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Michael Silva</td>--}}
                                {{--                                    <td>Marketing Designer</td>--}}
                                {{--                                    <td>London</td>--}}
                                {{--                                    <td>66</td>--}}
                                {{--                                    <td>2012/11/27</td>--}}
                                {{--                                    <td>$198,500</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Paul Byrd</td>--}}
                                {{--                                    <td>Chief Financial Officer (CFO)</td>--}}
                                {{--                                    <td>New York</td>--}}
                                {{--                                    <td>64</td>--}}
                                {{--                                    <td>2010/06/09</td>--}}
                                {{--                                    <td>$725,000</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Gloria Little</td>--}}
                                {{--                                    <td>Systems Administrator</td>--}}
                                {{--                                    <td>New York</td>--}}
                                {{--                                    <td>59</td>--}}
                                {{--                                    <td>2009/04/10</td>--}}
                                {{--                                    <td>$237,500</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Bradley Greer</td>--}}
                                {{--                                    <td>Software Engineer</td>--}}
                                {{--                                    <td>London</td>--}}
                                {{--                                    <td>41</td>--}}
                                {{--                                    <td>2012/10/13</td>--}}
                                {{--                                    <td>$132,000</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Dai Rios</td>--}}
                                {{--                                    <td>Personnel Lead</td>--}}
                                {{--                                    <td>Edinburgh</td>--}}
                                {{--                                    <td>35</td>--}}
                                {{--                                    <td>2012/09/26</td>--}}
                                {{--                                    <td>$217,500</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Jenette Caldwell</td>--}}
                                {{--                                    <td>Development Lead</td>--}}
                                {{--                                    <td>New York</td>--}}
                                {{--                                    <td>30</td>--}}
                                {{--                                    <td>2011/09/03</td>--}}
                                {{--                                    <td>$345,000</td>--}}
                                {{--                                </tr>--}}
                                {{--                                <tr>--}}
                                {{--                                    <td>Yuri Berry</td>--}}
                                {{--                                    <td>Chief Marketing Officer (CMO)</td>--}}
                                {{--                                    <td>New York</td>--}}
                                {{--                                    <td>40</td>--}}
                                {{--                                    <td>2009/06/25</td>--}}
                                {{--                                    <td>$675,000</td>--}}
                                {{--                                </tr>--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
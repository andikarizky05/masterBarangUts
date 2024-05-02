@extends('layouts.app')
@section('content')
<section class="section about-section gray-bg" id="about">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color">Tentang Saya</h3>
                    <h6 class="theme-color lead">Mahasiswa sistem informasi</h6>
                    <p><mark>TELKOM UNIVERSITY SURABAYA</mark><br>Saya menganggap diri saya orang yang bertanggung jawab dan tertib. Saya suka mencoba hal baru dan saya selalu belajar dari pengalaman saya yang sebelumnya.</p>
                    <div class="row about-list">
                        <div class="col-md-6">
                            <div class="media">
                                <label>Nama</label>
                                <p>Andika Rizky Pratama</p>
                            </div>
                            <div class="media">
                                <label>Tanggal lahir</label>
                                <p>05-May-2004</p>
                            </div>
                            <div class="media">
                                <label>NIM</label>
                                <p>1204220108</p>
                            </div>
                            <div class="media">
                                <label>Alamat</label>
                                <p>Surabaya, Indonesia</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="media">
                                <label>E-mail</label>
                                <p>andikarizkypratama@stude nt.telkomuniversity.ac.id</p>
                            </div>
                            <div class="media">
                                <label>Phone</label>
                                <p>0859-6279-2621</p>
                            </div>
                            <div class="media">
                                <label>Instagram</label>
                                <p>andikarizky05</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-avatar">
                    <img src="{{ Vite::asset('resources/images/profile/qqqq.jpg') }}" width="470" height="600">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('js-libraries')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush
@push('js')
    @vite('resources/js/charts.js')
@endpush

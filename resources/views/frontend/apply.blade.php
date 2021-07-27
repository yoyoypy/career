@extends('frontend.layouts.default')


@section('meta')
         <title>Apply Form {{ $item->jobtitle }} | Sadhana Karir</title>
         <meta name="description" content="">
@endsection


@section('content')
<main>
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="frontend/assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Come Join Us!</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="job-post-company pt-120 pb-120">
    <div class="container">
    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <h3 class="mb-30">Please, fill in your personal data below</h3>
                <small>* Wajib di isi</small>
                <form action="./submit" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="form-group mt-10">
                        <label for="fullname" class="form-control-label">Nama Lengkap*</label>
                            <input  type="text"
                                    name="fullname"
                                    value="{{ old('fullname') }}"
                                    class="form-control @error('fullname') is-invalid @enderror"/>
                            @error('fullname') <div class="text-muted">{{ $message }}</div> @enderror
                    </div> --}}
                    <div class="form-group mt-10">
                        <label for="firstname" class="form-control-label">Nama Depan*</label>
                            <input  type="text"
                                    name="firstname"
                                    value="{{ old('firstname') }}"
                                    class="form-control @error('firstname') is-invalid @enderror"/>
                            @error('firstname') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="lastname" class="form-control-label">Nama Belakang</label>
                            <input  type="text"
                                    name="lastname"
                                    value="{{ old('lastname') }}"
                                    class="form-control @error('lastname') is-invalid @enderror"/>
                            @error('lastname') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="dob" class="form-control-label">Tanggal Lahir*</label>
                            <input  type="text"
                                    name="dob"
                                    value="{{ old('dob') }}"
                                    class="form-control @error('dob') is-invalid @enderror"/>
                            <small class="form-text text-muted">ex. YYYY-MM-DD</small>
                            @error('dob') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="pob" class="form-control-label">Tempat Lahir*</label>
                            <input  type="text"
                                    name="pob"
                                    value="{{ old('pob') }}"
                                    class="form-control @error('pob') is-invalid @enderror"/>
                            @error('pob') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="sex" class="form-control-label">Jenis Kelamin*</label>
                        <div class="form-select" id="default-select">
                            <select name="sex"
                                    value="{{ old('sex') }}"
                                    class="form-control @error('sex') is-invalid @enderror">
                                <option value="male">Laki-Laki</option>
                                <option value="female">Perempuan</option>
                            </select>
                        @error('sex') <div class="text-muted">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="form-group mt-10">
                        <label for="education" class="form-control-label">Jenjang Pendidikan*</label>
                        <div class="form-select" id="default-select">
                            <select name="education"
                                    value="{{ old('education') }}"
                                    class="form-control @error('education') is-invalid @enderror">
                                <option value="sma">SMA / SLTA / Sederajat</option>
                                <option value="s1">Strata 1 / Sederajat</option>
                                <option value="s2">Strata 2 / Sederajat</option>
                                <option value="else">Lain-lain</option>
                            </select>
                        @error('education') <div class="text-muted">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    {{-- <div class="form-group mt-10">
                        <label for="weight" class="form-control-label">Berat Badan (Kg)</label>
                            <input  type="number"
                                    name="weight"
                                    value="{{ old('weight') }}"
                                    class="form-control @error('weight') is-invalid @enderror"/>
                            @error('weight') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="height" class="form-control-label">Tinggi Badan (Cm)</label>
                            <input  type="number"
                                    name="height"
                                    value="{{ old('height') }}"
                                    class="form-control @error('height') is-invalid @enderror"/>
                            @error('height') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="bloodtype" class="form-control-label">Golongan Darah</label>
                        <div class="form-select" id="default-select">
                            <select name="bloodtype"
                                    value="{{ old('bloodtype') }}"
                                    class="form-control @error('bloodtype') is-invalid @enderror">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="O">O</option>
                                <option value="AB">AB</option>
                                <option value="no">Tidak tahu</option>
                            </select>
                        @error('bloodtype') <div class="text-muted">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="form-group mt-10">
                        <label for="eye" class="form-control-label">Memakai Kacamata</label>
                        <div class="form-select" id="default-select">
                            <select name="eye"
                                    value="{{ old('eye') }}"
                                    class="form-control @error('eye') is-invalid @enderror">
                                    <option value="no">Tidak</option>
                                    <option value="yes">Ya</option>
                            </select>
                        @error('eye') <div class="text-muted">{{ $message }}</div>@enderror
                        </div>
                    </div> --}}
                    <div class="form-group mt-10">
                        <label for="id_card_address" class="form-control-label">Alamat sesuai KTP*</label>
                        <textarea name="id_card_address"
                        class="form-control @error('id_card_address') is-invalid @enderror">{{ old('id_card_address')}}</textarea>
                        @error('id_card_address') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="present_address" class="form-control-label">Alamat Terbaru*</label>
                        <textarea name="present_address"
                        class="form-control @error('present_address') is-invalid @enderror">{{ old('present_address')}}</textarea>
                        @error('present_address') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="phone_number" class="form-control-label">Nomor Handphone Aktif*</label>
                            <input  type="number"
                                    name="phone_number"
                                    value="{{ old('phone_number') }}"
                                    class="form-control @error('phone_number') is-invalid @enderror"/>
                            @error('phone_number') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="email" class="form-control-label">E-Mail Aktif*</label>
                            <input  type="text"
                                    name="email"
                                    value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror"/>
                            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="id_card_number" class="form-control-label">Nomor KTP*</label>
                            <input  type="number"
                                    name="id_card_number"
                                    value="{{ old('id_card_number') }}"
                                    class="form-control @error('id_card_number') is-invalid @enderror"/>
                            @error('id_card_number') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    {{-- <div class="form-group mt-10">
                        <label for="tax_id_card_number" class="form-control-label">Nomor NPWP</label>
                            <input  type="number"
                                    name="tax_id_card_number"
                                    value="{{ old('tax_id_card_number') }}"
                                    class="form-control @error('tax_id_card_number') is-invalid @enderror"/>
                            @error('tax_id_card_number') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="social_security_number" class="form-control-label">Nomor BPJS TK</label>
                            <input  type="number"
                                    name="social_security_number"
                                    value="{{ old('social_security_number') }}"
                                    class="form-control @error('social_security_number') is-invalid @enderror"/>
                            @error('social_security_number') <div class="text-muted">{{ $message }}</div> @enderror
                    </div> --}}
                    <div class="form-group mt-10">
                        <label for="marital_status" class="form-control-label">Status</label>
                        <div class="form-select" id="default-select">
                            <select name="marital_status"
                                    value="{{ old('marital_status') }}"
                                    class="form-control @error('marital_status') is-invalid @enderror">
                                    <option value="single">Lajang</option>
                                    <option value="married">Menikah</option>
                                    <option value="divorced">Bercerai</option>
                                    <option value="not_answer">Tidak ingin menjawab</option>
                            </select>
                        @error('marital_status') <div class="text-muted">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="form-group mt-10">
                        <label for="cv" class="form-control-label">Upload CV*</label>
                        <input  type="file"
                                name="cv"
                                value="{{ old('cv') }}"
                                accept="application/pdf"
                                style="padding: 3px"
                                class="form-control @error('cv') is-invalid @enderror"/>
                            <small class="form-text text-muted">File PDF dengan format nama file <em>namapekerjaan-namalengkap</em></small>
                        @error('cv') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="jobvacancy_id" class="form-control-label"></label>
                            <input  type="text"
                                    name="jobvacancy_id"
                                    value="{{ $item->id }}"
                                    class="form-control @error('jobvacancy_id') is-invalid @enderror"
                                    hidden/>
                            @error('jobvacancy_id') <div class="text-muted">{{ $item->id }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                    <button class="btn btn-primary btn-sm" style="float: right" type="submit">
                        Submit Job Application
                      </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


</main>
@endsection

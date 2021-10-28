@extends('frontend.layouts.default')


@section('meta')
         <title>Apply Form {{ $item->jobtitle }} | Sadhana Karir</title>
         <meta name="description" content="">
@endsection


@section('content')
<main>
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="{{ asset('frontend/assets/img/hero/sales4.jpg') }}">
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

<div class="job-post-company pb-120">
    <div class="container">
    <div class="section-top-border">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <h3 class="mb-30">Please, fill in your personal data below</h3>
                <small>* Wajib di isi</small>
                <form action="./submit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-10">
                        <label for="firstname" class="form-control-label">Nama Depan*</label>
                            <input  type="text"
                                    name="firstname"
                                    value="{{ old('firstname') }}"
                                    required
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
                                    required
                                    class="form-control @error('dob') is-invalid @enderror"/>
                            <small class="form-text text-muted">ex. YYYY-MM-DD</small>
                            @error('dob') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="pob" class="form-control-label">Tempat Lahir*</label>
                            <input  type="text"
                                    name="pob"
                                    value="{{ old('pob') }}"
                                    required
                                    class="form-control @error('pob') is-invalid @enderror"/>
                            @error('pob') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="sex" class="form-control-label">Jenis Kelamin*</label>
                        <div class="form-select" id="default-select">
                            <select name="sex"
                                    value="{{ old('sex') }}"
                                    required
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
                                    required
                                    class="form-control @error('education') is-invalid @enderror">
                                <option value="sma">SMA / SLTA / Sederajat</option>
                                <option value="s1">Strata 1 / Sederajat</option>
                                <option value="s2">Strata 2 / Sederajat</option>
                                <option value="else">Lain-lain</option>
                            </select>
                        @error('education') <div class="text-muted">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="form-group mt-10">
                        <label for="salary" class="form-control-label">Gaji yang diharapkan*</label>
                            <input  type="number"
                                    name="salary"
                                    value="{{ old('salary') }}"
                                    placeholder="contoh : 4000000"
                                    required
                                    class="form-control @error('salary') is-invalid @enderror"/>
                        @error('salary') <div class="text-muted">{{ $message }}</div>@enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="id_card_address" class="form-control-label">Alamat sesuai KTP*</label>
                        <textarea name="id_card_address"
                        required
                        class="form-control @error('id_card_address') is-invalid @enderror">{{ old('id_card_address')}}</textarea>
                        @error('id_card_address') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="present_address" class="form-control-label">Alamat Terbaru*</label>
                        <textarea name="present_address"
                        required
                        class="form-control @error('present_address') is-invalid @enderror">{{ old('present_address')}}</textarea>
                        @error('present_address') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="phone_number" class="form-control-label">Nomor Handphone Aktif*</label>
                            <input  type="number"
                                    name="phone_number"
                                    value="{{ old('phone_number') }}"
                                    placeholder="08xxxxxxxxxx"
                                    required
                                    class="form-control @error('phone_number') is-invalid @enderror"/>
                            @error('phone_number') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="email" class="form-control-label">E-Mail Aktif*</label>
                            <input  type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    class="form-control @error('email') is-invalid @enderror"/>
                            @error('email') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="id_card_number" class="form-control-label">Nomor KTP*</label>
                            <input  type="number"
                                    maxlength="16"
                                    name="id_card_number"
                                    value="{{ old('id_card_number') }}"
                                    required
                                    class="form-control @error('id_card_number') is-invalid @enderror"/>
                            @error('id_card_number') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
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
                                required
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
                    @foreach ( $item->Questions as $question )
                    <div class="form-group mt-10">
                        <label for="question_id" class="form-control-label"></label>
                            <input  type="text"
                                    name="question_id[]"
                                    value="{{ $question->id }}"
                                    class="form-control @error('question_id') is-invalid @enderror"
                                    hidden/>
                            @error('question_id') <div class="text-muted">{{ $question->id }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="answer" class="form-control-label">{{ $question->question }}*</label>
                        <div class="form-select" id="default-select">
                            <select name="answers[]"
                                    value="{{ old('answer') }}"
                                    class="form-control @error('answer') is-invalid @enderror">
                                    @foreach ( $question->value as $value)
                                    <option value="{{ $value->value }}">{{ $value->value }}</option>
                                    @endforeach
                            </select>
                        </div>
                        @error('answer') <div class="text-muted">{{ $message }}</div>@enderror
                    </div>
                    @endforeach
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

@extends('frontend.layouts.default')


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
                <form action="job/{slug}/apply" method="POST">
                    @csrf
                    <div class="form-group mt-10">
                        <label for="jobvacancy_id" class="form-control-label">Job Vacancies</label>
                            <input  type="text"
                                    name="jobvacancy_id"
                                    value="{{ $item->jobtitle }}"
                                    class="form-control @error('jobvacancy_id') is-invalid @enderror"
                                    disabled/>
                            @error('jobvacancy_id') <div class="text-muted">{{ $item->id }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="fullname" class="form-control-label">Nama Lengkap</label>
                            <input  type="text"
                                    name="fullname"
                                    value="{{ old('fullname') }}"
                                    class="form-control @error('fullname') is-invalid @enderror"/>
                            @error('fullname') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="firstname" class="form-control-label">Nama Depan</label>
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
                        <label for="dob" class="form-control-label">Tanggal Lahir</label>
                            <input  type="text"
                                    name="dob"
                                    value="{{ old('dob') }}"
                                    class="form-control @error('dob') is-invalid @enderror"/>
                            <small class="form-text text-muted">ex. YYYY-MM-DD</small>
                            @error('dob') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="pob" class="form-control-label">Tempat Lahir</label>
                            <input  type="text"
                                    name="pob"
                                    value="{{ old('pob') }}"
                                    class="form-control @error('pob') is-invalid @enderror"/>
                            @error('pob') <div class="text-muted">{{ $message }}</div> @enderror
                    </div>
                    <div class="form-group mt-10">
                        <label for="sex" class="form-control-label">Jenis Kelamin</label>
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
                        <label for="education" class="form-control-label">Jenjang Pendidikan</label>
                        <div class="form-select" id="default-select">
                            <select name="education"
                                    value="{{ old('education') }}"
                                    class="form-control @error('education') is-invalid @enderror">
                                <option value="sma">SMA / SLTA / Sederajat</option>
                                <option value="s1">Strata 1 / Sederajat</option>
                                <option value="s2">Strata 2 / Sederajat</option>
                            </select>
                        @error('education') <div class="text-muted">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="form-group mt-10">
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
                                <option value="sma">SMA / SLTA / Sederajat</option>
                                <option value="s1">Strata 1 / Sederajat</option>
                                <option value="s2">Strata 2 / Sederajat</option>
                            </select>
                        @error('bloodtype') <div class="text-muted">{{ $message }}</div>@enderror
                        </div>
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                        <input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Address'" required class="single-input">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                        <div class="form-select" id="default-select">
                                    <select>
                                        <option value=" 1">City</option>
                            <option value="1">Dhaka</option>
                            <option value="1">Dilli</option>
                            <option value="1">Newyork</option>
                            <option value="1">Islamabad</option>
                            </select>
                        </div>
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="fa fa-globe" aria-hidden="true"></i></div>
                        <div class="form-select" id="default-select"">
                                    <select>
                                        <option value=" 1">Country</option>
                            <option value="1">Bangladesh</option>
                            <option value="1">India</option>
                            <option value="1">England</option>
                            <option value="1">Srilanka</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-10">
                        <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Message'" required></textarea>
                    </div>
                    <!-- For Gradient Border Use -->
                    <!-- <div class="form-group mt-10">
                                <div class="primary-input">
                                    <input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
                                    <label for="primary-input"></label>
                                </div>
                            </div> -->
                    <div class="form-group mt-10">
                        <input type="text" name="first_name" placeholder="Primary color"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'" required
                            class="single-input-primary">
                    </div>
                    <div class="form-group mt-10">
                        <input type="text" name="first_name" placeholder="Accent color"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Accent color'" required
                            class="single-input-accent">
                    </div>
                    <div class="form-group mt-10">
                        <input type="text" name="first_name" placeholder="Secondary color"
                            onfocus="this.placeholder = ''" onblur="this.placeholder = 'Secondary color'"
                            required class="single-input-secondary">
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

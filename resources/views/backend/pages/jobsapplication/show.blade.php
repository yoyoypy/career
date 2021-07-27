<div class="modal fade" id="scrollmodal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="scrollmodalLabel" style="float: left"><strong>{{$item->firstname}}</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="text-align: left">
                First Name :        <strong>{{ $item->firstname }}</strong> &nbsp; &nbsp; &nbsp;
                last Name :         <strong>{{ $item->lastname }}</strong><br><br>
                Job Vacancies :     <strong>{{ $item->Job->jobtitle }}</strong><br><br>
                Date Of Birth :     <strong>{{ $item->dob }}</strong> &nbsp; &nbsp; &nbsp;
                Place Of Birth :    <strong>{{ $item->pob }}</strong><br><br>
                Sex :               <strong>{{ $item->sex }}</strong><br><br>
                Education :         <strong>{{ $item->education }}</strong><br><br>
                {{-- Weight :            <strong>{{ $item->weight }}</strong>&nbsp; &nbsp; &nbsp; --}}
                {{-- Height :            <strong>{{ $item->height }}</strong>&nbsp; &nbsp; &nbsp; --}}
                {{-- Blood Type :        <strong>{{ $item->bloodtype }}</strong>&nbsp; &nbsp; &nbsp; --}}
                {{-- Eyeglasses :        <strong>{{ $item->eye }}</strong><br><br> --}}
                ID card Address :   <strong>{{ $item->id_card_address }}</strong><br><br>
                Present Address :   <strong>{{ $item->present_address }}</strong><br><br>
                Phone Number :      <strong>{{ $item->phone_number }}</strong> &nbsp; &nbsp; &nbsp;
                E-Mail :            <strong>{{ $item->email }}</strong><br><br>
                ID Card Number :    <strong>{{ $item->id_card_number }}</strong><br><br>
                {{-- NPWP :              <strong>{{ $item->tax_id_card_number }}</strong><br><br> --}}
                {{-- BPJS TK :           <strong>{{ $item->social_security_number }}</strong><br><br> --}}
                Marital Status :    <strong>{{ $item->marital_status }}</strong><br><br>
            </div>
            <div class="modal-footer">
                <a href="{{ $item->cv }}" class="btn btn-primary btn-sm"><i class="fa fa-download"> Download CV</i></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="scrollmodal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="scrollmodalLabel" style="float: left"><strong>{{$item->firstname}} {{ $item->lastname }}</strong></h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table table-bordered" style="text-align: left !important">
                    <tr>
                        <th>Status</th>
                        <td>@if($item->status == 'new')
                                <span class="badge badge-primary">
                            @elseif($item->status == 'phone interview')
                                <span class="badge badge-info">
                            @elseif($item->status == 'interview')
                                <span class="badge badge-warning">
                            @elseif($item->status == 'hired')
                                <span class="badge badge-success">
                            @elseif($item->status == 'rejected')
                                <span class="badge badge-danger">
                            @else
                                <span>
                            @endif
                        {{ $item->status }}
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>Job Vacancy</th>
                        <td>{{ $item->Job->jobtitle }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $item->firstname }} {{ $item->lastname }}</td>
                    </tr>
                    <tr>
                        <th>Biodata</th>
                        <td>
                          <table class="tabble table-bordered w-100">
                            <tr>
                              <th>Date Of birth</th>
                              <th>Place Of Birth</th>
                              <th>Sex</th>
                              <th>Education</th>
                              <th>Marital Status</th>
                            </tr>
                            <td>{{ $item->dob }}</td>
                            <td>{{ $item->pob }}</td>
                            <td>{{ $item->sex }}</td>
                            <td>{{ $item->education }}</td>
                            <td>{{ $item->marital_status }}</td>
                          </table>
                        </td>
                      </tr>
                    <tr>
                        <th>Contact</th>
                        <td>
                          <table class="tabble table-bordered w-100">
                            <tr>
                              <th>Phone</th>
                              <th>Email</th>
                            </tr>
                            <td>{{ $item->phone_number }}</td>
                            <td>{{ $item->email }}</td>
                          </table>
                        </td>
                      </tr>
                    <tr>
                        <th>Address</th>
                        <td>
                          <table class="tabble table-bordered w-100">
                            <tr>
                              <th>Alamat Sekarang</th>
                              <th>Alamat KTP</th>
                            </tr>
                            <td>{{ $item->present_address }}</td>
                            <td>{{ $item->id_card_address }}</td>
                          </table>
                        </td>
                    </tr>
                    <tr>
                        <th>Custom Question</th>
                        <td>
                          <table class="tabble table-bordered w-100">
                              @forelse ( $item->answers as $answer )
                                <tr>
                                <th>{{ $answer->Question->question }}</th>
                                </tr>
                                <td>{{ $answer->answer }}</td>
                                @empty
                                <td>No Custom Question</td>
                              @endforelse
                          </table>
                        </td>
                    </tr>
                    <tr>
                        <th>ID Card Number</th>
                        <td>{{ $item->id_card_number }}</td>
                    </tr>
                  </table>
                {{-- modal old version --}}
                        {{-- First Name :        <strong>{{ $item->firstname }}</strong> &nbsp; &nbsp; &nbsp; --}}
                        {{-- last Name :         <strong>{{ $item->lastname }}</strong><br><br> --}}
                        {{-- Job Vacancies :     <strong>{{ $item->Job->jobtitle }}</strong><br><br> --}}
                        {{-- Date Of Birth :     <strong>{{ $item->dob }}</strong> &nbsp; &nbsp; &nbsp; --}}
                        {{-- Place Of Birth :    <strong>{{ $item->pob }}</strong><br><br> --}}
                        {{-- Sex :               <strong>{{ $item->sex }}</strong><br><br> --}}
                        {{-- Education :         <strong>{{ $item->education }}</strong><br><br> --}}
                        {{-- Weight :            <strong>{{ $item->weight }}</strong>&nbsp; &nbsp; &nbsp; --}}
                        {{-- Height :            <strong>{{ $item->height }}</strong>&nbsp; &nbsp; &nbsp; --}}
                        {{-- Blood Type :        <strong>{{ $item->bloodtype }}</strong>&nbsp; &nbsp; &nbsp; --}}
                        {{-- Eyeglasses :        <strong>{{ $item->eye }}</strong><br><br> --}}
                        {{-- ID card Address :   <strong>{{ $item->id_card_address }}</strong><br><br> --}}
                        {{-- Present Address :   <strong>{{ $item->present_address }}</strong><br><br> --}}
                        {{-- Phone Number :      <strong>{{ $item->phone_number }}</strong> &nbsp; &nbsp; &nbsp; --}}
                        {{-- E-Mail :            <strong>{{ $item->email }}</strong><br><br> --}}
                        {{-- ID Card Number :    <strong>{{ $item->id_card_number }}</strong><br><br> --}}
                        {{-- NPWP :              <strong>{{ $item->tax_id_card_number }}</strong><br><br> --}}
                        {{-- BPJS TK :           <strong>{{ $item->social_security_number }}</strong><br><br> --}}
                        {{-- Marital Status :    <strong>{{ $item->marital_status }}</strong><br><br> --}}
                {{-- modal old version --}}
            </div>
            <div class="modal-footer">
                <a href="{{ $item->cv }}" class="btn btn-primary btn-sm"><i class="fa fa-download"> Download CV</i></a>
            </div>
        </div>
    </div>
</div>

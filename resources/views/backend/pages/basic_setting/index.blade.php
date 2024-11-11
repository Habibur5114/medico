@extends('backend.layout.master')

@push('meta-title')
        Dashboard | Basic Settings
@endpush


@section('body-content')

 <div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Basic Settings</h5>
        </div>


        <div class="card-body">
            @if ( !empty( $basicInfo ) )
               <form method="POST" action="{{ route('admin.basic-info.update', $basicInfo->id ) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            @else
               <form method="POST" action="{{ route('admin.basic-info.store') }}" enctype="multipart/form-data">
                @csrf
            @endif



                <div class="row">
                    <div class="col mb-3">
                        <label for="Logo" class="form-label">Website Logo</label>
                        <input class="form-control" type="file" name="logo" id="Logo">

                        @if ( !empty( $basicInfo ) )
                            <img src="{{ asset($basicInfo->logo) }}" alt="" style="width: 150px;">
                        @endif
                    </div>

                    <div class="col mb-3">
                        <label class="form-label" for="Whatsapp">What'sapp Number</label>
                        <input type="text" class="form-control"
                            id="Whatsapp"
                            name="whatsapp"
                            placeholder="What'sapp Number"
                            @if ( !empty( $basicInfo ) )
                               value="{{ $basicInfo->whatsapp }}"
                            @endif>
                    </div>

                    <div class="col mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone"
                            placeholder="Write Phone"
                            @if ( !empty( $basicInfo ) )
                               value="{{ $basicInfo->phone }}"
                            @endif
                            required>
                    </div>

                    <div class="col mb-3">
                        <label class="form-label" for="phone_optional">Phone ( Optional )</label>
                        <input type="text" class="form-control" id="phone_optional" name="phone_optional"
                            @if ( !empty( $basicInfo ) )
                               value="{{ $basicInfo->phone_optional }}"
                            @endif
                            placeholder="Write Phone ( Optional )">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->email }}"
                            @endif
                            placeholder="Write Email Address" required >
                    </div>

                    <div class="col mb-3">
                        <label class="form-label" for="email_optional">Email Address ( Optional )</label>
                        <input type="email" class="form-control" id="email_optional" name="email_optional"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->email_optional }}"
                            @endif
                            placeholder="Write Email Address ( Optional )">
                    </div>

                    <div class="col mb-3">
                        <label for="facebook" class="form-label">Facebook</label>
                        <input type="text" class="form-control" id="facebook" name="facebook"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->facebook }}"
                            @endif
                            placeholder="Facebook Link Here....">
                    </div>

                    <div class="col mb-3">
                        <label for="twitter" class="form-label">Twitter</label>
                        <input type="text" class="form-control" id="twitter" name="twitter"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->twitter }}"
                            @endif
                            placeholder="Twitter Link Here....">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="linkedin" class="form-label">Linkedin</label>
                        <input type="text" class="form-control" id="linkedin" name="linkedin"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->linkedin }}"
                            @endif
                            placeholder="Linkedin Link Here....">
                    </div>

                    <div class="col mb-3">
                        <label for="pinterest" class="form-label">Pinterest</label>
                        <input type="text" class="form-control" id="pinterest" name="pinterest"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->pinterest }}"
                            @endif
                            placeholder="Pinterest Link Here....">
                    </div>

                    <div class="col mb-3">
                        <label for="instagram" class="form-label">Instagram</label>
                        <input type="text" class="form-control" id="instagram" name="instagram"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->instagram }}"
                            @endif
                            placeholder="Instagram Link Here....">
                    </div>

                    <div class="col mb-3">
                        <label for="youtube" class="form-label">Youtube</label>
                        <input type="text" class="form-control" id="youtube" name="youtube"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->youtube }}"
                            @endif
                            placeholder="Youtube Link Here....">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label for="experience" class="form-label">Years Of Experience</label>
                        <input type="number" class="form-control" id="experience" name="experience"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->experience }}"
                            @endif
                            placeholder="Write Here....">
                    </div>

                    <div class="col mb-3">
                        <label for="medical_product" class="form-label">Medical Product</label>
                        <input type="number" class="form-control" id="medical_product" name="medical_product"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->medical_product }}"
                            @endif
                            placeholder="Write Here....">
                    </div>

                    <div class="col mb-3">
                        <label for="client_satisfy" class="form-label">Client Satisfy</label>
                        <input type="number" class="form-control" id="client_satisfy" name="client_satisfy"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->client_satisfy }}"
                            @endif
                            placeholder="Write Here....">
                    </div>

                    <div class="col mb-3">
                        <label for="country_product" class="form-label">Country Product<</label>
                        <input type="number" class="form-control" id="country_product" name="country_product"
                            @if ( !empty( $basicInfo ) )
                                value="{{ $basicInfo->country_product }}"
                            @endif
                            placeholder="Write Here....">
                    </div>
                </div>

                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label" for="address">Address</label>
                        <textarea id="address" class="form-control" name="address" placeholder="Write Address" required>@if( !empty( $basicInfo ) ){{ $basicInfo->address }}@endif</textarea>
                     </div>

                     <div class="col mb-3">
                       <label class="form-label" for="address_optional">Address ( Optional )</label>
                       <textarea id="address_optional" class="form-control" name="address_optional" placeholder="Write Address ( Optional )">@if ( !empty( $basicInfo ) ){{ $basicInfo->address_optional }}@endif</textarea>
                     </div>
                </div>

                @if ( !empty( $basicInfo ) )
                    <button type="submit" class="btn btn-primary">Update</button>
                @else
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                @endif
            </form>
        </div>
    </div>
 </div>

@endsection


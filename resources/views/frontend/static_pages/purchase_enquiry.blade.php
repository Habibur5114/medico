@extends('frontend.layout.template')

@push('meta-title')
        Medico Bangladesh
@endpush

@push('add-css')

@endpush


@section('body-content')

 <!--==========================
  Breadcrumb Section
  ============================-->
  <div class="breadcrumb-image" style="background-image: url({{ asset('public/frontend/images/banner/product.jpg') }});">
    <div class="container text-left">
        <h1>Purchase Enquiry Form</h1>
        <div class="breadcrumbs_path">
          <a href="index.php">Home</a>
          Purchase Enquiry Form
        </div>
    </div>
    </div>

  <!--==========================
  Product Section
  ============================-->
  <section class="pt-80"  style="background:#ebeaea;">
    <div class="container">

    	<div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Purchase Enquiry Form</h3>
          <p class="section-description">Fill up the following form and mention the products you wish to buy along with the quantity required. Give complete and correct contact information so that the distributor in your area quickly contact you. </p>
          <hr class="bottom-line">
        </div>
      </div>

      <div class="row">
      	<div class="offset-md-2 col-md-8">
        <div align="center" style="height:30px"><font color="#FF0000" size="3px"><strong></strong></font></div>

                <div class="wrap-contact100">

<form class="form-horizontal contact100-form" name="quotation" method="post" action="" enctype="multipart/form-data" onSubmit="return v.exec()">
      <input type="hidden" name="formcat" id="formcat" value="Purchase Enquiry Form" />
        <input type="hidden" name="manager" id="manager" value="Purchase Enquiry Form" />

     <p><strong>*</strong> Fields are required.</p>

<div class="form-group row">
  <label id="_products" class="col-sm-3 col-form-label"> <strong>*</strong> I'm interested in buying following products / Quantity</label>

<div class="col-sm-9 wrap-input100">
<textarea class="input100" name="products" rows="6"></textarea>
  <span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
</div>

  </div>

   <h6>I want your local distributor to contact me immediately. My details are as below:</h6>


<div class="form-group row">
  <label id="_name" class="col-sm-3 col-form-label"><strong>*</strong> Full Name</label>
  <div class="col-sm-9 wrap-input100">
  <input class="input100" type="text" name="name" id="name" value="" />
  <span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
  </div>
  </div>

  <div class="form-group row">
  <label id="_position" class="col-sm-3 col-form-label"><strong>*</strong> Position/Title</label>
  <div class="col-sm-9 wrap-input100">
  <input class="input100" type="text" name="position" id="position" value="" />
  <span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
  </div>
  </div>


<div class="form-group row">
    <label id="_email" class="col-sm-3 col-form-label"><strong>*</strong> Email Address</label>
    <div class="col-sm-9 wrap-input100">
    <input class="input100" type="text" name="email" id="email" value="" />
    <span class="focus-input100-1"></span>
    <span class="focus-input100-2"></span>
    </div>
  </div>

<div class="form-group row">
    <label id="_phone" class="col-sm-3 col-form-label"><strong>*</strong> Phone</label>
    <div class="col-sm-9 wrap-input100">
    <input class="input100" type="text" name="phone" id="phone" value="" />
    <span class="focus-input100-1"></span>
    <span class="focus-input100-2"></span>
    </div>
</div>

<div class="form-group row">
    <label id="_company" class="col-sm-3 col-form-label"><strong>*</strong> Company Name</label>
    <div class="col-sm-9 wrap-input100">
    <input class="input100" type="text" name="company" id="company" value="" />
    <span class="focus-input100-1"></span>
    <span class="focus-input100-2"></span>
    </div>
</div>

<div class="form-group row">
    <label id="_companyweb" class="col-sm-3 col-form-label">Website URL</label>
    <div class="col-sm-9 wrap-input100">
    <input class="input100" type="text" name="companyweb" id="companyweb" value="" />
    <span class="focus-input100-1"></span>
    <span class="focus-input100-2"></span>
    </div>
</div>

<div class="form-group row">
  <label id="_address" class="col-sm-3 col-form-label">Full Address</label>
  <div class="col-sm-9 wrap-input100">
  <textarea class="input100" name="address" rows="4"></textarea>
  <span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
  </div>
</div>

<div class="form-group row">
  <label id="_country" class="col-sm-3 col-form-label">Country</label>
 <div class="col-sm-9 wrap-input100">
<select class="input100" name="country">
                    <OPTION>-- Please Select --</OPTION>
                    <OPTION>&Aring;LAND ISLANDS</OPTION><OPTION>AFGHANISTAN</OPTION><OPTION>ALBANIA</OPTION><OPTION>ALGERIA</OPTION><OPTION>AMERICAN SAMOA</OPTION><OPTION>ANDORRA</OPTION><OPTION>ANGOLA</OPTION><OPTION>ANGUILLA</OPTION><OPTION>ANTARCTICA</OPTION><OPTION>ANTIGUA AND BARBUDA</OPTION><OPTION>ARGENTINA</OPTION><OPTION>ARMENIA</OPTION><OPTION>ARUBA</OPTION><OPTION>AUSTRALIA</OPTION><OPTION>AUSTRIA</OPTION><OPTION>AZERBAIJAN</OPTION><OPTION>BAHAMAS</OPTION><OPTION>BAHRAIN</OPTION><OPTION>BANGLADESH</OPTION><OPTION>BARBADOS</OPTION><OPTION>BELARUS</OPTION><OPTION>BELGIUM</OPTION><OPTION>BELIZE</OPTION><OPTION>BENIN</OPTION><OPTION>BERMUDA</OPTION><OPTION>BHUTAN</OPTION><OPTION>BOLIVIA</OPTION><OPTION>BOSNIA AND HERZEGOWINA</OPTION><OPTION>BOTSWANA</OPTION><OPTION>BOUVET ISLAND</OPTION><OPTION>BRAZIL</OPTION><OPTION>BRITISH INDIAN OCEAN TERRITORY</OPTION><OPTION>BRITISH VIRGIN ISLANDS</OPTION><OPTION>BRUNEI</OPTION><OPTION>BULGARIA</OPTION><OPTION>BURKINA FASO</OPTION><OPTION>BURUNDI</OPTION><OPTION>CAMBODIA</OPTION><OPTION>CAMEROON</OPTION><OPTION>CANADA</OPTION><OPTION>CAPE VERDE</OPTION><OPTION>CAYMAN ISLANDS</OPTION><OPTION>CENTRAL AFRICAN REPUBLIC</OPTION><OPTION>CHAD</OPTION><OPTION>CHILE</OPTION><OPTION>CHINA</OPTION><OPTION>CHRISTMAS ISLAND</OPTION><OPTION>COCOS [KEELING] ISLANDS</OPTION><OPTION>COLOMBIA</OPTION><OPTION>COMOROS</OPTION><OPTION>CONGO - BRAZZAVILLE</OPTION><OPTION>CONGO - KINSHASA</OPTION><OPTION>COOK ISLANDS</OPTION><OPTION>COSTA RICA</OPTION><OPTION>COTE DIVOIRE</OPTION><OPTION>CROATIA</OPTION><OPTION>CUBA</OPTION><OPTION>CURACAO</OPTION><OPTION>CYPRUS</OPTION><OPTION>CZECH REPUBLIC</OPTION><OPTION>DENMARK</OPTION><OPTION>DJIBOUTI</OPTION><OPTION>DOMINICA</OPTION><OPTION>DOMINICAN REPUBLIC</OPTION><OPTION>ECUADOR</OPTION><OPTION>EGYPT</OPTION><OPTION>EL SALVADOR</OPTION><OPTION>EQUATORIAL GUINEA</OPTION><OPTION>ERITREA</OPTION><OPTION>ESTONIA</OPTION><OPTION>ETHIOPIA</OPTION><OPTION>FALKLAND ISLANDS (MALVINAS)</OPTION><OPTION>FAROE ISLANDS</OPTION><OPTION>FIJI</OPTION><OPTION>FINLAND</OPTION><OPTION>FRANCE</OPTION><OPTION>FRENCH GUIANA</OPTION><OPTION>FRENCH POLYNESIA</OPTION><OPTION>FRENCH SOUTHERN TERRITORIES</OPTION><OPTION>GABON</OPTION><OPTION>GAMBIA</OPTION><OPTION>GEORGIA</OPTION><OPTION>GERMANY</OPTION><OPTION>GHANA</OPTION><OPTION>GIBRALTAR</OPTION><OPTION>GREECE</OPTION><OPTION>GREENLAND</OPTION><OPTION>GRENADA</OPTION><OPTION>GUADELOUPE</OPTION><OPTION>GUAM</OPTION><OPTION>GUATEMALA</OPTION><OPTION>GUERNSEY</OPTION><OPTION>GUINEA</OPTION><OPTION>GUINEA-BISSAU</OPTION><OPTION>GUYANA</OPTION><OPTION>HAITI</OPTION><OPTION>HEARD ISLAND AND MCDONALD ISLANDS</OPTION><OPTION>HONDURAS</OPTION><OPTION>Hong Kong</OPTION><OPTION>HUNGARY</OPTION><OPTION>ICELAND</OPTION><OPTION>INDIA</OPTION><OPTION>INDONESIA</OPTION><OPTION>IRAN</OPTION><OPTION>IRAQ</OPTION><OPTION>IRELAND</OPTION><OPTION>ISLE OF MAN</OPTION><OPTION>ISRAEL</OPTION><OPTION>ITALY</OPTION><OPTION>JAMAICA</OPTION><OPTION>JAPAN</OPTION><OPTION>JERSEY</OPTION><OPTION>JORDAN</OPTION><OPTION>KAZAKHSTAN</OPTION><OPTION>KENYA</OPTION><OPTION>KIRIBATI</OPTION><OPTION>KOSOVO</OPTION><OPTION>KUWAIT</OPTION><OPTION>KYRGYZSTAN</OPTION><OPTION>LAOS</OPTION><OPTION>LATVIA</OPTION><OPTION>LEBANON</OPTION><OPTION>LESOTHO</OPTION><OPTION>LIBERIA</OPTION><OPTION>LIBYA</OPTION><OPTION>LIECHTENSTEIN</OPTION><OPTION>LITHUANIA</OPTION><OPTION>LUXEMBOURG</OPTION><OPTION>MACAU</OPTION><OPTION>MACEDONIA</OPTION><OPTION>MADAGASCAR</OPTION><OPTION>MALAWI</OPTION><OPTION>MALAYSIA</OPTION><OPTION>MALDIVES</OPTION><OPTION>MALI</OPTION><OPTION>MALTA</OPTION><OPTION>MARSHALL ISLANDS</OPTION><OPTION>MARTINIQUE</OPTION><OPTION>MAURITANIA</OPTION><OPTION>MAURITIUS</OPTION><OPTION>MAYOTTE</OPTION><OPTION>MEXICO</OPTION><OPTION>MICRONESIA</OPTION><OPTION>MOLDOVA</OPTION><OPTION>MONACO</OPTION><OPTION>MONGOLIA</OPTION><OPTION>MONTENEGRO</OPTION><OPTION>MONTSERRAT</OPTION><OPTION>MOROCCO</OPTION><OPTION>MOZAMBIQUE</OPTION><OPTION>MYANMAR [BURMA]</OPTION><OPTION>NAMIBIA</OPTION><OPTION>NAURU</OPTION><OPTION>NEPAL</OPTION><OPTION>NETHERLANDS</OPTION><OPTION>NETHERLANDS ANTILLES</OPTION><OPTION>NEW CALEDONIA</OPTION><OPTION>NEW ZEALAND</OPTION><OPTION>NICARAGUA</OPTION><OPTION>NIGER</OPTION><OPTION>NIGERIA</OPTION><OPTION>NIUE</OPTION><OPTION>NORFOLK ISLAND</OPTION><OPTION>NORTH KOREA</OPTION><OPTION>NORTHERN MARIANA ISLANDS</OPTION><OPTION>NORWAY</OPTION><OPTION>OMAN</OPTION><OPTION>PAKISTAN</OPTION><OPTION>PALAU</OPTION><OPTION>PALESTINIAN TERRITORIES</OPTION><OPTION>PANAMA</OPTION><OPTION>PAPUA NEW GUINEA</OPTION><OPTION>PARAGUAY</OPTION><OPTION>PERU</OPTION><OPTION>PHILIPPINES</OPTION><OPTION>PITCAIRN ISLANDS</OPTION><OPTION>POLAND</OPTION><OPTION>PORTUGAL</OPTION><OPTION>PUERTO RICO</OPTION><OPTION>QATAR</OPTION><OPTION>RENUNION</OPTION><OPTION>ROMANIA</OPTION><OPTION>RUSSIA</OPTION><OPTION>RWANDA</OPTION><OPTION>SAINT BARTHELEMY</OPTION><OPTION>SAINT HELENA</OPTION><OPTION>SAINT KITTS AND NEVIS</OPTION><OPTION>SAINT LUCIA</OPTION><OPTION>SAINT MARTIN</OPTION><OPTION>SAINT PIERRE AND MIQUELON</OPTION><OPTION>SAINT VINCENT AND THE GRENADINES</OPTION><OPTION>SAMOA</OPTION><OPTION>SAN MARINO</OPTION><OPTION>SAO TOME E PRINCIPE</OPTION><OPTION>SAUDI ARABIA</OPTION><OPTION>SENEGAL</OPTION><OPTION>SERBIA AND MONTENEGRO</OPTION><OPTION>SEYCHELLES</OPTION><OPTION>SIERRA LEONE</OPTION><OPTION>SINGAPORE</OPTION><OPTION>SLOVAKIA</OPTION><OPTION>SLOVENIA</OPTION><OPTION>SOLOMON ISLANDS</OPTION><OPTION>SOMALIA</OPTION><OPTION>SOUTH AFRICA</OPTION><OPTION>SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS</OPTION><OPTION>SOUTH KOREA</OPTION><OPTION>SOUTH SUDAN</OPTION><OPTION>SPAIN</OPTION><OPTION>SRI LANKA</OPTION><OPTION>SUDAN</OPTION><OPTION>SURINAME</OPTION><OPTION>SVALBARD AND JAN MAYEN</OPTION><OPTION>SWAZILAND</OPTION><OPTION>SWEDEN</OPTION><OPTION>SWITZERLAND</OPTION><OPTION>SYRIA</OPTION><OPTION>TAIWAN</OPTION><OPTION>TAJIKISTAN</OPTION><OPTION>TANZANIA</OPTION><OPTION>THAILAND</OPTION><OPTION>TIMOR-LESTE</OPTION><OPTION>TOGO</OPTION><OPTION>TOKELAU</OPTION><OPTION>TONGA</OPTION><OPTION>TRINIDAD AND TOBAGO</OPTION><OPTION>TUNISIA</OPTION><OPTION>TURKEY</OPTION><OPTION>TURKMENISTAN</OPTION><OPTION>TURKS AND CAICOS ISLANDS</OPTION><OPTION>TUVALU</OPTION><OPTION>UGANDA</OPTION><OPTION>UKRAINE</OPTION><OPTION>UNITED ARAB EMIRATES</OPTION><OPTION>UNITED KINGDOM</OPTION><OPTION>UNITED STATES</OPTION><OPTION>UNITED STATES MINOR OUTLYING ISLANDS</OPTION><OPTION>URUGUAY</OPTION><OPTION>UZBEKISTAN</OPTION><OPTION>VANUATU</OPTION><OPTION>VATICAN CITY</OPTION><OPTION>VENEZUELA</OPTION><OPTION>VIETNAM</OPTION><OPTION>VIRGIN ISLANDS, U.S.</OPTION><OPTION>WALLIS AND FUTUNA</OPTION><OPTION>WESTERN SAHARA</OPTION><OPTION>YEMEN</OPTION><OPTION>ZAMBIA</OPTION><OPTION>ZIMBABWE</OPTION>        </select>
     <span class="focus-input100-1"></span>
<span class="focus-input100-2"></span>
 </div>
 </div>

<div class="form-group row">
    <label id="_brief" class="col-sm-3 col-form-label"><strong>*</strong> About Myself / My Activities / Brief Introduction</label>
    <div class="col-sm-9 wrap-input100">
    <textarea name="brief" class="input100" rows="4"></textarea>
    <span class="focus-input100-1"></span>
    <span class="focus-input100-2"></span>
    </div>
</div>


<input name="submit" id="enq-btn-submit"  class="button btn-narang-outline" type="submit" value="Submit">

</form>

        </div>
      </div>
    </div>



    </div>
   <br><br>
  </section>

<!--==========================
Testimonial Section
============================-->
@include('frontend.include.testimonial')

<!--==========================
Events Section
============================-->
   @include('frontend.include.event_section')

@endsection


@push('add-js')

@endpush


  <div>
	<div class="form-group">
		<label for="teacher_num">Number of Teachers<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
		<select id='teacher_num' name='teacher_num' onchange='update_teacher_form()'>
			<option value='1' >1</option>
			<option id='teacher_op2' value='2'>2</option>
		</select> Teachers
		<p class="help-block" id='teacher_num_alert'>Note: Because your school is only sending 1 project, you are allowed at most 1 teacher</p>
	</div>
  </div>
  <span id='teacher_span'>
  <div id='teacher1_formgrp'>
  <div><h2>Teacher 1 Info</h2></div>
  <div class="form-group">
	<label for="teacher1_salutation">Name<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<div class="input-group">
      <select id='teacher1_salutation' name='teacher1_salutation'>
			<option value='Prof.'>Prof.</option>
			<option value='Dr.'>Dr.</option>
			<option value='Mr.'>Mr.</option>
			<option value='Mrs.'>Mrs.</option>
			<option value='Ms.'>Ms.</option>
			<option value='Mdm.'>Mdm.</option>
	  </select>
      <input type='text' class='form-control' name='teacher1_name' id='teacher1_name' placeholder='Enter Name'/>
    </div>
  </div>
  <div class="form-group">
	<label for="teacher1_gender">Gender<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<select id='teacher1_gender' name='teacher1_gender'>
		<option value='M'>Male</option>
		<option value='F'>Female</option>
	</select>
  </div>
  <div class="form-group">
	<label for="teacher1_email">Email<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_email' id='teacher1_email' placeholder='Enter Email Here'/>
  </div>
  <div class="form-group">
	<label for="teacher1_passport">Passport Number<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_passport' id='teacher1_passport' placeholder='Enter Passport Number'/>
  </div>
  
  <div class="form-group">
    <label for="teacher1_nationality">Country of Issue of Passport<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
    <select id='teacher1_nationality' name="teacher1_nationality">
		<option value="">Select a Country</option>
		<option value="Afghanistan">Afghanistan</option>
		<option value="Albania">Albania</option>
		<option value="Algeria">Algeria</option>
		<option value="American Samoa">American Samoa</option>
		<option value="Andorra">Andorra</option>
		<option value="Angola">Angola</option>
		<option value="Anguilla">Anguilla</option>
		<option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
		<option value="Argentina">Argentina</option>
		<option value="Armenia">Armenia</option>
		<option value="Aruba">Aruba</option>
		<option value="Australia">Australia</option>
		<option value="Austria">Austria</option>
		<option value="Azerbaijan">Azerbaijan</option>
		<option value="Bahamas">Bahamas</option>
		<option value="Bahrain">Bahrain</option>
		<option value="Bangladesh">Bangladesh</option>
		<option value="Barbados">Barbados</option>
		<option value="Belarus">Belarus</option>
		<option value="Belgium">Belgium</option>
		<option value="Belize">Belize</option>
		<option value="Benin">Benin</option>
		<option value="Bermuda">Bermuda</option>
		<option value="Bhutan">Bhutan</option>
		<option value="Bolivia">Bolivia</option>
		<option value="Bonaire">Bonaire</option>
		<option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
		<option value="Botswana">Botswana</option>
		<option value="Brazil">Brazil</option>
		<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
		<option value="Brunei">Brunei</option>
		<option value="Bulgaria">Bulgaria</option>
		<option value="Burkina Faso">Burkina Faso</option>
		<option value="Burundi">Burundi</option>
		<option value="Cambodia">Cambodia</option>
		<option value="Cameroon">Cameroon</option>
		<option value="Canada">Canada</option>
		<option value="Canary Islands">Canary Islands</option>
		<option value="Cape Verde">Cape Verde</option>
		<option value="Cayman Islands">Cayman Islands</option>
		<option value="Central African Republic">Central African Republic</option>
		<option value="Chad">Chad</option>
		<option value="Channel Islands">Channel Islands</option>
		<option value="Chile">Chile</option>
		<option value="China">China</option>
		<option value="Christmas Island">Christmas Island</option>
		<option value="Cocos Island">Cocos Island</option>
		<option value="Colombia">Colombia</option>
		<option value="Comoros">Comoros</option>
		<option value="Congo">Congo</option>
		<option value="Cook Islands">Cook Islands</option>
		<option value="Costa Rica">Costa Rica</option>
		<option value="Cote DIvoire">Cote D'Ivoire</option>
		<option value="Croatia">Croatia</option>
		<option value="Cuba">Cuba</option>
		<option value="Curaco">Curacao</option>
		<option value="Cyprus">Cyprus</option>
		<option value="Czech Republic">Czech Republic</option>
		<option value="Denmark">Denmark</option>
		<option value="Djibouti">Djibouti</option>
		<option value="Dominica">Dominica</option>
		<option value="Dominican Republic">Dominican Republic</option>
		<option value="East Timor">East Timor</option>
		<option value="Ecuador">Ecuador</option>
		<option value="Egypt">Egypt</option>
		<option value="El Salvador">El Salvador</option>
		<option value="Equatorial Guinea">Equatorial Guinea</option>
		<option value="Eritrea">Eritrea</option>
		<option value="Estonia">Estonia</option>
		<option value="Ethiopia">Ethiopia</option>
		<option value="Falkland Islands">Falkland Islands</option>
		<option value="Faroe Islands">Faroe Islands</option>
		<option value="Fiji">Fiji</option>
		<option value="Finland">Finland</option>
		<option value="France">France</option>
		<option value="French Guiana">French Guiana</option>
		<option value="French Polynesia">French Polynesia</option>
		<option value="French Southern Ter">French Southern Ter</option>
		<option value="Gabon">Gabon</option>
		<option value="Gambia">Gambia</option>
		<option value="Georgia">Georgia</option>
		<option value="Germany">Germany</option>
		<option value="Ghana">Ghana</option>
		<option value="Gibraltar">Gibraltar</option>
		<option value="Great Britain">Great Britain</option>
		<option value="Greece">Greece</option>
		<option value="Greenland">Greenland</option>
		<option value="Grenada">Grenada</option>
		<option value="Guadeloupe">Guadeloupe</option>
		<option value="Guam">Guam</option>
		<option value="Guatemala">Guatemala</option>
		<option value="Guinea">Guinea</option>
		<option value="Guyana">Guyana</option>
		<option value="Haiti">Haiti</option>
		<option value="Hawaii">Hawaii</option>
		<option value="Honduras">Honduras</option>
		<option value="Hong Kong">Hong Kong</option>
		<option value="Hungary">Hungary</option>
		<option value="Iceland">Iceland</option>
		<option value="India">India</option>
		<option value="Indonesia">Indonesia</option>
		<option value="Iran">Iran</option>
		<option value="Iraq">Iraq</option>
		<option value="Ireland">Ireland</option>
		<option value="Isle of Man">Isle of Man</option>
		<option value="Israel">Israel</option>
		<option value="Italy">Italy</option>
		<option value="Jamaica">Jamaica</option>
		<option value="Japan">Japan</option>
		<option value="Jordan">Jordan</option>
		<option value="Kazakhstan">Kazakhstan</option>
		<option value="Kenya">Kenya</option>
		<option value="Kiribati">Kiribati</option>
		<option value="Korea North">Korea North</option>
		<option value="Korea South">Korea South</option>
		<option value="Kuwait">Kuwait</option>
		<option value="Kyrgyzstan">Kyrgyzstan</option>
		<option value="Laos">Laos</option>
		<option value="Latvia">Latvia</option>
		<option value="Lebanon">Lebanon</option>
		<option value="Lesotho">Lesotho</option>
		<option value="Liberia">Liberia</option>
		<option value="Libya">Libya</option>
		<option value="Liechtenstein">Liechtenstein</option>
		<option value="Lithuania">Lithuania</option>
		<option value="Luxembourg">Luxembourg</option>
		<option value="Macau">Macau</option>
		<option value="Macedonia">Macedonia</option>
		<option value="Madagascar">Madagascar</option>
		<option value="Malaysia">Malaysia</option>
		<option value="Malawi">Malawi</option>
		<option value="Maldives">Maldives</option>
		<option value="Mali">Mali</option>
		<option value="Malta">Malta</option>
		<option value="Marshall Islands">Marshall Islands</option>
		<option value="Martinique">Martinique</option>
		<option value="Mauritania">Mauritania</option>
		<option value="Mauritius">Mauritius</option>
		<option value="Mayotte">Mayotte</option>
		<option value="Mexico">Mexico</option>
		<option value="Midway Islands">Midway Islands</option>
		<option value="Moldova">Moldova</option>
		<option value="Monaco">Monaco</option>
		<option value="Mongolia">Mongolia</option>
		<option value="Montserrat">Montserrat</option>
		<option value="Morocco">Morocco</option>
		<option value="Mozambique">Mozambique</option>
		<option value="Myanmar">Myanmar</option>
		<option value="Nambia">Nambia</option>
		<option value="Nauru">Nauru</option>
		<option value="Nepal">Nepal</option>
		<option value="Netherland Antilles">Netherland Antilles</option>
		<option value="Netherlands">Netherlands (Holland, Europe)</option>
		<option value="Nevis">Nevis</option>
		<option value="New Caledonia">New Caledonia</option>
		<option value="New Zealand">New Zealand</option>
		<option value="Nicaragua">Nicaragua</option>
		<option value="Niger">Niger</option>
		<option value="Nigeria">Nigeria</option>
		<option value="Niue">Niue</option>
		<option value="Norfolk Island">Norfolk Island</option>
		<option value="Norway">Norway</option>
		<option value="Oman">Oman</option>
		<option value="Pakistan">Pakistan</option>
		<option value="Palau Island">Palau Island</option>
		<option value="Palestine">Palestine</option>
		<option value="Panama">Panama</option>
		<option value="Papua New Guinea">Papua New Guinea</option>
		<option value="Paraguay">Paraguay</option>
		<option value="Peru">Peru</option>
		<option value="Phillipines">Philippines</option>
		<option value="Pitcairn Island">Pitcairn Island</option>
		<option value="Poland">Poland</option>
		<option value="Portugal">Portugal</option>
		<option value="Puerto Rico">Puerto Rico</option>
		<option value="Qatar">Qatar</option>
		<option value="Republic of Montenegro">Republic of Montenegro</option>
		<option value="Republic of Serbia">Republic of Serbia</option>
		<option value="Reunion">Reunion</option>
		<option value="Romania">Romania</option>
		<option value="Russia">Russia</option>
		<option value="Rwanda">Rwanda</option>
		<option value="St Barthelemy">St Barthelemy</option>
		<option value="St Eustatius">St Eustatius</option>
		<option value="St Helena">St Helena</option>
		<option value="St Kitts-Nevis">St Kitts-Nevis</option>
		<option value="St Lucia">St Lucia</option>
		<option value="St Maarten">St Maarten</option>
		<option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
		<option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
		<option value="Saipan">Saipan</option>
		<option value="Samoa">Samoa</option>
		<option value="Samoa American">Samoa American</option>
		<option value="San Marino">San Marino</option>
		<option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
		<option value="Saudi Arabia">Saudi Arabia</option>
		<option value="Senegal">Senegal</option>
		<option value="Serbia">Serbia</option>
		<option value="Seychelles">Seychelles</option>
		<option value="Sierra Leone">Sierra Leone</option>
		<option value="Singapore">Singapore</option>
		<option value="Slovakia">Slovakia</option>
		<option value="Slovenia">Slovenia</option>
		<option value="Solomon Islands">Solomon Islands</option>
		<option value="Somalia">Somalia</option>
		<option value="South Africa">South Africa</option>
		<option value="Spain">Spain</option>
		<option value="Sri Lanka">Sri Lanka</option>
		<option value="Sudan">Sudan</option>
		<option value="Suriname">Suriname</option>
		<option value="Swaziland">Swaziland</option>
		<option value="Sweden">Sweden</option>
		<option value="Switzerland">Switzerland</option>
		<option value="Syria">Syria</option>
		<option value="Tahiti">Tahiti</option>
		<option value="Taiwan">Taiwan</option>
		<option value="Tajikistan">Tajikistan</option>
		<option value="Tanzania">Tanzania</option>
		<option value="Thailand">Thailand</option>
		<option value="Togo">Togo</option>
		<option value="Tokelau">Tokelau</option>
		<option value="Tonga">Tonga</option>
		<option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
		<option value="Tunisia">Tunisia</option>
		<option value="Turkey">Turkey</option>
		<option value="Turkmenistan">Turkmenistan</option>
		<option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
		<option value="Tuvalu">Tuvalu</option>
		<option value="Uganda">Uganda</option>
		<option value="Ukraine">Ukraine</option>
		<option value="United Arab Erimates">United Arab Emirates</option>
		<option value="United Kingdom">United Kingdom</option>
		<option value="United States of America">United States of America</option>
		<option value="Uraguay">Uruguay</option>
		<option value="Uzbekistan">Uzbekistan</option>
		<option value="Vanuatu">Vanuatu</option>
		<option value="Vatican City State">Vatican City State</option>
		<option value="Venezuela">Venezuela</option>
		<option value="Vietnam">Vietnam</option>
		<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
		<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
		<option value="Wake Island">Wake Island</option>
		<option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
		<option value="Yemen">Yemen</option>
		<option value="Zaire">Zaire</option>
		<option value="Zambia">Zambia</option>
		<option value="Zimbabwe">Zimbabwe</option>
		<option value="Others">Others</option>
		<option value="No Nationality">No Nationality</option>
	</select>
 </div>
 
  <div class="form-group">
	<label for="teacher1_subj">Teaching Subject<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_subj' id='teacher1_subj' placeholder='Enter Subject Name'/>
  </div>
  
  <div class="form-group">
	<label for="teacher1_is_p">Are you the principal?<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<select id='teacher1_is_p' name='teacher1_is_p'>
		<option value='0'>No</option>
		<option value='1'>Yes</option>
	</select>
  </div>
  
  <div class="form-group">
	<label for="teacher1_contact">Contact Number<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_contact' id='teacher1_contact' placeholder='country code-area code-number'/>
  </div>
  
  <div class="form-group">
	<label for="teacher1_bd">Birthday<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='date' class='form-control' name='teacher1_bd' id='teacher1_bd' />
  </div>
  
  <div class="form-group">
	<label for="teacher1_pexp">Passport Expiry Date<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='date' class='form-control' name='teacher1_pexp' id='teacher1_pexp' />
  </div>
  
  <div class="form-group">
	<label for="teacher1_dreq">Dietary Requirements<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_dreq' id='teacher1_dreq' placeholder='Enter Dietary Requirements'/>
	<p class="help-block" id='teacher1_dreq'>Eg: Halal, No Beef, Vegetarian etc</p>
  </div>
  
  <div class="form-group">
	<label for="teacher1_shirtsize">T Shirt Size<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_shirtsize' id='teacher1_shirtsize' placeholder='Enter Shirt Size'/>
	<p class="help-block" id='teacher1_shirtsize'>XXS (34), XS (36), S (38), M (40), L (42), XL (44)</p>
  </div>
  
  <div class="form-group">
	<label for="teacher1_nokname">Next of Kin Name<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_nokname' id='teacher1_nokname' placeholder='Enter Next of Kin (i.e. Mother, Father etc) Name'/>
  </div>
  
  <div class="form-group">
	<label for="teacher1_nokrlt">Next of Kin Relationship<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_nokrlt' id='teacher1_nokrlt' placeholder='Father, Mother, etc'/>
  </div>
  
  <div class="form-group">
	<label for="teacher1_nokcontact">Next of Kin Contact Number<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_nokcontact' id='teacher1_nokcontact' placeholder='(country code-area code-number)'/>
  </div>
  
  <div class="form-group">
	<label for="teacher1_mcon">Medical Conditions<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_mcon' id='teacher1_mcon' placeholder='Asthma, Diabetes, Food Allergies etc'/>
	<p class="help-block" id='teacher1_mconhb'>Asthma, Diabetes, Food Allergies etc</p>
  </div>
  
  <div class="form-group">
	<label for="teacher1_dallergy">Drug Allergies<a style='color:#ff0000;width=0;height=0;text-decoration:none;'>*</a></label>
	<input type='text' class='form-control' name='teacher1_dallergy' id='teacher1_dallergy' placeholder='Any drug allergies? (Amoxycillin, Paracetemol etc)'/>
  </div>
  
  <!--<div class="form-group">-->
  <!--<div class="form-group">
    <label for="school_num_proj">Number of projects</label>
	<select id='school_num_proj' name='school_num_proj' onchange='update_num_proj()'>
		<option value='1'>1</option>
		<option value='2'>2</option>
	</select> Projects
	<p class="help-block" id='num_proj_alert'>Note: You are allowed a maximum of 4 students and 1 teacher</p>
    <p class="help-block">Note: Each school can only send a maximum of 2 projects and a maximum of 4 students and 1 teacher per project</p>
  </div>-->
  
  </div>
  </span>
  <button type='button' onclick="hai('form3')" class="btn btn-default">Next Form >></button><button type='button' onclick="store_in_db();alert('Save Successful');" class="btn btn-default">Save</button>
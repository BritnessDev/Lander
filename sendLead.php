<?php
if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {

	// 1. Call the API

	// Retrieve form data
	$firstname  = $_POST['firstname'];
	$lastName   = $_POST['lastname'];
	$email      = $_POST['email'];
	$country    = $_POST['countryName'];
	$phone      = $_POST['phone'];
	$phone_code = $_POST['countryCode'];

	if($phone_code === '')
		$phone_code = '1';

	// Validate and sanitize the data (example validation)
	if ( empty( $firstname ) || empty( $lastName ) || empty( $email ) || empty( $country ) || empty( $phone ) ) {
		// Handle validation error (e.g., display an error message)
		$msg = "Error! Please fill in all the fields.";
	}

	// Prepare data for API request
	$data = array(
		'Firstname' => $firstname,
		'Lastname'  => $lastName,
		'Country'   => $country,
		'Phonenumber'     => '+'.$phone_code.' '.$phone,
		'Email'     => $email,
	);

	// Convert data to JSON format
	$jsonData = json_encode( $data );

	// $ch = curl_init();

	// curl_setopt( $ch, CURLOPT_URL, 'https://api.domain.com/affiliates/leads' );
	// curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	// curl_setopt( $ch, CURLOPT_POST, 1 );
	// curl_setopt( $ch, CURLOPT_POSTFIELDS, $jsonData );

	// $headers   = array();
	// $headers[] = 'Authorization: eyJhbGciOiJIUzI1NiJ9.eyJhZmZpbGlhdGVfaWQiOjIsImNyZWF0ZWQiOjE2OTgyNjkyOTQsImV4cGlyYXRpb24iOjAsImJyYW5kIjoiaGFuZGVsZXgiLCJyaWdodHMiOlsiYWZmaWxpYXRlIl19.yVEG_OSBt11X2dgWUEpSBdje0UHk_fdLMla7_tRVYc8';
	// $headers[] = 'Content-Type: application/json';
	// curl_setopt( $ch, CURLOPT_HTTPHEADER, $headers );

	// $response = curl_exec( $ch );
	// if ( curl_errno( $ch ) ) {
	// 	$msg = 'Error:' . curl_error( $ch );
	// }
	// curl_close( $ch );

	// // Handle API response if required
	// if ( $response === false ) {
	// 	// Handle API request error
	// 	$msg = "Error sending data to API.";
	// } else {
	// 	// Process API response or perform other actions
	// 	$msg = "Form submitted successfully!";
	// }

	// Send the data to google sheet
	$ch = curl_init();
	curl_setopt( $ch, CURLOPT_URL, 'https://script.google.com/macros/s/AKfycbzNDA25W2U63fLF7SKcBpp44Ppz_V-KYG2yYh_R64m30XbgzYz5UG059CdPV_IfXT--/exec' );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
	curl_setopt( $ch, CURLOPT_POST, true );
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );
	$response = curl_exec( $ch );
	if(curl_errno($ch)){
		// If an error occurred, print it out
		echo 'Curl error: ' . curl_error($ch);
	}
	echo json_decode($response)['result'];
	// Close the cURL resource
	curl_close($ch);
	$url = "thanks.php";

	// Perform the redirect
	header("Location: $url");
	return $response;
}

function country( $phone_code ) {
	$array = [
		'44'    => 'United Kingdom',
		'1'     => 'USA/Canada',
		'213'   => 'Algeria',
		'376'   => 'Andorra',
		'244'   => 'Angola',
		'1264'  => 'Anguilla',
		'1268'  => 'Antigua & Barbuda',
		'54'    => 'Argentina',
		'374'   => 'Armenia',
		'297'   => 'Aruba',
		'61'    => 'Australia',
		'43'    => 'Austria',
		'994'   => 'Azerbaijan',
		'1242'  => 'Bahamas',
		'973'   => 'Bahrain',
		'880'   => 'Bangladesh',
		'1246'  => 'Barbados',
		'375'   => 'Belarus',
		'32'    => 'Belgium',
		'501'   => 'Belize',
		'229'   => 'Benin',
		'1441'  => 'Bermuda',
		'975'   => 'Bhutan',
		'591'   => 'Bolivia',
		'387'   => 'Bosnia Herzegovina',
		'267'   => 'Botswana',
		'55'    => 'Brazil',
		'673'   => 'Brunei',
		'359'   => 'Bulgaria',
		'226'   => 'Burkina Faso',
		'257'   => 'Burundi',
		'855'   => 'Cambodia',
		'237'   => 'Cameroon',
		'238'   => 'Cape Verde Islands',
		'1345'  => 'Cayman Islands',
		'236'   => 'Central African Republic',
		'56'    => 'Chile',
		'86'    => 'China',
		'57'    => 'Colombia',
		'269'   => 'Comoros/Mayotte',
		'242'   => 'Congo',
		'682'   => 'Cook Islands',
		'506'   => 'Costa Rica',
		'385'   => 'Croatia',
		'53'    => 'Cuba',
		'90392' => 'Cyprus North',
		'357'   => 'Cyprus South',
		'42'    => 'Czech Republic',
		'45'    => 'Denmark',
		'253'   => 'Djibouti',
		'1809'  => 'Dominica/Dominican Republic',
		'593'   => 'Ecuador',
		'20'    => 'Egypt',
		'503'   => 'El Salvador',
		'240'   => 'Equatorial Guinea',
		'291'   => 'Eritrea',
		'372'   => 'Estonia',
		'251'   => 'Ethiopia',
		'500'   => 'Falkland Islands',
		'298'   => 'Faroe Islands',
		'679'   => 'Fiji',
		'358'   => 'Finland',
		'33'    => 'France',
		'594'   => 'French Guiana',
		'689'   => 'French Polynesia',
		'241'   => 'Gabon',
		'220'   => 'Gambia',
		'7880'  => 'Georgia',
		'49'    => 'Germany',
		'233'   => 'Ghana',
		'350'   => 'Gibraltar',
		'30'    => 'Greece',
		'299'   => 'Greenland',
		'1473'  => 'Grenada',
		'590'   => 'Guadeloupe',
		'671'   => 'Guam',
		'502'   => 'Guatemala',
		'224'   => 'Guinea',
		'245'   => 'Guinea - Bissau',
		'592'   => 'Guyana',
		'509'   => 'Haiti',
		'504'   => 'Honduras',
		'852'   => 'Hong Kong',
		'36'    => 'Hungary',
		'354'   => 'Iceland',
		'91'    => 'India',
		'62'    => 'Indonesia',
		'98'    => 'Iran',
		'964'   => 'Iraq',
		'353'   => 'Ireland',
		'972'   => 'Israel',
		'39'    => 'Italy',
		'1876'  => 'Jamaica',
		'81'    => 'Japan',
		'962'   => 'Jordan',
		'254'   => 'Kenya',
		'686'   => 'Kiribati',
		'850'   => 'Korea North',
		'82'    => 'Korea South',
		'965'   => 'Kuwait',
		'996'   => 'Kyrgyzstan',
		'856'   => 'Laos',
		'371'   => 'Latvia',
		'961'   => 'Lebanon',
		'266'   => 'Lesotho',
		'231'   => 'Liberia',
		'218'   => 'Libya',
		'417'   => 'Liechtenstein',
		'370'   => 'Lithuania',
		'352'   => 'Luxembourg',
		'853'   => 'Macao',
		'389'   => 'Macedonia',
		'261'   => 'Madagascar',
		'265'   => 'Malawi',
		'60'    => 'Malaysia',
		'960'   => 'Maldives',
		'223'   => 'Mali',
		'356'   => 'Malta',
		'692'   => 'Marshall Islands',
		'596'   => 'Martinique',
		'222'   => 'Mauritania',
		'52'    => 'Mexico',
		'691'   => 'Micronesia',
		'373'   => 'Moldova',
		'377'   => 'Monaco',
		'976'   => 'Mongolia',
		'1664'  => 'Montserrat',
		'212'   => 'Morocco',
		'258'   => 'Mozambique',
		'95'    => 'Myanmar',
		'264'   => 'Namibia',
		'674'   => 'Nauru',
		'977'   => 'Nepal',
		'31'    => 'Netherlands',
		'687'   => 'New Caledonia',
		'64'    => 'New Zealand',
		'505'   => 'Nicaragua',
		'227'   => 'Niger',
		'234'   => 'Nigeria',
		'683'   => 'Niue',
		'672'   => 'Norfolk Islands',
		'670'   => 'Northern Marianas',
		'47'    => 'Norway',
		'968'   => 'Oman',
		'680'   => 'Palau',
		'507'   => 'Panama',
		'675'   => 'Papua New Guinea',
		'595'   => 'Paraguay',
		'51'    => 'Peru',
		'63'    => 'Philippines',
		'48'    => 'Poland',
		'351'   => 'Portugal',
		'1787'  => 'Puerto Rico',
		'974'   => 'Qatar',
		'262'   => 'Reunion',
		'40'    => 'Romania',
		'7'     => 'Russia/Tajikstan/Turkmenistan/Uzbekistan/Kazakhstan',
		'250'   => 'Rwanda',
		'378'   => 'San Marino',
		'239'   => 'Sao Tome & Principe',
		'966'   => 'Saudi Arabia',
		'221'   => 'Senegal',
		'381'   => 'Serbia',
		'248'   => 'Seychelles',
		'232'   => 'Sierra Leone',
		'65'    => 'Singapore',
		'421'   => 'Slovak Republic',
		'386'   => 'Slovenia',
		'677'   => 'Solomon Islands',
		'252'   => 'Somalia',
		'27'    => 'South Africa',
		'34'    => 'Spain',
		'94'    => 'Sri Lanka',
		'290'   => 'St. Helena',
		'1869'  => 'St. Kitts',
		'1758'  => 'St. Lucia',
		'249'   => 'Sudan',
		'597'   => 'Suriname',
		'268'   => 'Swaziland',
		'46'    => 'Sweden',
		'41'    => 'Switzerland',
		'963'   => 'Syria',
		'886'   => 'Taiwan',
		'66'    => 'Thailand',
		'228'   => 'Togo',
		'676'   => 'Tonga',
		'1868'  => 'Trinidad & Tobago',
		'216'   => 'Tunisia',
		'90'    => 'Turkey',
		'993'   => 'Turkmenistan',
		'1649'  => 'Turks & Caicos Islands',
		'688'   => 'Tuvalu',
		'256'   => 'Uganda',
		'380'   => 'Ukraine',
		'971'   => 'United Arab Emirates',
		'598'   => 'Uruguay',
		'678'   => 'Vanuatu',
		'379'   => 'Vatican City',
		'58'    => 'Venezuela',
		'84'    => 'Vietnam/Virgin Islands - British/Virgin Islands - US',
		'681'   => 'Wallis & Futuna',
		'969'   => 'Yemen (North)',
		'967'   => 'Yemen (South)',
		'260'   => 'Zambia',
		'263'   => 'Zimbabwe',
	];

	return $array[ $phone_code ];
}
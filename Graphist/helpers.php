<?php 

/**
 * Checks if a string starts with a substring.
 * 
 * @param  string $haystack 
 * @param  string $needle   
 * @return bool
 */
function startsWith($haystack, $needle)
{
	return strpos($haystack, $needle) === 0;
}

/**
 * Checks if a string ends with a substring
 *
 * @param  string $haystack
 * @param  string $needle
 * @return bool
 */
function endsWith($haystack, $needle)
{
	return $needle == substr($haystack, strlen($haystack) - strlen($needle));
}

function isValidTimezoneId($tzid)
{
	$valid = array();
	$tza = timezone_abbreviations_list();
	foreach ($tza as $zone)
	{
		foreach ($zone as $item)
		{
			$valid[$item['timezone_id']] = true;
		}
	}
	
	unset($valid['']);
	return !!$valid[$tzid];
}

function getTimeZones()
{
	$timezones = array (
	  '(GMT-12:00) International Date Line West' => 'Pacific/Wake',
	  '(GMT-11:00) Midway Island' => 'Pacific/Apia',
	  '(GMT-11:00) Samoa' => 'Pacific/Apia',
	  '(GMT-10:00) Hawaii' => 'Pacific/Honolulu',
	  '(GMT-09:00) Alaska' => 'America/Anchorage',
	  '(GMT-08:00) Pacific Time (US &amp; Canada); Tijuana' => 'America/Los_Angeles',
	  '(GMT-07:00) Arizona' => 'America/Phoenix',
	  '(GMT-07:00) Chihuahua' => 'America/Chihuahua',
	  '(GMT-07:00) La Paz' => 'America/Chihuahua',
	  '(GMT-07:00) Mazatlan' => 'America/Chihuahua',
	  '(GMT-07:00) Mountain Time (US &amp; Canada)' => 'America/Denver',
	  '(GMT-06:00) Central America' => 'America/Managua',
	  '(GMT-06:00) Central Time (US &amp; Canada)' => 'America/Chicago',
	  '(GMT-06:00) Guadalajara' => 'America/Mexico_City',
	  '(GMT-06:00) Mexico City' => 'America/Mexico_City',
	  '(GMT-06:00) Monterrey' => 'America/Mexico_City',
	  '(GMT-06:00) Saskatchewan' => 'America/Regina',
	  '(GMT-05:00) Bogota' => 'America/Bogota',
	  '(GMT-05:00) Eastern Time (US &amp; Canada)' => 'America/New_York',
	  '(GMT-05:00) Indiana (East)' => 'America/Indiana/Indianapolis',
	  '(GMT-05:00) Lima' => 'America/Bogota',
	  '(GMT-05:00) Quito' => 'America/Bogota',
	  '(GMT-04:00) Atlantic Time (Canada)' => 'America/Halifax',
	  '(GMT-04:00) Caracas' => 'America/Caracas',
	  '(GMT-04:00) La Paz' => 'America/Caracas',
	  '(GMT-04:00) Santiago' => 'America/Santiago',
	  '(GMT-03:30) Newfoundland' => 'America/St_Johns',
	  '(GMT-03:00) Brasilia' => 'America/Sao_Paulo',
	  '(GMT-03:00) Buenos Aires' => 'America/Argentina/Buenos_Aires',
	  '(GMT-03:00) Georgetown' => 'America/Argentina/Buenos_Aires',
	  '(GMT-03:00) Greenland' => 'America/Godthab',
	  '(GMT-02:00) Mid-Atlantic' => 'America/Noronha',
	  '(GMT-01:00) Azores' => 'Atlantic/Azores',
	  '(GMT-01:00) Cape Verde Is.' => 'Atlantic/Cape_Verde',
	  '(GMT) Casablanca' => 'Africa/Casablanca',
	  '(GMT) Edinburgh' => 'Europe/London',
	  '(GMT) Greenwich Mean Time : Dublin' => 'Europe/London',
	  '(GMT) Lisbon' => 'Europe/London',
	  '(GMT) London' => 'Europe/London',
	  '(GMT) Monrovia' => 'Africa/Casablanca',
	  '(GMT+01:00) Amsterdam' => 'Europe/Berlin',
	  '(GMT+01:00) Belgrade' => 'Europe/Belgrade',
	  '(GMT+01:00) Berlin' => 'Europe/Berlin',
	  '(GMT+01:00) Bern' => 'Europe/Berlin',
	  '(GMT+01:00) Bratislava' => 'Europe/Belgrade',
	  '(GMT+01:00) Brussels' => 'Europe/Paris',
	  '(GMT+01:00) Budapest' => 'Europe/Belgrade',
	  '(GMT+01:00) Copenhagen' => 'Europe/Paris',
	  '(GMT+01:00) Ljubljana' => 'Europe/Belgrade',
	  '(GMT+01:00) Madrid' => 'Europe/Paris',
	  '(GMT+01:00) Paris' => 'Europe/Paris',
	  '(GMT+01:00) Prague' => 'Europe/Belgrade',
	  '(GMT+01:00) Rome' => 'Europe/Berlin',
	  '(GMT+01:00) Sarajevo' => 'Europe/Sarajevo',
	  '(GMT+01:00) Skopje' => 'Europe/Sarajevo',
	  '(GMT+01:00) Stockholm' => 'Europe/Berlin',
	  '(GMT+01:00) Vienna' => 'Europe/Berlin',
	  '(GMT+01:00) Warsaw' => 'Europe/Sarajevo',
	  '(GMT+01:00) West Central Africa' => 'Africa/Lagos',
	  '(GMT+01:00) Zagreb' => 'Europe/Sarajevo',
	  '(GMT+02:00) Athens' => 'Europe/Istanbul',
	  '(GMT+02:00) Bucharest' => 'Europe/Bucharest',
	  '(GMT+02:00) Cairo' => 'Africa/Cairo',
	  '(GMT+02:00) Harare' => 'Africa/Johannesburg',
	  '(GMT+02:00) Helsinki' => 'Europe/Helsinki',
	  '(GMT+02:00) Istanbul' => 'Europe/Istanbul',
	  '(GMT+02:00) Jerusalem' => 'Asia/Jerusalem',
	  '(GMT+02:00) Kyiv' => 'Europe/Helsinki',
	  '(GMT+02:00) Minsk' => 'Europe/Istanbul',
	  '(GMT+02:00) Pretoria' => 'Africa/Johannesburg',
	  '(GMT+02:00) Riga' => 'Europe/Helsinki',
	  '(GMT+02:00) Sofia' => 'Europe/Helsinki',
	  '(GMT+02:00) Tallinn' => 'Europe/Helsinki',
	  '(GMT+02:00) Vilnius' => 'Europe/Helsinki',
	  '(GMT+03:00) Baghdad' => 'Asia/Baghdad',
	  '(GMT+03:00) Kuwait' => 'Asia/Riyadh',
	  '(GMT+03:00) Moscow' => 'Europe/Moscow',
	  '(GMT+03:00) Nairobi' => 'Africa/Nairobi',
	  '(GMT+03:00) Riyadh' => 'Asia/Riyadh',
	  '(GMT+03:00) St. Petersburg' => 'Europe/Moscow',
	  '(GMT+03:00) Volgograd' => 'Europe/Moscow',
	  '(GMT+03:30) Tehran' => 'Asia/Tehran',
	  '(GMT+04:00) Abu Dhabi' => 'Asia/Muscat',
	  '(GMT+04:00) Baku' => 'Asia/Tbilisi',
	  '(GMT+04:00) Muscat' => 'Asia/Muscat',
	  '(GMT+04:00) Tbilisi' => 'Asia/Tbilisi',
	  '(GMT+04:00) Yerevan' => 'Asia/Tbilisi',
	  '(GMT+04:30) Kabul' => 'Asia/Kabul',
	  '(GMT+05:00) Ekaterinburg' => 'Asia/Yekaterinburg',
	  '(GMT+05:00) Islamabad' => 'Asia/Karachi',
	  '(GMT+05:00) Karachi' => 'Asia/Karachi',
	  '(GMT+05:00) Tashkent' => 'Asia/Karachi',
	  '(GMT+05:30) Chennai' => 'Asia/Calcutta',
	  '(GMT+05:30) Kolkata' => 'Asia/Calcutta',
	  '(GMT+05:30) Mumbai' => 'Asia/Calcutta',
	  '(GMT+05:30) New Delhi' => 'Asia/Calcutta',
	  '(GMT+05:45) Kathmandu' => 'Asia/Katmandu',
	  '(GMT+06:00) Almaty' => 'Asia/Novosibirsk',
	  '(GMT+06:00) Astana' => 'Asia/Dhaka',
	  '(GMT+06:00) Dhaka' => 'Asia/Dhaka',
	  '(GMT+06:00) Novosibirsk' => 'Asia/Novosibirsk',
	  '(GMT+06:00) Sri Jayawardenepura' => 'Asia/Colombo',
	  '(GMT+06:30) Rangoon' => 'Asia/Rangoon',
	  '(GMT+07:00) Bangkok' => 'Asia/Bangkok',
	  '(GMT+07:00) Hanoi' => 'Asia/Bangkok',
	  '(GMT+07:00) Jakarta' => 'Asia/Bangkok',
	  '(GMT+07:00) Krasnoyarsk' => 'Asia/Krasnoyarsk',
	  '(GMT+08:00) Beijing' => 'Asia/Hong_Kong',
	  '(GMT+08:00) Chongqing' => 'Asia/Hong_Kong',
	  '(GMT+08:00) Hong Kong' => 'Asia/Hong_Kong',
	  '(GMT+08:00) Irkutsk' => 'Asia/Irkutsk',
	  '(GMT+08:00) Kuala Lumpur' => 'Asia/Singapore',
	  '(GMT+08:00) Perth' => 'Australia/Perth',
	  '(GMT+08:00) Singapore' => 'Asia/Singapore',
	  '(GMT+08:00) Taipei' => 'Asia/Taipei',
	  '(GMT+08:00) Ulaan Bataar' => 'Asia/Irkutsk',
	  '(GMT+08:00) Urumqi' => 'Asia/Hong_Kong',
	  '(GMT+09:00) Osaka' => 'Asia/Tokyo',
	  '(GMT+09:00) Sapporo' => 'Asia/Tokyo',
	  '(GMT+09:00) Seoul' => 'Asia/Seoul',
	  '(GMT+09:00) Tokyo' => 'Asia/Tokyo',
	  '(GMT+09:00) Yakutsk' => 'Asia/Yakutsk',
	  '(GMT+09:30) Adelaide' => 'Australia/Adelaide',
	  '(GMT+09:30) Darwin' => 'Australia/Darwin',
	  '(GMT+10:00) Brisbane' => 'Australia/Brisbane',
	  '(GMT+10:00) Canberra' => 'Australia/Sydney',
	  '(GMT+10:00) Guam' => 'Pacific/Guam',
	  '(GMT+10:00) Hobart' => 'Australia/Hobart',
	  '(GMT+10:00) Melbourne' => 'Australia/Sydney',
	  '(GMT+10:00) Port Moresby' => 'Pacific/Guam',
	  '(GMT+10:00) Sydney' => 'Australia/Sydney',
	  '(GMT+10:00) Vladivostok' => 'Asia/Vladivostok',
	  '(GMT+11:00) Magadan' => 'Asia/Magadan',
	  '(GMT+11:00) New Caledonia' => 'Asia/Magadan',
	  '(GMT+11:00) Solomon Is.' => 'Asia/Magadan',
	  '(GMT+12:00) Auckland' => 'Pacific/Auckland',
	  '(GMT+12:00) Fiji' => 'Pacific/Fiji',
	  '(GMT+12:00) Kamchatka' => 'Pacific/Fiji',
	  '(GMT+12:00) Marshall Is.' => 'Pacific/Fiji',
	  '(GMT+12:00) Wellington' => 'Pacific/Auckland',
	  '(GMT+13:00) Nuku\'alofa' => 'Pacific/Tongatapu',
	);
	
	return $timezones;
}

/*
function isValidTimezoneId($tzid)
{
	@$tz = timezone_open($timezoneId);
    return $tz !== FALSE;
}
*/

if (!function_exists('apache_request_headers')) {

    function apache_request_headers() {
        $arh = array();
        $rx_http = '/\AHTTP_/';
        foreach($_SERVER as $key => $val) {
            if (preg_match($rx_http, $key)) {
                $arh_key = preg_replace($rx_http, '', $key);
                $rx_matches = array();
                // do some nasty string manipulations to restore the original letter case
                // this should work in most cases
                $rx_matches = explode('_', $arh_key);
                if( count($rx_matches) > 0 and strlen($arh_key) > 2 ) {
                    foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
                    $arh_key = implode('-', $rx_matches);
                }
                $arh[$arh_key] = $val;
            }
        }
        return ($arh);
    }
}

if (!function_exists('http_response_code'))
{
    function http_response_code($newcode = NULL)
    {
        static $code = 200;
        if($newcode !== NULL)
        {
            header('X-API-Response-Code: '.$newcode, true, $newcode);
            if(!headers_sent())
                $code = $newcode;
        }       
        return $code;
    }
}
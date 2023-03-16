<?php

namespace ChristophSchaeffer\Dhl\BusinessShipping\Utility;

/**
 * Class CountryCodeConversion
 * @package ChristophSchaeffer\Dhl\BusinessShipment\Utility
 *
 * Used to convert country codes as of ISO 3166-1 (Alpha 2) to its country name and the opposite.
 * You could use the const COUNTRYCODE_TO_COUNTRY_MAP as options for a select field. Use the keys which are
 * country codes as values and the array values as the label.
 */
class CountryCodeConversion {

    const COUNTRYCODE_TO_COUNTRY_MAP = [
        'AF' => 'Afghanistan', 'AX' => 'Aland Islands', 'AL' => 'Albania', 'DZ' => 'Algeria', 'AS' => 'American Samoa', 'AD' => 'Andorra', 'AO' => 'Angola', 'AI' => 'Anguilla', 'AQ' => 'Antarctica', 'AG' => 'Antigua and Barbuda', 'AR' => 'Argentina', 'AM' => 'Armenia', 'AW' => 'Aruba', 'AU' => 'Australia', 'AT' => 'Austria', 'AZ' => 'Azerbaijan', 'BS' => 'Bahamas', 'BH' => 'Bahrain', 'BD' => 'Bangladesh', 'BB' => 'Barbados', 'BY' => 'Belarus', 'BE' => 'Belgium', 'BZ' => 'Belize', 'BJ' => 'Benin', 'BM' => 'Bermuda', 'BT' => 'Bhutan', 'BO' => 'Bolivia', 'BQ' => 'Bonaire, Sint Eustatius and Saba', 'BA' => 'Bosnia and Herzegovina', 'BW' => 'Botswana', 'BV' => 'Bouvet Island', 'BR' => 'Brazil', 'IO' => 'British Indian Ocean Territory', 'BN' => 'Brunei Darussalam', 'BG' => 'Bulgaria', 'BF' => 'Burkina Faso', 'BI' => 'Burundi', 'KH' => 'Cambodia', 'CM' => 'Cameroon', 'CA' => 'Canada', 'CV' => 'Cape Verde', 'KY' => 'Cayman Islands', 'CF' => 'Central African Republic', 'TD' => 'Chad', 'CL' => 'Chile', 'CN' => 'China', 'CX' => 'Christmas Island', 'CC' => 'Cocos (Keeling) Islands', 'CO' => 'Colombia', 'KM' => 'Comoros', 'CG' => 'Congo', 'CD' => 'Congo, the Democratic Republic of the', 'CK' => 'Cook Islands', 'CR' => 'Costa Rica', 'CI' => 'Cote d\'Ivoire', 'HR' => 'Croatia', 'CU' => 'Cuba', 'CW' => 'Curacao', 'CY' => 'Cyprus', 'CZ' => 'Czech Republic', 'DK' => 'Denmark', 'DJ' => 'Djibouti', 'DM' => 'Dominica', 'DO' => 'Dominican Republic', 'EC' => 'Ecuador', 'EG' => 'Egypt', 'SV' => 'El Salvador', 'GQ' => 'Equatorial Guinea', 'ER' => 'Eritrea', 'EE' => 'Estonia', 'ET' => 'Ethiopia', 'FK' => 'Falkland Islands (Malvinas)', 'FO' => 'Faroe Islands', 'FJ' => 'Fiji', 'FI' => 'Finland', 'FR' => 'France', 'GF' => 'French Guiana', 'PF' => 'French Polynesia', 'TF' => 'French Southern Territories', 'GA' => 'Gabon', 'GM' => 'Gambia', 'GE' => 'Georgia', 'DE' => 'Germany', 'GH' => 'Ghana', 'GI' => 'Gibraltar', 'GR' => 'Greece', 'GL' => 'Greenland', 'GD' => 'Grenada', 'GP' => 'Guadeloupe', 'GU' => 'Guam', 'GT' => 'Guatemala', 'GG' => 'Guernsey', 'GN' => 'Guinea', 'GW' => 'Guinea-Bissau', 'GY' => 'Guyana', 'HT' => 'Haiti', 'HM' => 'Heard Island and McDonald Islands', 'VA' => 'Holy See (Vatican City State)', 'HN' => 'Honduras', 'HK' => 'Hong Kong', 'HU' => 'Hungary', 'IS' => 'Iceland', 'IN' => 'India', 'ID' => 'Indonesia', 'IR' => 'Iran, Islamic Republic of', 'IQ' => 'Iraq', 'IE' => 'Ireland', 'IM' => 'Isle of Man', 'IL' => 'Israel', 'IT' => 'Italy', 'JM' => 'Jamaica', 'JP' => 'Japan', 'JE' => 'Jersey', 'JO' => 'Jordan', 'KZ' => 'Kazakhstan', 'KE' => 'Kenya', 'KI' => 'Kiribati', 'KP' => 'Korea, Democratic People\'s Republic of', 'KR' => 'Korea, Republic of', 'KW' => 'Kuwait', 'KG' => 'Kyrgyzstan', 'LA' => 'Lao People\'s Democratic Republic', 'LV' => 'Latvia', 'LB' => 'Lebanon', 'LS' => 'Lesotho', 'LR' => 'Liberia', 'LY' => 'Libya', 'LI' => 'Liechtenstein', 'LT' => 'Lithuania', 'LU' => 'Luxembourg', 'MO' => 'Macao', 'MK' => 'Macedonia, the Former Yugoslav Republic of', 'MG' => 'Madagascar', 'MW' => 'Malawi', 'MY' => 'Malaysia', 'MV' => 'Maldives', 'ML' => 'Mali', 'MT' => 'Malta', 'MH' => 'Marshall Islands', 'MQ' => 'Martinique', 'MR' => 'Mauritania', 'MU' => 'Mauritius', 'YT' => 'Mayotte', 'MX' => 'Mexico', 'FM' => 'Micronesia, Federated States of', 'MD' => 'Moldova, Republic of', 'MC' => 'Monaco', 'MN' => 'Mongolia', 'ME' => 'Montenegro', 'MS' => 'Montserrat', 'MA' => 'Morocco', 'MZ' => 'Mozambique', 'MM' => 'Myanmar', 'NA' => 'Namibia', 'NR' => 'Nauru', 'NP' => 'Nepal', 'NL' => 'Netherlands', 'NC' => 'New Caledonia', 'NZ' => 'New Zealand', 'NI' => 'Nicaragua', 'NE' => 'Niger', 'NG' => 'Nigeria', 'NU' => 'Niue', 'NF' => 'Norfolk Island', 'MP' => 'Northern Mariana Islands', 'NO' => 'Norway', 'OM' => 'Oman', 'PK' => 'Pakistan', 'PW' => 'Palau', 'PS' => 'Palestine, State of', 'PA' => 'Panama', 'PG' => 'Papua New Guinea', 'PY' => 'Paraguay', 'PE' => 'Peru', 'PH' => 'Philippines', 'PN' => 'Pitcairn', 'PL' => 'Poland', 'PT' => 'Portugal', 'PR' => 'Puerto Rico', 'QA' => 'Qatar', 'RE' => 'Reunion', 'RO' => 'Romania', 'RU' => 'Russian Federation', 'RW' => 'Rwanda', 'BL' => 'Saint Barthelemy', 'SH' => 'Saint Helena, Ascension and Tristan da Cunha', 'KN' => 'Saint Kitts and Nevis', 'LC' => 'Saint Lucia', 'MF' => 'Saint Martin (French part)', 'PM' => 'Saint Pierre and Miquelon', 'VC' => 'Saint Vincent and the Grenadines', 'WS' => 'Samoa', 'SM' => 'San Marino', 'ST' => 'Sao Tome and Principe', 'SA' => 'Saudi Arabia', 'SN' => 'Senegal', 'RS' => 'Serbia', 'SC' => 'Seychelles', 'SL' => 'Sierra Leone', 'SG' => 'Singapore', 'SX' => 'Sint Maarten (Dutch part)', 'SK' => 'Slovakia', 'SI' => 'Slovenia', 'SB' => 'Solomon Islands', 'SO' => 'Somalia', 'ZA' => 'South Africa', 'GS' => 'South Georgia and the South Sandwich Islands', 'SS' => 'South Sudan', 'ES' => 'Spain', 'LK' => 'Sri Lanka', 'SD' => 'Sudan', 'SR' => 'Suriname', 'SJ' => 'Svalbard and Jan Mayen', 'SZ' => 'Swaziland', 'SE' => 'Sweden', 'CH' => 'Switzerland', 'SY' => 'Syrian Arab Republic', 'TW' => 'Taiwan, Province of China', 'TJ' => 'Tajikistan', 'TZ' => 'Tanzania, United Republic of', 'TH' => 'Thailand', 'TL' => 'Timor-Leste', 'TG' => 'Togo', 'TK' => 'Tokelau', 'TO' => 'Tonga', 'TT' => 'Trinidad and Tobago', 'TN' => 'Tunisia', 'TR' => 'Turkey', 'TM' => 'Turkmenistan', 'TC' => 'Turks and Caicos Islands', 'TV' => 'Tuvalu', 'UG' => 'Uganda', 'UA' => 'Ukraine', 'AE' => 'United Arab Emirates', 'GB' => 'United Kingdom', 'US' => 'United States', 'UM' => 'United States Minor Outlying Islands', 'UY' => 'Uruguay', 'UZ' => 'Uzbekistan', 'VU' => 'Vanuatu', 'VE' => 'Venezuela, Bolivarian Republic of', 'VN' => 'Viet Nam', 'VG' => 'Virgin Islands, British', 'VI' => 'Virgin Islands, U.S.', 'WF' => 'Wallis and Futuna', 'EH' => 'Western Sahara', 'YE' => 'Yemen', 'ZM' => 'Zambia', 'ZW' => 'Zimbabwe'
    ];
    const COUNTRY_TO_COUNTRYCODE_MAP = [
        'afghanistan' => 'AF', 'landislands' => 'AX', 'alandislands' => 'AX', 'albania' => 'AL', 'algeria' => 'DZ', 'americansamoa' => 'AS', 'andorra' => 'AD', 'angola' => 'AO', 'anguilla' => 'AI', 'antarctica' => 'AQ', 'antiguaandbarbuda' => 'AG', 'argentina' => 'AR', 'armenia' => 'AM', 'aruba' => 'AW', 'australia' => 'AU', 'austria' => 'AT', 'azerbaijan' => 'AZ', 'bahamas' => 'BS', 'bahrain' => 'BH', 'bangladesh' => 'BD', 'barbados' => 'BB', 'belarus' => 'BY', 'belgi' => 'BE', 'belgium' => 'BE', 'belize' => 'BZ', 'benin' => 'BJ', 'bermuda' => 'BM', 'bhutan' => 'BT', 'bolivia' => 'BO', 'bonairesinteustatiusandsaba' => 'BQ', 'bosniaandherzegovina' => 'BA', 'botswana' => 'BW', 'bouvetisland' => 'BV', 'brazil' => 'BR', 'britishindianoceanterritory' => 'IO', 'bruneidarussalam' => 'BN', 'bulgaria' => 'BG', 'burkinafaso' => 'BF', 'burundi' => 'BI', 'cambodia' => 'KH', 'cameroon' => 'CM', 'canada' => 'CA', 'capeverde' => 'CV', 'caymanislands' => 'KY', 'centralafricanrepublic' => 'CF', 'chad' => 'TD', 'chile' => 'CL', 'china' => 'CN', 'christmasisland' => 'CX', 'cocoskeelingislands' => 'CC', 'colombia' => 'CO', 'comoros' => 'KM', 'congo' => 'CG', 'congothedemocraticrepublicofthe' => 'CD', 'cookislands' => 'CK', 'costarica' => 'CR', 'ctedivoire' => 'CI', 'cotedivoire' => 'CI', 'croatia' => 'HR', 'cuba' => 'CU', 'curaao' => 'CW', 'curacao' => 'CW', 'cyprus' => 'CY', 'czechrepublic' => 'CZ', 'denmark' => 'DK', 'deutschland' => 'DE', 'djibouti' => 'DJ', 'dominica' => 'DM', 'dominicanrepublic' => 'DO', 'ecuador' => 'EC', 'egypt' => 'EG', 'elsalvador' => 'SV', 'equatorialguinea' => 'GQ', 'eritrea' => 'ER', 'espaa' => 'ES', 'estonia' => 'EE', 'ethiopia' => 'ET', 'falklandislandsmalvinas' => 'FK', 'faroeislands' => 'FO', 'fiji' => 'FJ', 'finland' => 'FI', 'france' => 'FR', 'franaise' => 'FR', 'frenchguiana' => 'GF', 'frenchpolynesia' => 'PF', 'frenchsouthernterritories' => 'TF', 'gabon' => 'GA', 'gambia' => 'GM', 'georgia' => 'GE', 'germany' => 'DE', 'ghana' => 'GH', 'gibraltar' => 'GI', 'greece' => 'GR', 'greenland' => 'GL', 'grenada' => 'GD', 'guadeloupe' => 'GP', 'guam' => 'GU', 'guatemala' => 'GT', 'guernsey' => 'GG', 'guinea' => 'GN', 'guineabissau' => 'GW', 'guyana' => 'GY', 'haiti' => 'HT', 'heardislandandmcdonaldislands' => 'HM', 'holyseevaticancitystate' => 'VA', 'honduras' => 'HN', 'hongkong' => 'HK', 'hungary' => 'HU', 'iceland' => 'IS', 'india' => 'IN', 'indonesia' => 'ID', 'iranislamicrepublicof' => 'IR', 'iraq' => 'IQ', 'ireland' => 'IE', 'isleofman' => 'IM', 'israel' => 'IL', 'italiana' => 'IT', 'italy' => 'IT', 'jamaica' => 'JM', 'japan' => 'JP', 'jersey' => 'JE', 'jordan' => 'JO', 'kazakhstan' => 'KZ', 'kenya' => 'KE', 'kiribati' => 'KI', 'koreademocraticpeoplesrepublicof' => 'KP', 'korearepublicof' => 'KR', 'kuwait' => 'KW', 'kyrgyzstan' => 'KG', 'laopeoplesdemocraticrepublic' => 'LA', 'latvia' => 'LV', 'lebanon' => 'LB', 'lesotho' => 'LS', 'liberia' => 'LR', 'libya' => 'LY', 'liechtenstein' => 'LI', 'lithuania' => 'LT', 'luxembourg' => 'LU', 'macao' => 'MO', 'macedoniatheformeryugoslavrepublicof' => 'MK', 'madagascar' => 'MG', 'malawi' => 'MW', 'malaysia' => 'MY', 'maldives' => 'MV', 'mali' => 'ML', 'malta' => 'MT', 'marshallislands' => 'MH', 'martinique' => 'MQ', 'mauritania' => 'MR', 'mauritius' => 'MU', 'mayotte' => 'YT', 'mexico' => 'MX', 'micronesiafederatedstatesof' => 'FM', 'moldovarepublicof' => 'MD', 'monaco' => 'MC', 'mongolia' => 'MN', 'montenegro' => 'ME', 'montserrat' => 'MS', 'morocco' => 'MA', 'mozambique' => 'MZ', 'myanmar' => 'MM', 'namibia' => 'NA', 'nauru' => 'NR', 'nederland' => 'NL', 'nederlands' => 'NL', 'nepal' => 'NP', 'netherlands' => 'NL', 'newcaledonia' => 'NC', 'newzealand' => 'NZ', 'nicaragua' => 'NI', 'niger' => 'NE', 'nigeria' => 'NG', 'niue' => 'NU', 'norfolkisland' => 'NF', 'northernmarianaislands' => 'MP', 'norway' => 'NO', 'oman' => 'OM', 'sterreich' => 'AT', 'pakistan' => 'PK', 'palau' => 'PW', 'palestinestateof' => 'PS', 'panama' => 'PA', 'papuanewguinea' => 'PG', 'paraguay' => 'PY', 'peru' => 'PE', 'philippines' => 'PH', 'pitcairn' => 'PN', 'poland' => 'PL', 'portugal' => 'PT', 'puertorico' => 'PR', 'qatar' => 'QA', 'runion' => 'RE', 'reunion' => 'RE', 'romania' => 'RO', 'russianfederation' => 'RU', 'rwanda' => 'RW', 'saintbarthlemy' => 'BL', 'saintbarthelemy' => 'BL', 'sainthelenaascensionandtristandacunha' => 'SH', 'saintkittsandnevis' => 'KN', 'saintlucia' => 'LC', 'saintmartinfrenchpart' => 'MF', 'saintpierreandmiquelon' => 'PM', 'saintvincentandthegrenadines' => 'VC', 'samoa' => 'WS', 'sanmarino' => 'SM', 'saotomeandprincipe' => 'ST', 'saudiarabia' => 'SA', 'schweiz' => 'CH', 'senegal' => 'SN', 'serbia' => 'RS', 'seychelles' => 'SC', 'sierraleone' => 'SL', 'singapore' => 'SG', 'sintmaartendutchpart' => 'SX', 'slovakia' => 'SK', 'slovenia' => 'SI', 'solomonislands' => 'SB', 'somalia' => 'SO', 'southafrica' => 'ZA', 'southgeorgiaandthesouthsandwichislands' => 'GS', 'southsudan' => 'SS', 'spain' => 'ES', 'srilanka' => 'LK', 'sudan' => 'SD', 'suriname' => 'SR', 'svalbardandjanmayen' => 'SJ', 'swaziland' => 'SZ', 'sweden' => 'SE', 'switzerland' => 'CH', 'syrianarabrepublic' => 'SY', 'taiwanprovinceofchina' => 'TW', 'tajikistan' => 'TJ', 'tanzaniaunitedrepublicof' => 'TZ', 'thailand' => 'TH', 'timorleste' => 'TL', 'togo' => 'TG', 'tokelau' => 'TK', 'tonga' => 'TO', 'trinidadandtobago' => 'TT', 'tunisia' => 'TN', 'turkey' => 'TR', 'turkmenistan' => 'TM', 'turksandcaicosislands' => 'TC', 'tuvalu' => 'TV', 'uganda' => 'UG', 'ukraine' => 'UA', 'unitedarabemirates' => 'AE', 'unitedkingdom' => 'GB', 'unitedstates' => 'US', 'unitedstatesminoroutlyingislands' => 'UM', 'uruguay' => 'UY', 'uzbekistan' => 'UZ', 'vanuatu' => 'VU', 'venezuelabolivarianrepublicof' => 'VE', 'vietnam' => 'VN', 'virginislandsbritish' => 'VG', 'virginislandsus' => 'VI', 'wallisandfutuna' => 'WF', 'westernsahara' => 'EH', 'yemen' => 'YE', 'zambia' => 'ZM', 'zimbabwe' => 'ZW'
    ];

    /**
     * @param string $countryCode
     *
     * @return string|false
     */
    public static function countryCodeToCountry($countryCode) {
        $countryCode = strtoupper($countryCode);
        if (key_exists($countryCode, self::COUNTRYCODE_TO_COUNTRY_MAP)):
            $country = self::COUNTRYCODE_TO_COUNTRY_MAP[$countryCode];
        else:
            $country = NULL;
        endif;

        return $country;
    }

    /**
     * @param string $country
     *
     * @return string|false
     *
     * Its always better to not use this method for user input, since they could always enter their country name in
     * their language, misspell or use variations of its name. Use a select field as described in the class comment.
     *
     */
    public static function countryToCountryCode($country) {
        $country = preg_replace('/[\W]/', '', $country);
        $country = trim(strtolower($country));

        if (key_exists($country, self::COUNTRY_TO_COUNTRYCODE_MAP)):
            $countryCode = self::COUNTRY_TO_COUNTRYCODE_MAP[$country];
        else:
            $countryCode = NULL;
        endif;

        return $countryCode;

    }

    public static function languageLocaleToIsoAlpha2($languageLocale) {
        return strtolower(substr($languageLocale, 0, 2));
    }

}

?>

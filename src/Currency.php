<?php

declare(strict_types=1);

namespace KrepyshSpec\World;

final class Currency
{
    public const AFN = 'AFN';
    public const ARS = 'ARS';
    public const AWG = 'AWG';
    public const AUD = 'AUD';
    public const AZN = 'AZN';
    public const BSD = 'BSD';
    public const BBD = 'BBD';
    public const BDT = 'BDT';
    public const BYN = 'BYN';
    public const BZD = 'BZD';
    public const BMD = 'BMD';
    public const BOP = 'BOP';
    public const BAM = 'BAM';
    public const BWP = 'BWP';
    public const BGN = 'BGN';
    public const BRL = 'BRL';
    public const BND = 'BND';
    public const KHR = 'KHR';
    public const CAD = 'CAD';
    public const KYD = 'KYD';
    public const CLP = 'CLP';
    public const CNY = 'CNY';
    public const COP = 'COP';
    public const CRC = 'CRC';
    public const HRK = 'HRK';
    public const CUP = 'CUP';
    public const CZK = 'CZK';
    public const DKK = 'DKK';
    public const DOP = 'DOP';
    public const XCD = 'XCD';
    public const EGP = 'EGP';
    public const SVC = 'SVC';
    public const EEK = 'EEK';
    public const EUR = 'EUR';
    public const FKP = 'FKP';
    public const FJD = 'FJD';
    public const GHC = 'GHC';
    public const GIP = 'GIP';
    public const GTQ = 'GTQ';
    public const GGP = 'GGP';
    public const GYD = 'GYD';
    public const HNL = 'HNL';
    public const HKD = 'HKD';
    public const HUF = 'HUF';
    public const ISK = 'ISK';
    public const INR = 'INR';
    public const IDR = 'IDR';
    public const IRR = 'IRR';
    public const IMP = 'IMP';
    public const ILS = 'ILS';
    public const JMD = 'JMD';
    public const JPY = 'JPY';
    public const JEP = 'JEP';
    public const KZT = 'KZT';
    public const KPW = 'KPW';
    public const KGS = 'KGS';
    public const LAK = 'LAK';
    public const LVL = 'LVL';
    public const LBP = 'LBP';
    public const LRD = 'LRD';
    public const LTL = 'LTL';
    public const MKD = 'MKD';
    public const MYR = 'MYR';
    public const MUR = 'MUR';
    public const MXN = 'MXN';
    public const MNT = 'MNT';
    public const MZN = 'MZN';
    public const NAD = 'NAD';
    public const NPR = 'NPR';
    public const ANG = 'ANG';
    public const NZD = 'NZD';
    public const NIO = 'NIO';
    public const NGN = 'NGN';
    public const NOK = 'NOK';
    public const OMR = 'OMR';
    public const PKR = 'PKR';
    public const PAB = 'PAB';
    public const PYG = 'PYG';
    public const PEN = 'PEN';
    public const PHP = 'PHP';
    public const PLN = 'PLN';
    public const QAR = 'QAR';
    public const RON = 'RON';
    public const RUB = 'RUB';
    public const SHP = 'SHP';
    public const SAR = 'SAR';
    public const RSD = 'RSD';
    public const SCR = 'SCR';
    public const SGD = 'SGD';
    public const SBD = 'SBD';
    public const SOS = 'SOS';
    public const ZAR = 'ZAR';
    public const LKR = 'LKR';
    public const SEK = 'SEK';
    public const CHF = 'CHF';
    public const SRD = 'SRD';
    public const SYP = 'SYP';
    public const TWD = 'TWD';
    public const THB = 'THB';
    public const TTD = 'TTD';
    public const TRY = 'TRY';
    public const TVD = 'TVD';
    public const UAH = 'UAH';
    public const GBP = 'GBP';
    public const UGX = 'UGX';
    public const USD = 'USD';
    public const UYU = 'UYU';
    public const UZS = 'UZS';
    public const VEF = 'VEF';
    public const VND = 'VND';
    public const ZWD = 'ZWD';

    /**
     * All currencies
     *
     * @var array|string[][]
     */
    private static array $currencies = [
        self::AFN => [
            'countryName' => 'Afghanistan',
            'name' => 'Afghanistan Afghani',
            'symbol' => '&#1547;'
        ],
        self::ARS => [
            'countryName' => 'Argentina',
            'name' => 'Argentine Peso',
            'symbol' => '&#36;'
        ],
        self::AWG => [
            'countryName' => 'Aruba',
            'name' => 'Aruban florin',
            'symbol' => '&#402;'
        ],
        self::AUD => [
            'countryName' => 'Australia',
            'name' => 'Australian Dollar',
            'symbol' => '&#65;&#36;'
        ],
        self::AZN => [
            'countryName' => 'Azerbaijan',
            'name' => 'Azerbaijani Manat',
            'symbol' => '&#8380;'
        ],
        self::BSD => [
            'countryName' => 'The Bahamas',
            'name' => 'Bahamas Dollar',
            'symbol' => '&#66;&#36;'
        ],
        self::BBD => [
            'countryName' => 'Barbados',
            'name' => 'Barbados Dollar',
            'symbol' => '&#66;&#100;&#115;&#36;'
        ],
        self::BDT => [
            'countryName' => 'People\'s Republic of Bangladesh',
            'name' => 'Bangladeshi taka',
            'symbol' => '&#2547;'
        ],
        self::BYN => [
            'countryName' => 'Belarus',
            'name' => 'Belarus Ruble',
            'symbol' => '&#66;&#114;'
        ],
        self::BZD => [
            'countryName' => 'Belize',
            'name' => 'Belize Dollar',
            'symbol' => '&#66;&#90;&#36;'
        ],
        self::BMD => [
            'countryName' => 'British Overseas Territory of Bermuda',
            'name' => 'Bermudian Dollar',
            'symbol' => '&#66;&#68;&#36;'
        ],
        self::BOP => [
            'countryName' => 'Bolivia',
            'name' => 'Boliviano',
            'symbol' => '&#66;&#115;'
        ],
        self::BAM => [
            'countryName' => 'Bosnia and Herzegovina',
            'name' => 'Bosnia-Herzegovina Convertible Marka',
            'symbol' => '&#75;&#77;'
        ],
        self::BWP => [
            'countryName' => 'Botswana',
            'name' => 'Botswana pula',
            'symbol' => '&#80;'
        ],
        self::BGN => [
            'countryName' => 'Bulgaria',
            'name' => 'Bulgarian lev',
            'symbol' => '&#1083;&#1074;'
        ],
        self::BRL => [
            'countryName' => 'Brazil',
            'name' => 'Brazilian real',
            'symbol' => '&#82;&#36;'
        ],
        self::BND => [
            'countryName' => 'Sultanate of Brunei',
            'name' => 'Brunei dollar',
            'symbol' => '&#66;&#36;'
        ],
        self::KHR => [
            'countryName' => 'Cambodia',
            'name' => 'Cambodian riel',
            'symbol' => '&#6107;'
        ],
        self::CAD => [
            'countryName' => 'Canada',
            'name' => 'Canadian dollar',
            'symbol' => '&#67;&#36;'
        ],
        self::KYD => [
            'countryName' => 'Cayman Islands',
            'name' => 'Cayman Islands dollar',
            'symbol' => '&#36;'
        ],
        self::CLP => [
            'countryName' => 'Chile',
            'name' => 'Chilean peso',
            'symbol' => '&#36;'
        ],
        self::CNY => [
            'countryName' => 'China',
            'name' => 'Chinese Yuan Renminbi',
            'symbol' => '&#165;'
        ],
        self::COP => [
            'countryName' => 'Colombia',
            'name' => 'Colombian peso',
            'symbol' => '&#36;'
        ],
        self::CRC => [
            'countryName' => 'Costa Rica',
            'name' => 'Costa Rican colón',
            'symbol' => '&#8353;'
        ],
        self::HRK => [
            'countryName' => 'Croatia',
            'name' => 'Croatian kuna',
            'symbol' => '&#107;&#110;'
        ],
        self::CUP => [
            'countryName' => 'Cuba',
            'name' => 'Cuban peso',
            'symbol' => '&#8369;'
        ],
        self::CZK => [
            'countryName' => 'Czech Republic',
            'name' => 'Czech koruna',
            'symbol' => '&#75;&#269;'
        ],
        self::DKK => [
            'countryName' => 'Denmark, Greenland, and the Faroe Islands',
            'name' => 'Danish krone',
            'symbol' => '&#107;&#114;'
        ],
        self::DOP => [
            'countryName' => 'Dominican Republic',
            'name' => 'Dominican peso',
            'symbol' => '&#82;&#68;&#36;'
        ],
        self::XCD => [
            'countryName' => 'Antigua and Barbuda, Commonwealth of Dominica, Grenada, Montserrat, St. Kitts and Nevis,
                    Saint Lucia and St. Vincent and the Grenadines',
            'name' => 'Eastern Caribbean dollar',
            'symbol' => '&#36;'
        ],
        self::EGP => [
            'countryName' => 'Egypt',
            'name' => 'Egyptian pound',
            'symbol' => '&#163;'
        ],
        self::SVC => [
            'countryName' => 'El Salvador',
            'name' => 'Salvadoran colón',
            'symbol' => '&#36;'
        ],
        self::EEK => [
            'countryName' => 'Estonia',
            'name' => 'Estonian kroon',
            'symbol' => '&#75;&#114;'
        ],
        self::EUR => [
            'countryName' => 'European Union, Italy, Belgium, Bulgaria, Croatia, Cyprus, Czechia, Denmark, Estonia,
                    Finland, France, Germany, 
                    Greece, Hungary, Ireland, Latvia, Lithuania, Luxembourg, Malta, Netherlands, Poland, 
                    Portugal, Romania, Slovakia, Slovenia, Spain, Sweden',
            'name' => 'Euro',
            'symbol' => '&#8364;'
        ],
        self::FKP => [
            'countryName' => 'Falkland Islands',
            'name' => 'Falkland Islands (Malvinas) Pound',
            'symbol' => '&#70;&#75;&#163;'
        ],
        self::FJD => [
            'countryName' => 'Fiji',
            'name' => 'Fijian dollar',
            'symbol' => '&#70;&#74;&#36;'
        ],
        self::GHC => [
            'countryName' => 'Ghana',
            'name' => 'Ghanaian cedi',
            'symbol' => '&#71;&#72;&#162;'
        ],
        self::GIP => [
            'countryName' => 'Gibraltar',
            'name' => 'Gibraltar pound',
            'symbol' => '&#163;'
        ],
        self::GTQ => [
            'countryName' => 'Guatemala',
            'name' => 'Guatemalan quetzal',
            'symbol' => '&#81;'
        ],
        self::GGP => [
            'countryName' => 'Guernsey',
            'name' => 'Guernsey pound',
            'symbol' => '&#81;'
        ],
        self::GYD => [
            'countryName' => 'Guyana',
            'name' => 'Guyanese dollar',
            'symbol' => '&#71;&#89;&#36;'
        ],
        self::HNL => [
            'countryName' => 'Honduras',
            'name' => 'Honduran lempira',
            'symbol' => '&#76;'
        ],
        self::HKD => [
            'countryName' => 'Hong Kong',
            'name' => 'Hong Kong dollar',
            'symbol' => '&#72;&#75;&#36;'
        ],
        self::HUF => [
            'countryName' => 'Hungary',
            'name' => 'Hungarian forint',
            'symbol' => '&#70;&#116;'
        ],
        self::ISK => [
            'countryName' => 'Iceland',
            'name' => 'Icelandic króna',
            'symbol' => '&#237;&#107;&#114;'
        ],
        self::INR => [
            'countryName' => 'India',
            'name' => 'Indian rupee',
            'symbol' => '&#8377;'
        ],
        self::IDR => [
            'countryName' => 'Indonesia',
            'name' => 'Indonesian rupiah',
            'symbol' => '&#82;&#112;'
        ],
        self::IRR => [
            'countryName' => 'Iran',
            'name' => 'Iranian rial',
            'symbol' => '&#65020;'
        ],
        self::IMP => [
            'countryName' => 'Isle of Man',
            'name' => 'Manx pound',
            'symbol' => '&#163;'
        ],
        self::ILS => [
            'countryName' => 'Israel, Palestinian territories of the West Bank and the Gaza Strip',
            'name' => 'Israeli Shekel',
            'symbol' => '&#8362;'
        ],
        self::JMD => [
            'countryName' => 'Jamaica',
            'name' => 'Jamaican dollar',
            'symbol' => '&#74;&#36;'
        ],
        self::JPY => [
            'countryName' => 'Jamaica',
            'name' => 'Jamaican dollar',
            'symbol' => '&#74;&#36;'
        ],
        self::JEP => [
            'countryName' => 'Jersey',
            'name' => 'Jersey pound',
            'symbol' => '&#163;'
        ],
        self::KZT => [
            'countryName' => 'Kazakhstan',
            'name' => 'Kazakhstani tenge',
            'symbol' => '&#8376;'
        ],
        self::KPW => [
            'countryName' => 'North Korea',
            'name' => 'North Korean won',
            'symbol' => '&#8361;'
        ],
        self::KGS => [
            'countryName' => 'Kyrgyz Republic',
            'name' => 'Kyrgyzstani som',
            'symbol' => '&#1083;&#1074;'
        ],
        self::LAK => [
            'countryName' => 'Laos',
            'name' => 'Lao kip',
            'symbol' => '&#8365;'
        ],
        self::LVL => [
            'countryName' => 'Laos',
            'name' => 'Latvian lats',
            'symbol' => '&#8364;'
        ],
        self::LBP => [
            'countryName' => 'Lebanon',
            'name' => 'Lebanese pound',
            'symbol' => '&#76;&#163;'
        ],
        self::LRD => [
            'countryName' => 'Liberia',
            'name' => 'Liberian dollar',
            'symbol' => '&#76;&#68;&#36;'
        ],
        self::LTL => [
            'countryName' => 'Lithuania',
            'name' => 'Lithuanian litas',
            'symbol' => '&#8364;'
        ],
        self::MKD => [
            'countryName' => 'North Macedonia',
            'name' => 'Macedonian denar',
            'symbol' => '&#1076;&#1077;&#1085;'
        ],
        self::MYR => [
            'countryName' => 'Malaysia',
            'name' => 'Malaysian ringgit',
            'symbol' => '&#82;&#77;'
        ],
        self::MUR => [
            'countryName' => 'Mauritius',
            'name' => 'Mauritian rupee',
            'symbol' => '&#82;&#115;'
        ],
        self::MXN => [
            'countryName' => 'Mexico',
            'name' => 'Mexican peso',
            'symbol' => '&#77;&#101;&#120;&#36;'
        ],
        self::MNT => [
            'countryName' => 'Mongolia',
            'name' => 'Mongolian tögrög',
            'symbol' => '&#8366;'
        ],
        self::MZN => [
            'countryName' => 'Mozambique',
            'name' => 'Mozambican metical',
            'symbol' => '&#77;&#84;'
        ],
        self::NAD => [
            'countryName' => 'Namibia',
            'name' => 'Namibian dollar',
            'symbol' => '&#78;&#36;'
        ],
        self::NPR => [
            'countryName' => 'Federal Democratic Republic of Nepal',
            'name' => 'Nepalese rupee',
            'symbol' => '&#82;&#115;&#46;'
        ],
        self::ANG => [
            'countryName' => 'Curaçao and Sint Maarten',
            'name' => 'Netherlands Antillean guilder',
            'symbol' => '&#402;'
        ],
        self::NZD => [
            'countryName' => 'New Zealand, the Cook Islands, Niue, the Ross Dependency, Tokelau, the Pitcairn Islands',
            'name' => 'New Zealand dollar',
            'symbol' => '&#36;'
        ],
        self::NIO => [
            'countryName' => 'Nicaragua',
            'name' => 'Nicaraguan córdoba',
            'symbol' => '&#67;&#36;'
        ],
        self::NGN => [
            'countryName' => 'Nigeria',
            'name' => 'Nigerian naira',
            'symbol' => '&#8358;'
        ],
        self::NOK => [
            'countryName' => 'Norway and its dependent territories',
            'name' => 'Norwegian krone',
            'symbol' => '&#107;&#114;'
        ],
        self::OMR => [
            'countryName' => 'Oman',
            'name' => 'Omani rial',
            'symbol' => '&#65020;'
        ],
        self::PKR => [
            'countryName' => 'Pakistan',
            'name' => 'Pakistani rupee',
            'symbol' => '&#82;&#115;'
        ],
        self::PAB => [
            'countryName' => 'Panama',
            'name' => 'Panamanian balboa',
            'symbol' => '&#66;&#47;&#46;'
        ],
        self::PYG => [
            'countryName' => 'Paraguay',
            'name' => 'Paraguayan Guaraní',
            'symbol' => '&#8370;'
        ],
        self::PEN => [
            'countryName' => 'Peru',
            'name' => 'Sol',
            'symbol' => '&#83;&#47;&#46;'
        ],
        self::PHP => [
            'countryName' => 'Philippines',
            'name' => 'Philippine peso',
            'symbol' => '&#8369;'
        ],
        self::PLN => [
            'countryName' => 'Poland',
            'name' => 'Polish złoty',
            'symbol' => '&#122;&#322;'
        ],
        self::QAR => [
            'countryName' => 'State of Qatar',
            'name' => 'Qatari Riyal',
            'symbol' => '&#65020;'
        ],
        self::RON => [
            'countryName' => 'Romania',
            'name' => 'Romanian leu (Leu românesc)',
            'symbol' => '&#76;'
        ],
        self::RUB => [
            'countryName' => 'Russian Federation, Abkhazia and South Ossetia, Donetsk and Luhansk',
            'name' => 'Russian ruble',
            'symbol' => '&#8381;'
        ],
        self::SHP => [
            'countryName' => 'Saint Helena, Ascension and Tristan da Cunha',
            'name' => 'Saint Helena pound',
            'symbol' => '&#163;'
        ],
        self::SAR => [
            'countryName' => 'Saudi Arabia',
            'name' => 'Saudi riyal',
            'symbol' => '&#65020;'
        ],
        self::RSD => [
            'countryName' => 'Serbia',
            'name' => 'Serbian dinar',
            'symbol' => '&#100;&#105;&#110;'
        ],
        self::SCR => [
            'countryName' => 'Seychelles',
            'name' => 'Seychellois rupee',
            'symbol' => '&#82;&#115;'
        ],
        self::SGD => [
            'countryName' => 'Singapore',
            'name' => 'Singapore dollar',
            'symbol' => '&#83;&#36;'
        ],
        self::SBD => [
            'countryName' => 'Solomon Islands',
            'name' => 'Solomon Islands dollar',
            'symbol' => '&#83;&#73;&#36;'
        ],
        self::SOS => [
            'countryName' => 'Somalia',
            'name' => 'Somali shilling',
            'symbol' => '&#83;&#104;&#46;&#83;&#111;'
        ],
        self::ZAR => [
            'countryName' => 'South Africa',
            'name' => 'South African rand',
            'symbol' => '&#82;'
        ],
        self::LKR => [
            'countryName' => 'Sri Lanka',
            'name' => 'Sri Lankan rupee',
            'symbol' => '&#82;&#115;'
        ],
        self::SEK => [
            'countryName' => 'Sweden',
            'name' => 'Swedish krona',
            'symbol' => '&#107;&#114;'
        ],
        self::CHF => [
            'countryName' => 'Switzerland',
            'name' => 'Swiss franc',
            'symbol' => '&#67;&#72;&#102;'
        ],
        self::SRD => [
            'countryName' => 'Suriname',
            'name' => 'Suriname Dollar',
            'symbol' => '&#83;&#114;&#36;'
        ],
        self::SYP => [
            'countryName' => 'Syria',
            'name' => 'Syrian pound',
            'symbol' => '&#163;&#83;'
        ],
        self::TWD => [
            'countryName' => 'Taiwan',
            'name' => 'New Taiwan dollar',
            'symbol' => '&#78;&#84;&#36;'
        ],
        self::THB => [
            'countryName' => 'Thailand',
            'name' => 'Thai baht',
            'symbol' => '&#3647;'
        ],
        self::TTD => [
            'countryName' => 'Trinidad and Tobago',
            'name' => 'Trinidad and Tobago dollar',
            'symbol' => '&#84;&#84;&#36;'
        ],
        self::TRY => [
            'countryName' => 'Turkey, Turkish Republic of Northern Cyprus',
            'name' => 'Turkey Lira',
            'symbol' => '&#8378;'
        ],
        self::TVD => [
            'countryName' => 'Tuvalu',
            'name' => 'Tuvaluan dollar',
            'symbol' => '&#84;&#86;&#36;'
        ],
        self::UAH => [
            'countryName' => 'Ukraine',
            'name' => 'Ukrainian hryvnia',
            'symbol' => '&#8372;'
        ],
        self::GBP => [
            'countryName' => 'United Kingdom, Jersey, Guernsey, the Isle of Man, Gibraltar, 
                    South Georgia and the South Sandwich Islands, 
                    the British Antarctic Territory, and Tristan da Cunha',
            'name' => 'Pound sterling',
            'symbol' => '&#163;'
        ],
        self::UGX => [
            'countryName' => 'Uganda',
            'name' => 'Ugandan shilling',
            'symbol' => '&#85;&#83;&#104;'
        ],
        self::USD => [
            'countryName' => 'United States',
            'name' => 'United States dollar',
            'symbol' => '&#36;'
        ],
        self::UYU => [
            'countryName' => 'Uruguayan',
            'name' => 'Peso Uruguayolar',
            'symbol' => '&#36;&#85;'
        ],
        self::UZS => [
            'countryName' => 'Uzbekistan',
            'name' => 'Uzbekistani soʻm',
            'symbol' => '&#1083;&#1074;'
        ],
        self::VEF => [
            'countryName' => 'Venezuela',
            'name' => 'Venezuelan bolívar',
            'symbol' => '&#66;&#115;'
        ],
        self::VND => [
            'countryName' => 'Vietnam',
            'name' => 'Vietnamese dong (Đồng)',
            'symbol' => '&#8363;'
        ],
        self::ZWD => [
            'countryName' => 'Zimbabwe',
            'name' => 'Zimbabwean dollar',
            'symbol' => '&#90;&#36;'
        ],
    ];

    /**
     * @param string $currency
     * @return string[]|null
     */
    public function __get(string $currency): ?array
    {
        $currency = strtoupper($currency);
        if (array_key_exists($currency, self::all())) {
            return self::all()[$currency];
        }

        return null;
    }

    /**
     * Get all currencies list
     *
     * @return array|string[][]
     */
    public static function all(): array
    {
        return self::$currencies;
    }


}
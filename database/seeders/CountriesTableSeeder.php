<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
    
        \DB::table('countries')->delete();
        
        \DB::table('countries')->insert(array (
            0 => 
            array (
                'id' => 1,
                'short_name' => 'AF',
                'name' => 'Afghanistan',
                'slug' => 'afghanistan',
                'phone_code' => 93,
                'status' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'short_name' => 'AL',
                'name' => 'Albania',
                'slug' => 'albania',
                'phone_code' => 355,
                'status' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'short_name' => 'DZ',
                'name' => 'Algeria',
                'slug' => 'algeria',
                'phone_code' => 213,
                'status' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'short_name' => 'AS',
                'name' => 'American Samoa',
                'slug' => 'american-samoa',
                'phone_code' => 1684,
                'status' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'short_name' => 'AD',
                'name' => 'Andorra',
                'slug' => 'andorra',
                'phone_code' => 376,
                'status' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'short_name' => 'AO',
                'name' => 'Angola',
                'slug' => 'angola',
                'phone_code' => 244,
                'status' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'short_name' => 'AI',
                'name' => 'Anguilla',
                'slug' => 'anguilla',
                'phone_code' => 1264,
                'status' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'short_name' => 'AQ',
                'name' => 'Antarctica',
                'slug' => 'antarctica',
                'phone_code' => 0,
                'status' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'short_name' => 'AG',
                'name' => 'Antigua And Barbuda',
                'slug' => 'antigua-and-barbuda',
                'phone_code' => 1268,
                'status' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'short_name' => 'AR',
                'name' => 'Argentina',
                'slug' => 'argentina',
                'phone_code' => 54,
                'status' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'short_name' => 'AM',
                'name' => 'Armenia',
                'slug' => 'armenia',
                'phone_code' => 374,
                'status' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'short_name' => 'AW',
                'name' => 'Aruba',
                'slug' => 'aruba',
                'phone_code' => 297,
                'status' => 1,
            ),
            12 => 
            array (
                'id' => 13,
                'short_name' => 'AU',
                'name' => 'Australia',
                'slug' => 'australia',
                'phone_code' => 61,
                'status' => 1,
            ),
            13 => 
            array (
                'id' => 14,
                'short_name' => 'AT',
                'name' => 'Austria',
                'slug' => 'austria',
                'phone_code' => 43,
                'status' => 1,
            ),
            14 => 
            array (
                'id' => 15,
                'short_name' => 'AZ',
                'name' => 'Azerbaijan',
                'slug' => 'azerbaijan',
                'phone_code' => 994,
                'status' => 1,
            ),
            15 => 
            array (
                'id' => 16,
                'short_name' => 'BS',
                'name' => 'Bahamas The',
                'slug' => 'bahamas-the',
                'phone_code' => 1242,
                'status' => 1,
            ),
            16 => 
            array (
                'id' => 17,
                'short_name' => 'BH',
                'name' => 'Bahrain',
                'slug' => 'bahrain',
                'phone_code' => 973,
                'status' => 1,
            ),
            17 => 
            array (
                'id' => 18,
                'short_name' => 'BD',
                'name' => 'Bangladesh',
                'slug' => 'bangladesh',
                'phone_code' => 880,
                'status' => 1,
            ),
            18 => 
            array (
                'id' => 19,
                'short_name' => 'BB',
                'name' => 'Barbados',
                'slug' => 'barbados',
                'phone_code' => 1246,
                'status' => 1,
            ),
            19 => 
            array (
                'id' => 20,
                'short_name' => 'BY',
                'name' => 'Belarus',
                'slug' => 'belarus',
                'phone_code' => 375,
                'status' => 1,
            ),
            20 => 
            array (
                'id' => 21,
                'short_name' => 'BE',
                'name' => 'Belgium',
                'slug' => 'belgium',
                'phone_code' => 32,
                'status' => 1,
            ),
            21 => 
            array (
                'id' => 22,
                'short_name' => 'BZ',
                'name' => 'Belize',
                'slug' => 'belize',
                'phone_code' => 501,
                'status' => 1,
            ),
            22 => 
            array (
                'id' => 23,
                'short_name' => 'BJ',
                'name' => 'Benin',
                'slug' => 'benin',
                'phone_code' => 229,
                'status' => 1,
            ),
            23 => 
            array (
                'id' => 24,
                'short_name' => 'BM',
                'name' => 'Bermuda',
                'slug' => 'bermuda',
                'phone_code' => 1441,
                'status' => 1,
            ),
            24 => 
            array (
                'id' => 25,
                'short_name' => 'BT',
                'name' => 'Bhutan',
                'slug' => 'bhutan',
                'phone_code' => 975,
                'status' => 1,
            ),
            25 => 
            array (
                'id' => 26,
                'short_name' => 'BO',
                'name' => 'Bolivia',
                'slug' => 'bolivia',
                'phone_code' => 591,
                'status' => 1,
            ),
            26 => 
            array (
                'id' => 27,
                'short_name' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'slug' => 'bosnia-and-herzegovina',
                'phone_code' => 387,
                'status' => 1,
            ),
            27 => 
            array (
                'id' => 28,
                'short_name' => 'BW',
                'name' => 'Botswana',
                'slug' => 'botswana',
                'phone_code' => 267,
                'status' => 1,
            ),
            28 => 
            array (
                'id' => 29,
                'short_name' => 'BV',
                'name' => 'Bouvet Island',
                'slug' => 'bouvet-island',
                'phone_code' => 0,
                'status' => 1,
            ),
            29 => 
            array (
                'id' => 30,
                'short_name' => 'BR',
                'name' => 'Brazil',
                'slug' => 'brazil',
                'phone_code' => 55,
                'status' => 1,
            ),
            30 => 
            array (
                'id' => 31,
                'short_name' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'slug' => 'british-indian-ocean-territory',
                'phone_code' => 246,
                'status' => 1,
            ),
            31 => 
            array (
                'id' => 32,
                'short_name' => 'BN',
                'name' => 'Brunei',
                'slug' => 'brunei',
                'phone_code' => 673,
                'status' => 1,
            ),
            32 => 
            array (
                'id' => 33,
                'short_name' => 'BG',
                'name' => 'Bulgaria',
                'slug' => 'bulgaria',
                'phone_code' => 359,
                'status' => 1,
            ),
            33 => 
            array (
                'id' => 34,
                'short_name' => 'BF',
                'name' => 'Burkina Faso',
                'slug' => 'burkina-faso',
                'phone_code' => 226,
                'status' => 1,
            ),
            34 => 
            array (
                'id' => 35,
                'short_name' => 'BI',
                'name' => 'Burundi',
                'slug' => 'burundi',
                'phone_code' => 257,
                'status' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'short_name' => 'KH',
                'name' => 'Cambodia',
                'slug' => 'cambodia',
                'phone_code' => 855,
                'status' => 1,
            ),
            36 => 
            array (
                'id' => 37,
                'short_name' => 'CM',
                'name' => 'Cameroon',
                'slug' => 'cameroon',
                'phone_code' => 237,
                'status' => 1,
            ),
            37 => 
            array (
                'id' => 38,
                'short_name' => 'CA',
                'name' => 'Canada',
                'slug' => 'canada',
                'phone_code' => 1,
                'status' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'short_name' => 'CV',
                'name' => 'Cape Verde',
                'slug' => 'cape-verde',
                'phone_code' => 238,
                'status' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'short_name' => 'KY',
                'name' => 'Cayman Islands',
                'slug' => 'cayman-islands',
                'phone_code' => 1345,
                'status' => 1,
            ),
            40 => 
            array (
                'id' => 41,
                'short_name' => 'CF',
                'name' => 'Central African Republic',
                'slug' => 'central-african-republic',
                'phone_code' => 236,
                'status' => 1,
            ),
            41 => 
            array (
                'id' => 42,
                'short_name' => 'TD',
                'name' => 'Chad',
                'slug' => 'chad',
                'phone_code' => 235,
                'status' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'short_name' => 'CL',
                'name' => 'Chile',
                'slug' => 'chile',
                'phone_code' => 56,
                'status' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'short_name' => 'CN',
                'name' => 'China',
                'slug' => 'china',
                'phone_code' => 86,
                'status' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'short_name' => 'CX',
                'name' => 'Christmas Island',
                'slug' => 'christmas-island',
                'phone_code' => 61,
                'status' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'short_name' => 'CC',
            'name' => 'Cocos (Keeling) Islands',
                'slug' => 'cocos-keeling-islands',
                'phone_code' => 672,
                'status' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'short_name' => 'CO',
                'name' => 'Colombia',
                'slug' => 'colombia',
                'phone_code' => 57,
                'status' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'short_name' => 'KM',
                'name' => 'Comoros',
                'slug' => 'comoros',
                'phone_code' => 269,
                'status' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'short_name' => 'CG',
                'name' => 'Republic Of The Congo',
                'slug' => 'republic-of-the-congo',
                'phone_code' => 242,
                'status' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'short_name' => 'CD',
                'name' => 'Democratic Republic Of The Congo',
                'slug' => 'democratic-republic-of-the-congo',
                'phone_code' => 242,
                'status' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'short_name' => 'CK',
                'name' => 'Cook Islands',
                'slug' => 'cook-islands',
                'phone_code' => 682,
                'status' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'short_name' => 'CR',
                'name' => 'Costa Rica',
                'slug' => 'costa-rica',
                'phone_code' => 506,
                'status' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'short_name' => 'CI',
            'name' => 'Cote D\'Ivoire (Ivory Coast)',
                'slug' => 'cote-divoire-ivory-coast',
                'phone_code' => 225,
                'status' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'short_name' => 'HR',
            'name' => 'Croatia (Hrvatska)',
                'slug' => 'croatia-hrvatska',
                'phone_code' => 385,
                'status' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'short_name' => 'CU',
                'name' => 'Cuba',
                'slug' => 'cuba',
                'phone_code' => 53,
                'status' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'short_name' => 'CY',
                'name' => 'Cyprus',
                'slug' => 'cyprus',
                'phone_code' => 357,
                'status' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'short_name' => 'CZ',
                'name' => 'Czech Republic',
                'slug' => 'czech-republic',
                'phone_code' => 420,
                'status' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'short_name' => 'DK',
                'name' => 'Denmark',
                'slug' => 'denmark',
                'phone_code' => 45,
                'status' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'short_name' => 'DJ',
                'name' => 'Djibouti',
                'slug' => 'djibouti',
                'phone_code' => 253,
                'status' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'short_name' => 'DM',
                'name' => 'Dominica',
                'slug' => 'dominica',
                'phone_code' => 1767,
                'status' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'short_name' => 'DO',
                'name' => 'Dominican Republic',
                'slug' => 'dominican-republic',
                'phone_code' => 1809,
                'status' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'short_name' => 'TP',
                'name' => 'East Timor',
                'slug' => 'east-timor',
                'phone_code' => 670,
                'status' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'short_name' => 'EC',
                'name' => 'Ecuador',
                'slug' => 'ecuador',
                'phone_code' => 593,
                'status' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'short_name' => 'EG',
                'name' => 'Egypt',
                'slug' => 'egypt',
                'phone_code' => 20,
                'status' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'short_name' => 'SV',
                'name' => 'El Salvador',
                'slug' => 'el-salvador',
                'phone_code' => 503,
                'status' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'short_name' => 'GQ',
                'name' => 'Equatorial Guinea',
                'slug' => 'equatorial-guinea',
                'phone_code' => 240,
                'status' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'short_name' => 'ER',
                'name' => 'Eritrea',
                'slug' => 'eritrea',
                'phone_code' => 291,
                'status' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'short_name' => 'EE',
                'name' => 'Estonia',
                'slug' => 'estonia',
                'phone_code' => 372,
                'status' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'short_name' => 'ET',
                'name' => 'Ethiopia',
                'slug' => 'ethiopia',
                'phone_code' => 251,
                'status' => 1,
            ),
            69 => 
            array (
                'id' => 70,
                'short_name' => 'XA',
                'name' => 'External Territories of Australia',
                'slug' => 'external-territories-of-australia',
                'phone_code' => 61,
                'status' => 1,
            ),
            70 => 
            array (
                'id' => 71,
                'short_name' => 'FK',
                'name' => 'Falkland Islands',
                'slug' => 'falkland-islands',
                'phone_code' => 500,
                'status' => 1,
            ),
            71 => 
            array (
                'id' => 72,
                'short_name' => 'FO',
                'name' => 'Faroe Islands',
                'slug' => 'faroe-islands',
                'phone_code' => 298,
                'status' => 1,
            ),
            72 => 
            array (
                'id' => 73,
                'short_name' => 'FJ',
                'name' => 'Fiji Islands',
                'slug' => 'fiji-islands',
                'phone_code' => 679,
                'status' => 1,
            ),
            73 => 
            array (
                'id' => 74,
                'short_name' => 'FI',
                'name' => 'Finland',
                'slug' => 'finland',
                'phone_code' => 358,
                'status' => 1,
            ),
            74 => 
            array (
                'id' => 75,
                'short_name' => 'FR',
                'name' => 'France',
                'slug' => 'france',
                'phone_code' => 33,
                'status' => 1,
            ),
            75 => 
            array (
                'id' => 76,
                'short_name' => 'GF',
                'name' => 'French Guiana',
                'slug' => 'french-guiana',
                'phone_code' => 594,
                'status' => 1,
            ),
            76 => 
            array (
                'id' => 77,
                'short_name' => 'PF',
                'name' => 'French Polynesia',
                'slug' => 'french-polynesia',
                'phone_code' => 689,
                'status' => 1,
            ),
            77 => 
            array (
                'id' => 78,
                'short_name' => 'TF',
                'name' => 'French Southern Territories',
                'slug' => 'french-southern-territories',
                'phone_code' => 0,
                'status' => 1,
            ),
            78 => 
            array (
                'id' => 79,
                'short_name' => 'GA',
                'name' => 'Gabon',
                'slug' => 'gabon',
                'phone_code' => 241,
                'status' => 1,
            ),
            79 => 
            array (
                'id' => 80,
                'short_name' => 'GM',
                'name' => 'Gambia The',
                'slug' => 'gambia-the',
                'phone_code' => 220,
                'status' => 1,
            ),
            80 => 
            array (
                'id' => 81,
                'short_name' => 'GE',
                'name' => 'Georgia',
                'slug' => 'georgia',
                'phone_code' => 995,
                'status' => 1,
            ),
            81 => 
            array (
                'id' => 82,
                'short_name' => 'DE',
                'name' => 'Germany',
                'slug' => 'germany',
                'phone_code' => 49,
                'status' => 1,
            ),
            82 => 
            array (
                'id' => 83,
                'short_name' => 'GH',
                'name' => 'Ghana',
                'slug' => 'ghana',
                'phone_code' => 233,
                'status' => 1,
            ),
            83 => 
            array (
                'id' => 84,
                'short_name' => 'GI',
                'name' => 'Gibraltar',
                'slug' => 'gibraltar',
                'phone_code' => 350,
                'status' => 1,
            ),
            84 => 
            array (
                'id' => 85,
                'short_name' => 'GR',
                'name' => 'Greece',
                'slug' => 'greece',
                'phone_code' => 30,
                'status' => 1,
            ),
            85 => 
            array (
                'id' => 86,
                'short_name' => 'GL',
                'name' => 'Greenland',
                'slug' => 'greenland',
                'phone_code' => 299,
                'status' => 1,
            ),
            86 => 
            array (
                'id' => 87,
                'short_name' => 'GD',
                'name' => 'Grenada',
                'slug' => 'grenada',
                'phone_code' => 1473,
                'status' => 1,
            ),
            87 => 
            array (
                'id' => 88,
                'short_name' => 'GP',
                'name' => 'Guadeloupe',
                'slug' => 'guadeloupe',
                'phone_code' => 590,
                'status' => 1,
            ),
            88 => 
            array (
                'id' => 89,
                'short_name' => 'GU',
                'name' => 'Guam',
                'slug' => 'guam',
                'phone_code' => 1671,
                'status' => 1,
            ),
            89 => 
            array (
                'id' => 90,
                'short_name' => 'GT',
                'name' => 'Guatemala',
                'slug' => 'guatemala',
                'phone_code' => 502,
                'status' => 1,
            ),
            90 => 
            array (
                'id' => 91,
                'short_name' => 'XU',
                'name' => 'Guernsey and Alderney',
                'slug' => 'guernsey-and-alderney',
                'phone_code' => 44,
                'status' => 1,
            ),
            91 => 
            array (
                'id' => 92,
                'short_name' => 'GN',
                'name' => 'Guinea',
                'slug' => 'guinea',
                'phone_code' => 224,
                'status' => 1,
            ),
            92 => 
            array (
                'id' => 93,
                'short_name' => 'GW',
                'name' => 'Guinea-Bissau',
                'slug' => 'guineabissau',
                'phone_code' => 245,
                'status' => 1,
            ),
            93 => 
            array (
                'id' => 94,
                'short_name' => 'GY',
                'name' => 'Guyana',
                'slug' => 'guyana',
                'phone_code' => 592,
                'status' => 1,
            ),
            94 => 
            array (
                'id' => 95,
                'short_name' => 'HT',
                'name' => 'Haiti',
                'slug' => 'haiti',
                'phone_code' => 509,
                'status' => 1,
            ),
            95 => 
            array (
                'id' => 96,
                'short_name' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'slug' => 'heard-and-mcdonald-islands',
                'phone_code' => 0,
                'status' => 1,
            ),
            96 => 
            array (
                'id' => 97,
                'short_name' => 'HN',
                'name' => 'Honduras',
                'slug' => 'honduras',
                'phone_code' => 504,
                'status' => 1,
            ),
            97 => 
            array (
                'id' => 98,
                'short_name' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'slug' => 'hong-kong-sar',
                'phone_code' => 852,
                'status' => 1,
            ),
            98 => 
            array (
                'id' => 99,
                'short_name' => 'HU',
                'name' => 'Hungary',
                'slug' => 'hungary',
                'phone_code' => 36,
                'status' => 1,
            ),
            99 => 
            array (
                'id' => 100,
                'short_name' => 'IS',
                'name' => 'Iceland',
                'slug' => 'iceland',
                'phone_code' => 354,
                'status' => 1,
            ),
            100 => 
            array (
                'id' => 101,
                'short_name' => 'IN',
                'name' => 'India',
                'slug' => 'india',
                'phone_code' => 91,
                'status' => 1,
            ),
            101 => 
            array (
                'id' => 102,
                'short_name' => 'ID',
                'name' => 'Indonesia',
                'slug' => 'indonesia',
                'phone_code' => 62,
                'status' => 1,
            ),
            102 => 
            array (
                'id' => 103,
                'short_name' => 'IR',
                'name' => 'Iran',
                'slug' => 'iran',
                'phone_code' => 98,
                'status' => 1,
            ),
            103 => 
            array (
                'id' => 104,
                'short_name' => 'IQ',
                'name' => 'Iraq',
                'slug' => 'iraq',
                'phone_code' => 964,
                'status' => 1,
            ),
            104 => 
            array (
                'id' => 105,
                'short_name' => 'IE',
                'name' => 'Ireland',
                'slug' => 'ireland',
                'phone_code' => 353,
                'status' => 1,
            ),
            105 => 
            array (
                'id' => 106,
                'short_name' => 'IL',
                'name' => 'Israel',
                'slug' => 'israel',
                'phone_code' => 972,
                'status' => 1,
            ),
            106 => 
            array (
                'id' => 107,
                'short_name' => 'IT',
                'name' => 'Italy',
                'slug' => 'italy',
                'phone_code' => 39,
                'status' => 1,
            ),
            107 => 
            array (
                'id' => 108,
                'short_name' => 'JM',
                'name' => 'Jamaica',
                'slug' => 'jamaica',
                'phone_code' => 1876,
                'status' => 1,
            ),
            108 => 
            array (
                'id' => 109,
                'short_name' => 'JP',
                'name' => 'Japan',
                'slug' => 'japan',
                'phone_code' => 81,
                'status' => 1,
            ),
            109 => 
            array (
                'id' => 110,
                'short_name' => 'XJ',
                'name' => 'Jersey',
                'slug' => 'jersey',
                'phone_code' => 44,
                'status' => 1,
            ),
            110 => 
            array (
                'id' => 111,
                'short_name' => 'JO',
                'name' => 'Jordan',
                'slug' => 'jordan',
                'phone_code' => 962,
                'status' => 1,
            ),
            111 => 
            array (
                'id' => 112,
                'short_name' => 'KZ',
                'name' => 'Kazakhstan',
                'slug' => 'kazakhstan',
                'phone_code' => 7,
                'status' => 1,
            ),
            112 => 
            array (
                'id' => 113,
                'short_name' => 'KE',
                'name' => 'Kenya',
                'slug' => 'kenya',
                'phone_code' => 254,
                'status' => 1,
            ),
            113 => 
            array (
                'id' => 114,
                'short_name' => 'KI',
                'name' => 'Kiribati',
                'slug' => 'kiribati',
                'phone_code' => 686,
                'status' => 1,
            ),
            114 => 
            array (
                'id' => 115,
                'short_name' => 'KP',
                'name' => 'Korea North',
                'slug' => 'korea-north',
                'phone_code' => 850,
                'status' => 1,
            ),
            115 => 
            array (
                'id' => 116,
                'short_name' => 'KR',
                'name' => 'Korea South',
                'slug' => 'korea-south',
                'phone_code' => 82,
                'status' => 1,
            ),
            116 => 
            array (
                'id' => 117,
                'short_name' => 'KW',
                'name' => 'Kuwait',
                'slug' => 'kuwait',
                'phone_code' => 965,
                'status' => 1,
            ),
            117 => 
            array (
                'id' => 118,
                'short_name' => 'KG',
                'name' => 'Kyrgyzstan',
                'slug' => 'kyrgyzstan',
                'phone_code' => 996,
                'status' => 1,
            ),
            118 => 
            array (
                'id' => 119,
                'short_name' => 'LA',
                'name' => 'Laos',
                'slug' => 'laos',
                'phone_code' => 856,
                'status' => 1,
            ),
            119 => 
            array (
                'id' => 120,
                'short_name' => 'LV',
                'name' => 'Latvia',
                'slug' => 'latvia',
                'phone_code' => 371,
                'status' => 1,
            ),
            120 => 
            array (
                'id' => 121,
                'short_name' => 'LB',
                'name' => 'Lebanon',
                'slug' => 'lebanon',
                'phone_code' => 961,
                'status' => 1,
            ),
            121 => 
            array (
                'id' => 122,
                'short_name' => 'LS',
                'name' => 'Lesotho',
                'slug' => 'lesotho',
                'phone_code' => 266,
                'status' => 1,
            ),
            122 => 
            array (
                'id' => 123,
                'short_name' => 'LR',
                'name' => 'Liberia',
                'slug' => 'liberia',
                'phone_code' => 231,
                'status' => 1,
            ),
            123 => 
            array (
                'id' => 124,
                'short_name' => 'LY',
                'name' => 'Libya',
                'slug' => 'libya',
                'phone_code' => 218,
                'status' => 1,
            ),
            124 => 
            array (
                'id' => 125,
                'short_name' => 'LI',
                'name' => 'Liechtenstein',
                'slug' => 'liechtenstein',
                'phone_code' => 423,
                'status' => 1,
            ),
            125 => 
            array (
                'id' => 126,
                'short_name' => 'LT',
                'name' => 'Lithuania',
                'slug' => 'lithuania',
                'phone_code' => 370,
                'status' => 1,
            ),
            126 => 
            array (
                'id' => 127,
                'short_name' => 'LU',
                'name' => 'Luxembourg',
                'slug' => 'luxembourg',
                'phone_code' => 352,
                'status' => 1,
            ),
            127 => 
            array (
                'id' => 128,
                'short_name' => 'MO',
                'name' => 'Macau S.A.R.',
                'slug' => 'macau-sar',
                'phone_code' => 853,
                'status' => 1,
            ),
            128 => 
            array (
                'id' => 129,
                'short_name' => 'MK',
                'name' => 'Macedonia',
                'slug' => 'macedonia',
                'phone_code' => 389,
                'status' => 1,
            ),
            129 => 
            array (
                'id' => 130,
                'short_name' => 'MG',
                'name' => 'Madagascar',
                'slug' => 'madagascar',
                'phone_code' => 261,
                'status' => 1,
            ),
            130 => 
            array (
                'id' => 131,
                'short_name' => 'MW',
                'name' => 'Malawi',
                'slug' => 'malawi',
                'phone_code' => 265,
                'status' => 1,
            ),
            131 => 
            array (
                'id' => 132,
                'short_name' => 'MY',
                'name' => 'Malaysia',
                'slug' => 'malaysia',
                'phone_code' => 60,
                'status' => 1,
            ),
            132 => 
            array (
                'id' => 133,
                'short_name' => 'MV',
                'name' => 'Maldives',
                'slug' => 'maldives',
                'phone_code' => 960,
                'status' => 1,
            ),
            133 => 
            array (
                'id' => 134,
                'short_name' => 'ML',
                'name' => 'Mali',
                'slug' => 'mali',
                'phone_code' => 223,
                'status' => 1,
            ),
            134 => 
            array (
                'id' => 135,
                'short_name' => 'MT',
                'name' => 'Malta',
                'slug' => 'malta',
                'phone_code' => 356,
                'status' => 1,
            ),
            135 => 
            array (
                'id' => 136,
                'short_name' => 'XM',
            'name' => 'Man (Isle of)',
                'slug' => 'man-isle-of',
                'phone_code' => 44,
                'status' => 1,
            ),
            136 => 
            array (
                'id' => 137,
                'short_name' => 'MH',
                'name' => 'Marshall Islands',
                'slug' => 'marshall-islands',
                'phone_code' => 692,
                'status' => 1,
            ),
            137 => 
            array (
                'id' => 138,
                'short_name' => 'MQ',
                'name' => 'Martinique',
                'slug' => 'martinique',
                'phone_code' => 596,
                'status' => 1,
            ),
            138 => 
            array (
                'id' => 139,
                'short_name' => 'MR',
                'name' => 'Mauritania',
                'slug' => 'mauritania',
                'phone_code' => 222,
                'status' => 1,
            ),
            139 => 
            array (
                'id' => 140,
                'short_name' => 'MU',
                'name' => 'Mauritius',
                'slug' => 'mauritius',
                'phone_code' => 230,
                'status' => 1,
            ),
            140 => 
            array (
                'id' => 141,
                'short_name' => 'YT',
                'name' => 'Mayotte',
                'slug' => 'mayotte',
                'phone_code' => 269,
                'status' => 1,
            ),
            141 => 
            array (
                'id' => 142,
                'short_name' => 'MX',
                'name' => 'Mexico',
                'slug' => 'mexico',
                'phone_code' => 52,
                'status' => 1,
            ),
            142 => 
            array (
                'id' => 143,
                'short_name' => 'FM',
                'name' => 'Micronesia',
                'slug' => 'micronesia',
                'phone_code' => 691,
                'status' => 1,
            ),
            143 => 
            array (
                'id' => 144,
                'short_name' => 'MD',
                'name' => 'Moldova',
                'slug' => 'moldova',
                'phone_code' => 373,
                'status' => 1,
            ),
            144 => 
            array (
                'id' => 145,
                'short_name' => 'MC',
                'name' => 'Monaco',
                'slug' => 'monaco',
                'phone_code' => 377,
                'status' => 1,
            ),
            145 => 
            array (
                'id' => 146,
                'short_name' => 'MN',
                'name' => 'Mongolia',
                'slug' => 'mongolia',
                'phone_code' => 976,
                'status' => 1,
            ),
            146 => 
            array (
                'id' => 147,
                'short_name' => 'MS',
                'name' => 'Montserrat',
                'slug' => 'montserrat',
                'phone_code' => 1664,
                'status' => 1,
            ),
            147 => 
            array (
                'id' => 148,
                'short_name' => 'MA',
                'name' => 'Morocco',
                'slug' => 'morocco',
                'phone_code' => 212,
                'status' => 1,
            ),
            148 => 
            array (
                'id' => 149,
                'short_name' => 'MZ',
                'name' => 'Mozambique',
                'slug' => 'mozambique',
                'phone_code' => 258,
                'status' => 1,
            ),
            149 => 
            array (
                'id' => 150,
                'short_name' => 'MM',
                'name' => 'Myanmar',
                'slug' => 'myanmar',
                'phone_code' => 95,
                'status' => 1,
            ),
            150 => 
            array (
                'id' => 151,
                'short_name' => 'NA',
                'name' => 'Namibia',
                'slug' => 'namibia',
                'phone_code' => 264,
                'status' => 1,
            ),
            151 => 
            array (
                'id' => 152,
                'short_name' => 'NR',
                'name' => 'Nauru',
                'slug' => 'nauru',
                'phone_code' => 674,
                'status' => 1,
            ),
            152 => 
            array (
                'id' => 153,
                'short_name' => 'NP',
                'name' => 'Nepal',
                'slug' => 'nepal',
                'phone_code' => 977,
                'status' => 1,
            ),
            153 => 
            array (
                'id' => 154,
                'short_name' => 'AN',
                'name' => 'Netherlands Antilles',
                'slug' => 'netherlands-antilles',
                'phone_code' => 599,
                'status' => 1,
            ),
            154 => 
            array (
                'id' => 155,
                'short_name' => 'NL',
                'name' => 'Netherlands The',
                'slug' => 'netherlands-the',
                'phone_code' => 31,
                'status' => 1,
            ),
            155 => 
            array (
                'id' => 156,
                'short_name' => 'NC',
                'name' => 'New Caledonia',
                'slug' => 'new-caledonia',
                'phone_code' => 687,
                'status' => 1,
            ),
            156 => 
            array (
                'id' => 157,
                'short_name' => 'NZ',
                'name' => 'New Zealand',
                'slug' => 'new-zealand',
                'phone_code' => 64,
                'status' => 1,
            ),
            157 => 
            array (
                'id' => 158,
                'short_name' => 'NI',
                'name' => 'Nicaragua',
                'slug' => 'nicaragua',
                'phone_code' => 505,
                'status' => 1,
            ),
            158 => 
            array (
                'id' => 159,
                'short_name' => 'NE',
                'name' => 'Niger',
                'slug' => 'niger',
                'phone_code' => 227,
                'status' => 1,
            ),
            159 => 
            array (
                'id' => 160,
                'short_name' => 'NG',
                'name' => 'Nigeria',
                'slug' => 'nigeria',
                'phone_code' => 234,
                'status' => 1,
            ),
            160 => 
            array (
                'id' => 161,
                'short_name' => 'NU',
                'name' => 'Niue',
                'slug' => 'niue',
                'phone_code' => 683,
                'status' => 1,
            ),
            161 => 
            array (
                'id' => 162,
                'short_name' => 'NF',
                'name' => 'Norfolk Island',
                'slug' => 'norfolk-island',
                'phone_code' => 672,
                'status' => 1,
            ),
            162 => 
            array (
                'id' => 163,
                'short_name' => 'MP',
                'name' => 'Northern Mariana Islands',
                'slug' => 'northern-mariana-islands',
                'phone_code' => 1670,
                'status' => 1,
            ),
            163 => 
            array (
                'id' => 164,
                'short_name' => 'NO',
                'name' => 'Norway',
                'slug' => 'norway',
                'phone_code' => 47,
                'status' => 1,
            ),
            164 => 
            array (
                'id' => 165,
                'short_name' => 'OM',
                'name' => 'Oman',
                'slug' => 'oman',
                'phone_code' => 968,
                'status' => 1,
            ),
            165 => 
            array (
                'id' => 166,
                'short_name' => 'PK',
                'name' => 'Pakistan',
                'slug' => 'pakistan',
                'phone_code' => 92,
                'status' => 1,
            ),
            166 => 
            array (
                'id' => 167,
                'short_name' => 'PW',
                'name' => 'Palau',
                'slug' => 'palau',
                'phone_code' => 680,
                'status' => 1,
            ),
            167 => 
            array (
                'id' => 168,
                'short_name' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'slug' => 'palestinian-territory-occupied',
                'phone_code' => 970,
                'status' => 1,
            ),
            168 => 
            array (
                'id' => 169,
                'short_name' => 'PA',
                'name' => 'Panama',
                'slug' => 'panama',
                'phone_code' => 507,
                'status' => 1,
            ),
            169 => 
            array (
                'id' => 170,
                'short_name' => 'PG',
                'name' => 'Papua new Guinea',
                'slug' => 'papua-new-guinea',
                'phone_code' => 675,
                'status' => 1,
            ),
            170 => 
            array (
                'id' => 171,
                'short_name' => 'PY',
                'name' => 'Paraguay',
                'slug' => 'paraguay',
                'phone_code' => 595,
                'status' => 1,
            ),
            171 => 
            array (
                'id' => 172,
                'short_name' => 'PE',
                'name' => 'Peru',
                'slug' => 'peru',
                'phone_code' => 51,
                'status' => 1,
            ),
            172 => 
            array (
                'id' => 173,
                'short_name' => 'PH',
                'name' => 'Philippines',
                'slug' => 'philippines',
                'phone_code' => 63,
                'status' => 1,
            ),
            173 => 
            array (
                'id' => 174,
                'short_name' => 'PN',
                'name' => 'Pitcairn Island',
                'slug' => 'pitcairn-island',
                'phone_code' => 0,
                'status' => 1,
            ),
            174 => 
            array (
                'id' => 175,
                'short_name' => 'PL',
                'name' => 'Poland',
                'slug' => 'poland',
                'phone_code' => 48,
                'status' => 1,
            ),
            175 => 
            array (
                'id' => 176,
                'short_name' => 'PT',
                'name' => 'Portugal',
                'slug' => 'portugal',
                'phone_code' => 351,
                'status' => 1,
            ),
            176 => 
            array (
                'id' => 177,
                'short_name' => 'PR',
                'name' => 'Puerto Rico',
                'slug' => 'puerto-rico',
                'phone_code' => 1787,
                'status' => 1,
            ),
            177 => 
            array (
                'id' => 178,
                'short_name' => 'QA',
                'name' => 'Qatar',
                'slug' => 'qatar',
                'phone_code' => 974,
                'status' => 1,
            ),
            178 => 
            array (
                'id' => 179,
                'short_name' => 'RE',
                'name' => 'Reunion',
                'slug' => 'reunion',
                'phone_code' => 262,
                'status' => 1,
            ),
            179 => 
            array (
                'id' => 180,
                'short_name' => 'RO',
                'name' => 'Romania',
                'slug' => 'romania',
                'phone_code' => 40,
                'status' => 1,
            ),
            180 => 
            array (
                'id' => 181,
                'short_name' => 'RU',
                'name' => 'Russia',
                'slug' => 'russia',
                'phone_code' => 70,
                'status' => 1,
            ),
            181 => 
            array (
                'id' => 182,
                'short_name' => 'RW',
                'name' => 'Rwanda',
                'slug' => 'rwanda',
                'phone_code' => 250,
                'status' => 1,
            ),
            182 => 
            array (
                'id' => 183,
                'short_name' => 'SH',
                'name' => 'Saint Helena',
                'slug' => 'saint-helena',
                'phone_code' => 290,
                'status' => 1,
            ),
            183 => 
            array (
                'id' => 184,
                'short_name' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'slug' => 'saint-kitts-and-nevis',
                'phone_code' => 1869,
                'status' => 1,
            ),
            184 => 
            array (
                'id' => 185,
                'short_name' => 'LC',
                'name' => 'Saint Lucia',
                'slug' => 'saint-lucia',
                'phone_code' => 1758,
                'status' => 1,
            ),
            185 => 
            array (
                'id' => 186,
                'short_name' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'slug' => 'saint-pierre-and-miquelon',
                'phone_code' => 508,
                'status' => 1,
            ),
            186 => 
            array (
                'id' => 187,
                'short_name' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'slug' => 'saint-vincent-and-the-grenadines',
                'phone_code' => 1784,
                'status' => 1,
            ),
            187 => 
            array (
                'id' => 188,
                'short_name' => 'WS',
                'name' => 'Samoa',
                'slug' => 'samoa',
                'phone_code' => 684,
                'status' => 1,
            ),
            188 => 
            array (
                'id' => 189,
                'short_name' => 'SM',
                'name' => 'San Marino',
                'slug' => 'san-marino',
                'phone_code' => 378,
                'status' => 1,
            ),
            189 => 
            array (
                'id' => 190,
                'short_name' => 'ST',
                'name' => 'Sao Tome and Principe',
                'slug' => 'sao-tome-and-principe',
                'phone_code' => 239,
                'status' => 1,
            ),
            190 => 
            array (
                'id' => 191,
                'short_name' => 'SA',
                'name' => 'Saudi Arabia',
                'slug' => 'saudi-arabia',
                'phone_code' => 966,
                'status' => 1,
            ),
            191 => 
            array (
                'id' => 192,
                'short_name' => 'SN',
                'name' => 'Senegal',
                'slug' => 'senegal',
                'phone_code' => 221,
                'status' => 1,
            ),
            192 => 
            array (
                'id' => 193,
                'short_name' => 'RS',
                'name' => 'Serbia',
                'slug' => 'serbia',
                'phone_code' => 381,
                'status' => 1,
            ),
            193 => 
            array (
                'id' => 194,
                'short_name' => 'SC',
                'name' => 'Seychelles',
                'slug' => 'seychelles',
                'phone_code' => 248,
                'status' => 1,
            ),
            194 => 
            array (
                'id' => 195,
                'short_name' => 'SL',
                'name' => 'Sierra Leone',
                'slug' => 'sierra-leone',
                'phone_code' => 232,
                'status' => 1,
            ),
            195 => 
            array (
                'id' => 196,
                'short_name' => 'SG',
                'name' => 'Singapore',
                'slug' => 'singapore',
                'phone_code' => 65,
                'status' => 1,
            ),
            196 => 
            array (
                'id' => 197,
                'short_name' => 'SK',
                'name' => 'Slovakia',
                'slug' => 'slovakia',
                'phone_code' => 421,
                'status' => 1,
            ),
            197 => 
            array (
                'id' => 198,
                'short_name' => 'SI',
                'name' => 'Slovenia',
                'slug' => 'slovenia',
                'phone_code' => 386,
                'status' => 1,
            ),
            198 => 
            array (
                'id' => 199,
                'short_name' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'slug' => 'smaller-territories-of-the-uk',
                'phone_code' => 44,
                'status' => 1,
            ),
            199 => 
            array (
                'id' => 200,
                'short_name' => 'SB',
                'name' => 'Solomon Islands',
                'slug' => 'solomon-islands',
                'phone_code' => 677,
                'status' => 1,
            ),
            200 => 
            array (
                'id' => 201,
                'short_name' => 'SO',
                'name' => 'Somalia',
                'slug' => 'somalia',
                'phone_code' => 252,
                'status' => 1,
            ),
            201 => 
            array (
                'id' => 202,
                'short_name' => 'ZA',
                'name' => 'South Africa',
                'slug' => 'south-africa',
                'phone_code' => 27,
                'status' => 1,
            ),
            202 => 
            array (
                'id' => 203,
                'short_name' => 'GS',
                'name' => 'South Georgia',
                'slug' => 'south-georgia',
                'phone_code' => 0,
                'status' => 1,
            ),
            203 => 
            array (
                'id' => 204,
                'short_name' => 'SS',
                'name' => 'South Sudan',
                'slug' => 'south-sudan',
                'phone_code' => 211,
                'status' => 1,
            ),
            204 => 
            array (
                'id' => 205,
                'short_name' => 'ES',
                'name' => 'Spain',
                'slug' => 'spain',
                'phone_code' => 34,
                'status' => 1,
            ),
            205 => 
            array (
                'id' => 206,
                'short_name' => 'LK',
                'name' => 'Sri Lanka',
                'slug' => 'sri-lanka',
                'phone_code' => 94,
                'status' => 1,
            ),
            206 => 
            array (
                'id' => 207,
                'short_name' => 'SD',
                'name' => 'Sudan',
                'slug' => 'sudan',
                'phone_code' => 249,
                'status' => 1,
            ),
            207 => 
            array (
                'id' => 208,
                'short_name' => 'SR',
                'name' => 'Suriname',
                'slug' => 'suriname',
                'phone_code' => 597,
                'status' => 1,
            ),
            208 => 
            array (
                'id' => 209,
                'short_name' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'slug' => 'svalbard-and-jan-mayen-islands',
                'phone_code' => 47,
                'status' => 1,
            ),
            209 => 
            array (
                'id' => 210,
                'short_name' => 'SZ',
                'name' => 'Swaziland',
                'slug' => 'swaziland',
                'phone_code' => 268,
                'status' => 1,
            ),
            210 => 
            array (
                'id' => 211,
                'short_name' => 'SE',
                'name' => 'Sweden',
                'slug' => 'sweden',
                'phone_code' => 46,
                'status' => 1,
            ),
            211 => 
            array (
                'id' => 212,
                'short_name' => 'CH',
                'name' => 'Switzerland',
                'slug' => 'switzerland',
                'phone_code' => 41,
                'status' => 1,
            ),
            212 => 
            array (
                'id' => 213,
                'short_name' => 'SY',
                'name' => 'Syria',
                'slug' => 'syria',
                'phone_code' => 963,
                'status' => 1,
            ),
            213 => 
            array (
                'id' => 214,
                'short_name' => 'TW',
                'name' => 'Taiwan',
                'slug' => 'taiwan',
                'phone_code' => 886,
                'status' => 1,
            ),
            214 => 
            array (
                'id' => 215,
                'short_name' => 'TJ',
                'name' => 'Tajikistan',
                'slug' => 'tajikistan',
                'phone_code' => 992,
                'status' => 1,
            ),
            215 => 
            array (
                'id' => 216,
                'short_name' => 'TZ',
                'name' => 'Tanzania',
                'slug' => 'tanzania',
                'phone_code' => 255,
                'status' => 1,
            ),
            216 => 
            array (
                'id' => 217,
                'short_name' => 'TH',
                'name' => 'Thailand',
                'slug' => 'thailand',
                'phone_code' => 66,
                'status' => 1,
            ),
            217 => 
            array (
                'id' => 218,
                'short_name' => 'TG',
                'name' => 'Togo',
                'slug' => 'togo',
                'phone_code' => 228,
                'status' => 1,
            ),
            218 => 
            array (
                'id' => 219,
                'short_name' => 'TK',
                'name' => 'Tokelau',
                'slug' => 'tokelau',
                'phone_code' => 690,
                'status' => 1,
            ),
            219 => 
            array (
                'id' => 220,
                'short_name' => 'TO',
                'name' => 'Tonga',
                'slug' => 'tonga',
                'phone_code' => 676,
                'status' => 1,
            ),
            220 => 
            array (
                'id' => 221,
                'short_name' => 'TT',
                'name' => 'Trinidad And Tobago',
                'slug' => 'trinidad-and-tobago',
                'phone_code' => 1868,
                'status' => 1,
            ),
            221 => 
            array (
                'id' => 222,
                'short_name' => 'TN',
                'name' => 'Tunisia',
                'slug' => 'tunisia',
                'phone_code' => 216,
                'status' => 1,
            ),
            222 => 
            array (
                'id' => 223,
                'short_name' => 'TR',
                'name' => 'Turkey',
                'slug' => 'turkey',
                'phone_code' => 90,
                'status' => 1,
            ),
            223 => 
            array (
                'id' => 224,
                'short_name' => 'TM',
                'name' => 'Turkmenistan',
                'slug' => 'turkmenistan',
                'phone_code' => 7370,
                'status' => 1,
            ),
            224 => 
            array (
                'id' => 225,
                'short_name' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'slug' => 'turks-and-caicos-islands',
                'phone_code' => 1649,
                'status' => 1,
            ),
            225 => 
            array (
                'id' => 226,
                'short_name' => 'TV',
                'name' => 'Tuvalu',
                'slug' => 'tuvalu',
                'phone_code' => 688,
                'status' => 1,
            ),
            226 => 
            array (
                'id' => 227,
                'short_name' => 'UG',
                'name' => 'Uganda',
                'slug' => 'uganda',
                'phone_code' => 256,
                'status' => 1,
            ),
            227 => 
            array (
                'id' => 228,
                'short_name' => 'UA',
                'name' => 'Ukraine',
                'slug' => 'ukraine',
                'phone_code' => 380,
                'status' => 1,
            ),
            228 => 
            array (
                'id' => 229,
                'short_name' => 'AE',
                'name' => 'United Arab Emirates',
                'slug' => 'united-arab-emirates',
                'phone_code' => 971,
                'status' => 1,
            ),
            229 => 
            array (
                'id' => 230,
                'short_name' => 'GB',
                'name' => 'United Kingdom',
                'slug' => 'united-kingdom',
                'phone_code' => 44,
                'status' => 1,
            ),
            230 => 
            array (
                'id' => 231,
                'short_name' => 'US',
                'name' => 'United States',
                'slug' => 'united-states',
                'phone_code' => 1,
                'status' => 1,
            ),
            231 => 
            array (
                'id' => 232,
                'short_name' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'slug' => 'united-states-minor-outlying-islands',
                'phone_code' => 1,
                'status' => 1,
            ),
            232 => 
            array (
                'id' => 233,
                'short_name' => 'UY',
                'name' => 'Uruguay',
                'slug' => 'uruguay',
                'phone_code' => 598,
                'status' => 1,
            ),
            233 => 
            array (
                'id' => 234,
                'short_name' => 'UZ',
                'name' => 'Uzbekistan',
                'slug' => 'uzbekistan',
                'phone_code' => 998,
                'status' => 1,
            ),
            234 => 
            array (
                'id' => 235,
                'short_name' => 'VU',
                'name' => 'Vanuatu',
                'slug' => 'vanuatu',
                'phone_code' => 678,
                'status' => 1,
            ),
            235 => 
            array (
                'id' => 236,
                'short_name' => 'VA',
            'name' => 'Vatican City State (Holy See)',
                'slug' => 'vatican-city-state-holy-see',
                'phone_code' => 39,
                'status' => 1,
            ),
            236 => 
            array (
                'id' => 237,
                'short_name' => 'VE',
                'name' => 'Venezuela',
                'slug' => 'venezuela',
                'phone_code' => 58,
                'status' => 1,
            ),
            237 => 
            array (
                'id' => 238,
                'short_name' => 'VN',
                'name' => 'Vietnam',
                'slug' => 'vietnam',
                'phone_code' => 84,
                'status' => 1,
            ),
            238 => 
            array (
                'id' => 239,
                'short_name' => 'VG',
            'name' => 'Virgin Islands (British)',
                'slug' => 'virgin-islands-british',
                'phone_code' => 1284,
                'status' => 1,
            ),
            239 => 
            array (
                'id' => 240,
                'short_name' => 'VI',
            'name' => 'Virgin Islands (US)',
                'slug' => 'virgin-islands-us',
                'phone_code' => 1340,
                'status' => 1,
            ),
            240 => 
            array (
                'id' => 241,
                'short_name' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'slug' => 'wallis-and-futuna-islands',
                'phone_code' => 681,
                'status' => 1,
            ),
            241 => 
            array (
                'id' => 242,
                'short_name' => 'EH',
                'name' => 'Western Sahara',
                'slug' => 'western-sahara',
                'phone_code' => 212,
                'status' => 1,
            ),
            242 => 
            array (
                'id' => 243,
                'short_name' => 'YE',
                'name' => 'Yemen',
                'slug' => 'yemen',
                'phone_code' => 967,
                'status' => 1,
            ),
            243 => 
            array (
                'id' => 244,
                'short_name' => 'YU',
                'name' => 'Yugoslavia',
                'slug' => 'yugoslavia',
                'phone_code' => 38,
                'status' => 1,
            ),
            244 => 
            array (
                'id' => 245,
                'short_name' => 'ZM',
                'name' => 'Zambia',
                'slug' => 'zambia',
                'phone_code' => 260,
                'status' => 1,
            ),
            245 => 
            array (
                'id' => 246,
                'short_name' => 'ZW',
                'name' => 'Zimbabwe',
                'slug' => 'zimbabwe',
                'phone_code' => 263,
                'status' => 1,
            ),
        ));
        
        
    }
}
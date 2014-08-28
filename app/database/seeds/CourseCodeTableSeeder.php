<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CourseCodeTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$course_code_list = [
			'ANTHRO',
			'ART',
			'ART HIST',
			'ARTS&SCI',
			'ASTRON',
			'AUTOTECH',
			'BIOCHEM',
			'BIO',
			'BIOPHYS',
			'BIOTECH',
			'CAYUGA',
			'CHEM BIO',
			'CHEM ENG',
			'CHEM',
			'CHINESE',
			'CIV ENG',
			'CIV TECH',
			'CLASSICS',
			'COLLAB',
			'COMMERCE',
			'CMST',
			'COM ENG',
			'COM SCI',
			'COM TECH',
			'CSCT',
			'EARTH SCI',
			'ECON',
			'ELEC ENG',
			'ENR TECH',
			'ENG',
			'ENGSOCTY',
			'ENGMGMT',
			'ENG PHYS',
			'ENG TECH',
			'ENGLISH',
			'ENVIR SCI',
			'FRENCH',
			'GEN TECH',
			'GEO',
			'GERMAN',
			'GREEK',
			'HTH SCI',
			'HLTH AGE',
			'HEBREW',
			'HISTORY',
			'HUMAN',
			'INDIG ST',
			'ISCI',
			'ITALIAN',
			'JAPANESE',
			'KINESIOL',
			'LABR ST',
			'LATIN',
			'LIFE SCI',
			'LINGUIST',
			'MAN TECH',
			'MATLS',
			'MATH',
			'MELD',
			'MECH ENG',
			'MECHTRON',
			'MED PHYS',
			'MEDRADSC',
			'MIDWIF',
			'MOHAWK',
			'MOL BIO',
			'MMEDIA',
			'MUSIC',
			'MUSICCOG',
			'NURSING',
			'OJIBWE',
			'ORIGINS',
			'PEACE ST',
			'PHARMAC',
			'PHILOS',
			'PHYSICS',
			'POLISH',
			'POL SCI',
			'PROCTECH',
			'PSYCH',
			'PNB',
			'RELIG ST',
			'RUSSIAN',
			'SANSKRIT',
			'SCIENCE',
			'SOC PSY',
			'SOC SCI',
			'SOCWORK',
			'SOCIOL',
			'SFWR ENG',
			'SPANISH',
			'STATS',
			'SUSTAIN',
			'THTR%FLM',
			'WHMIS',
			'WOMEN ST'
		];

		foreach($course_code_list as $course_code)
		{
			CourseCode::create([
				'course_code' => $course_code
			]);
		}
	}

}